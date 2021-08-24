<?php 
class controller{

    // Send email for login
    public function sendMail($to,$subject,$message){
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        mail($to, $subject, $message, implode("\r\n", $headers));
    }

    // render file
    public function render($template, $param=array()){
        foreach($param as $index => $content){
            define(strtoupper($index), $content);
        }
        include(__WEB_TEMPLATE__.$template);

        die();
    }

    public function response($data, $output='application/json'){
        header('Content-Type:'.$output);
        echo $data;
        die();
    }

}
?>