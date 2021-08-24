<?php
    // include fils
    include('inc/config.php');

    // index programm project
    $controller = (isset($_GET['controller'])?$_GET['controller']:'home');

    $method = (isset($_GET['method'])?$_GET['method'].'Action':'viewAction');

    if(is_file('controller/'.$controller.'.php')){
        include('controller/'.$controller.'.php');
        $splitController = explode('/',$controller);
        $controller = end($splitController);
        $class = new $controller();
    }else{
        include('controller/error.php');
        $class = new $error();
    }
    if(method_exists($class, $method)){
        $class->$method();
    }else{
        include('controller/home.php');
        $class = new home();
        $class = viewAction();
    }

?>
