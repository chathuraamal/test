<?php

class Employee extends CI_Controller {
 
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
        if (!($this->session->userdata('logged_in'))) {
            redirect('login', 'refresh');
        } else {
            $this->load->helper('html');
            $this->load->library('excel');

            $this->load->view('employee/employee_main.php');
        }
    }

    public function view_employee() {
        $this->load->library('table');
        $var_2 = $this->db->get('designation');
        echo $this->table->generate($var_2);
      
        foreach ($var_2->result() as $value) {
            echo $value->designation_id.'<br>';
            echo $value->designation.'<br>';
            echo $value->basic.'<br>';
        };

        $this->load->view('employee/view_employee.php');
    }
    
    
    public function view_attendance() {
        // displays all the attendance info of employees
        $this->load->model('attendance');
        $this->load->view('employee/view_attendance.php');
        $this->load->library('table');
        
        $this->attendance->empno = 'test emp1';
        $this->attendance->save();
        echo "<tt><pre>".var_export($this->attendance,TRUE)."<tt><pre>"; 

        $var1 = $this->db->get('attendance'); 

//       foreach ($var1->result() as $row) {
//            echo $row->empno."<br>";
//            echo $row->work_date."<br>";
//            echo $row->in_time."<br>";
//            echo $row->out_time."<br>";
//            echo $row->late_duration."<br>";
//            echo $row->overtime."<br>";
//            echo $row->attendance."<br>";
//            
//           	
//        }
        $row_1=$var1->row(7);
       // var_dump($row_1);
        
        echo $this->table->generate($var1);

    } 

    public function add_employee() {
         //set validation rules
    $this->form_validation->set_rules('employeeno', 'Employee No', 'trim|required|numeric');
    $this->form_validation->set_rules('employeename', 'Employee Name', 'trim|required|xss_clean|callback_alpha_only_space');
    $this->form_validation->set_rules('department', 'Department', 'callback_combo_check');
    $this->form_validation->set_rules('designation', 'Designation', 'callback_combo_check');
    $this->form_validation->set_rules('hireddate', 'Hired Date', 'required');
    $this->form_validation->set_rules('salary', 'Salary', 'required|numeric');
        
        
        $this->load->view('employee/add_employee.php');
    }

    public function employee_info() {
        print_r(var_dump($_POST));
        foreach ($_POST as $key => $Val) {

            echo $key . " : " . $Val;
            echo "<br>";
        }
    }

    public function employee_test() {

        $file = './files/test_sheet.csv';
        
        echo "file loaded successfull!"."<br>";
        
//load the excel library
        $this->load->library('excel');
//read file from path
        $objPHPExcel = PHPExcel_IOFactory::load($file);
//get only the Cell Collection
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
//extract to a PHP readable array format
        foreach ($cell_collection as $cell) {
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            //header will/should be in row 1 only. of course this can be modified to suit your need.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            } else {
                $arr_data[$row][$column] = $data_value;
            }
        }
//send the data in an array format
        $data['header'] = $header;
        $data['values'] = $arr_data;

        echo "<br>" . $count = count($data['values']);        
        

        echo "<pre>";
        // var_dump($data['header'][1]['B']);
        //print_r($data['values']['2']['B']); 




