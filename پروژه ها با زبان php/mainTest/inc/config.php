<?php
    // config project
    define('DS',DIRECTORY_SEPARATOR);
    define('__WEB_TEMPLATE__',__DIR__.DS.'..'.DS.'views'.DS);
    define('__WEB_PUBLIC__',__DIR__.DS.'..'.DS.'public'.DS);

    // include files
    session_start();
    include(__DIR__.DS.'controller.php');
?>