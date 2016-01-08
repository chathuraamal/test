<?php

/* 
 * This will act as the main controller for the payroll system
 * any additional controlers will be liked with this one 
 */

class Main extends CI_Controller {

        public function  add(){
            $this->load->model('math');
            print_r($_POST);
            if($_POST['op']=="+"){
            $result['result']= $this->math->add($_POST['num1'],$_POST['num2']);
            $this->load->view('main/main',$result);
            }
            if($_POST['op']=="-"){
            $result['result']= $this->math->subt($_POST['num1'],$_POST['num2']);
            $this->load->view('main/main',$result);
            }
            
        }
}


?>