//foreach ($data as $values){
//    for($x=0;$x<=$count;$x++){
//        $insData[$x] = array(
//            'empno' => $data['values']['2']['A'],
//            'work_date' => $data['values']['2']['B'],
//            'in_time' => $data['values']['2']['C'],
//            'out_time' => $data['values']['2']['D'],
//            'late_duration' => $data['values']['2']['F'],
//            'overtime' => $data['values']['2']['H'],
//            'attendance' => $data['values']['2']['I']
//    
//    
//    );};
//                             
//};

        foreach ($data['values'] as $row) {
            if (!isset($row['C'])) {
                $row['C']='00:00:00';             
            }       
            if (!isset($row['D'])) {
                $row['D']='00:00:00';              
            }       
                        
            $insData = array(
                'empno' => $row['A'],
                'work_date' => $row['B'],
                'in_time' => $row['C'],
                'out_time' => $row['D'],
                'late_duration' => $row['F'],
                'overtime' => $row['H'],
                'attendance' => $row['I']);
            $this->db->insert('attendance', $insData);
            echo "<pre>";
            print_r($insData);
            echo "<pre>";
        }

       

        echo "<pre>";

        echo "<pre>";
    }

    public function excel_test() {
        
        $file_2 = fopen("./files/test_sheet.csv",'r');       
        echo "<pre>";
        print_r(fread($file_2,filesize("./files/test_sheet.csv")));
        print_r(fgetcsv($file_2));
        echo "<pre>";
        
        
    }
    
    public function file_test(){
        
        $query_1=  $this->db->query('select * from attendance');
        echo "<pre>";
        var_dump($query_1);
        echo "<pre>";
        
        foreach ($query_1->result() as $row)
            {
            echo $row->empno;
            
        }
        
//        echo __FILE__;
//        echo "<br>";
//        echo __dir__;
//        echo "<br>";
//        echo dirname(__FILE__);
//        echo "<br>";
//        echo __line__;
//        echo "<br>";
//        
//       echo file_exists(__FILE__) ? 'yes':'no';
//        echo "<br>";
//        
//        
//       echo file_exists(dirname(__FILE__).'/index.html') ? 'yes':'no';
//        echo "<br>";
//        
//       echo is_file(dirname(__FILE__).'/index.html') ? 'yes':'no';
//        echo "<br>";
//       echo is_file(dirname(__FILE__)) ? 'yes':'no';
//       
//       
//        echo "<br>";        
//       echo is_dir(dirname(__FILE__).'/index.html') ? 'yes':'no';
//        echo "<br>";
//       echo is_dir(dirname(__FILE__)) ? 'yes':'no';
//       
//       echo "<br>";
//       echo is_dir("..") ? 'yes':'no';
//       
//       
//       $mytest= null;
//       if (!isset($mytest)){
//           echo "<br>it does exist";
//       }else{ echo "it doesn't ";}
        
    }
    
    function readExcel()
{
        $this->load->library('csvreader');
        $result =   $this->csvreader->parse_file('./files/test_sheet.csv');
        echo "<pre>";
        print_r($result);
        echo "<pre>";
        
        echo $result['1']['emp_no'];
        
         foreach ($result as $row) {
            $insData = array(
                'empno' => $result['1']['emp_no'],
                'work_date' => $result['1']['date'],
                'in_time' => $result['1']['emp_no'],
                'out_time' => $row['D'],
                'late_duration' => $row['F'],
                'overtime' => $row['H'],
                'attendance' => $row['I']);
            
            echo "<pre>";
            print_r($insData);
            echo "<pre>";
        }

//        $data['csvData'] =  $result;
//        $this->load->view('view_csv', $data);  
}




    public function test_1() {
        $fileowner = fileowner('./application/controllers/blog.php');

        var_dump($fileowner);
        echo '<br>';
        echo __FILE__;
        
        $numbers= array (1,2,3,4,5,6);
        
        echo "<br>";
        $a= array_shift($numbers);
        echo $a."<br>";
        print_r ($numbers);
        
        $a= array_unshift($numbers,"test");
        echo $a."<br>";
        print_r ($numbers);
        
        echo "<hr>";
        
        $a= array_pop($numbers);
        echo $a."<br>";
        print_r ($numbers);
        echo "<br>";
       
        $a= array_push($numbers,"last");
        echo $a."<br>";
        print_r ($numbers);
        
        echo "<br>";

        echo time();
        echo "<br>";
        $time_value = time();
        echo $time_value / (60*60*24*365);
        echo "<hr>";
        
        
        
    }

}
