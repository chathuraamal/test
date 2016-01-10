<?php

class Department extends CI_Controller {
 
    public function __construct()
{
    parent::__construct();
    $this->load->library('session');
    $this->load->helper('form');
    $this->load->helper('url');    
    //$this->load->library('form_validation');
    //load the employee model
    $this->load->model('employee_model');
}
          

    public function index() {     
        $this->load->library('table');
         $data['department'] = $this->employee_model->get_department();
         echo "<pre>";
         print_r($data);
         echo "<pre>";
        
        
        $this->load->view('employee/view_department.php',$data);
    }

}