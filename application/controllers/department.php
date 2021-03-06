<?php
/* 
 * File Name: employee.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        //load the employee model
        $this->load->model('employee_model');
    }
    

  
    function index()
    {   
        //fetch data from department and designation tables
        $data['department'] = $this->employee_model->get_department();
        $data['designation'] = $this->employee_model->get_designation();

        //set validation rules
        $this->form_validation->set_rules('epfno', 'Employee No', 'trim|required|numeric');
        $this->form_validation->set_rules('employeename', 'Employee Name', 'trim|required|xss_clean|callback_alpha_only_space');
        $this->form_validation->set_rules('department', 'Department', 'callback_combo_check');
        $this->form_validation->set_rules('designation', 'Designation', 'callback_combo_check');
        $this->form_validation->set_rules('hireddate', 'Hired Date', 'required');
        $this->form_validation->set_rules('salary', 'Salary', 'required|numeric');

        if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            $this->load->view('employee/add_employee_1', $data);
        }
        else
        {    
            //pass validation 
            echo "from inside the input!!!";
            echo "<pre>";
            var_dump($_POST);
            echo "<pre>";
            $data = array(
                'epfno' => $this->input->post('epfno'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'dob' => $this->input->post('dob'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'dept_id' => $this->input->post('department'),
                'designation_id' => $this->input->post('designation'),
                'hired_date' => @date('Y-m-d', @strtotime($this->input->post('hireddate'))),
                'salary' => $this->input->post('salary'),
            );

            //insert the form data into database
            $this->db->insert('employee', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee details added to Database!!!</div>');
            redirect('employee/index');
        }

    }
    
    //custom validation function for dropdown input
    function combo_check($str)
    {
        if ($str == '-SELECT-')
        {
            $this->form_validation->set_message('combo_check', 'Valid %s Name is required');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    //custom validation function to accept only alpha and space input
    function alpha_only_space($str)
    {
        if (!preg_match("/^([-a-z ])+$/i", $str))
        {
            $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    } 
    
    public function temp_insert(){
        
         $data = array(
                
                'epfno' => $this->input->post('epfno'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'dob' => $this->input->post('dob'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'department' => $this->input->post('department'),
                'designation' => $this->input->post('designation'),
                'hired_date' => @date('Y-m-d', @strtotime($this->input->post('hireddate'))),
                //'salary' => $this->input->post('salary'),
            );

            //insert the form data into database
            $this->db->insert('employee', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee details added to Database!!!</div>');
            redirect('department');
            
            echo "data insert";
        
        
    }
    
}
?>