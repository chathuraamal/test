<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Generic_model', '', TRUE);
        //$this->load->model('Db_model','', TRUE);
    }

	public function index()
	{
		$this->load->view('test/test.php');
           
            
	}         
    public function hello()
	{
		//$this->load->view('student/student.php');
            echo "hi";
            
	}
        public function test_2(){
            echo "this is test 2";
            
        }
        
}
?>
