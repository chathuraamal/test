<?php

/*
 * This will act as the main controller for the payroll system
 * any additional controlled will be liked with this one :) hopefully
 */

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Generic_model', '', TRUE);
        //$this->load->model('Db_model','', TRUE);
    }

    public function index() {


        //this allows for dynamic change of title if needed
        $title = array('title' => 'login page');
        $this->load->view('login/login', $title);
        //$result=$this->db_model->getData();
    }

    public function verify_user() {

        $pswrd = ($_POST['password']);
        $username = ($_POST['username']);
        $wherearray = array('username' => $username, 'password' => $pswrd);
        $columnarr= array('username');
        $result = $this->Generic_model->getdata('users', $columnarr, $wherearray, 0, 0);
        
        if($result){
            echo "you have logged in!";
            $this->session->set_userdata('logged_in',$result[0]);
            $a=$this->session->userdata('logged_in');
            $this->load->view('main/main');
            var_dump($a);
           
        }else{
            echo "wrong username/password!!";
            redirect('login','refresh');
        }
        
    }
    public function logout(){
        $this->session->unset_userdata('logged_in');
        echo "you have logged out of the system";
        redirect('login','refresh');
        
    }

}

?>