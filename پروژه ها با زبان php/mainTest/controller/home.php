<?php 
    class home extends controller{

        // View error
        public function viewAction(){
            if(isset($_GET['con'])){


                if($_GET['con'] == 'iran'){
                  include(__WEB_TEMPLATE__.'landing-pre.php');
                }else{
                  include(__WEB_TEMPLATE__.'landing.php');
                }
        
            }else{
        
                if(isset($_GET['s']) == 'help'){
                  include(__WEB_TEMPLATE__.'help.php');
                }else{
                  include(__WEB_TEMPLATE__.'landing.php');
                }
        
        
            }
        }
  
    }
?>