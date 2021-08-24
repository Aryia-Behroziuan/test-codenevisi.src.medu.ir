<?php 
    class Tow extends controller{

        // View error
        public function viewAction(){
            include(__WEB_TEMPLATE__.'one.php');

        }

        
        // View error
        public function runAction(){
            if(strlen($_POST['start'])<1){
                $this->response(json_encode(array('status'=>'fail', 'massage'=>'<div class="alert alert-soft-danger" role="alert">
                لطفا ورودی خود را در بخش مبداع چک کنید خطا پارامتر نامشخص
              </div>')));
            }
            if(strlen($_POST['stop'])<1){
                $this->response(json_encode(array('status'=>'fail', 'massage'=>'<div class="alert alert-soft-danger" role="alert">
                لطفا ورودی خود را در بخش مقصد چک کنید خطا پارامتر نامشخص
              </div>')));
            }

            // save data
            $start = $_POST['start'];
            $stop = $_POST['stop'];

            // start math
            if($stop>$start){
                $min = $stop - $start;
                $req= 'به سمت بالا';
            }else{
                $min = $start - $stop;
                $req= 'به سمت پایین';
            }
            
            $math = $min * 7;
 
            $this->response(json_encode(array('status'=>'fail', 'massage'=>'
            <div class="alert alert-soft-primary" role="alert">
               تعداد طبقات جابجایی'.$min.'
                '.$req.'
                <br>زمانی که صرف خواهید کرد به ثانیه '.$math.'
            </div>


            ')));

        }
  
    }
?>