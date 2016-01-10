<?php
/* 
 * File Name: employee_model.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class employee_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //get department table to populate the department name dropdown
    function get_department()     
    { 
        $this->db->select('dept_id');
        $this->db->select('dept_name');
        $this->db->from('department');
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $dept_id = array();
        $dept_name = array();

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($dept_id, $result[$i]->dept_id);
            array_push($dept_name, $result[$i]->dept_name);
        }
        return $department_result = array_combine($dept_id, $dept_name);
    }

    //get designation table to populate the designation dropdown
    function get_designation()     
    { 
        $this->db->select('designation_id');
        $this->db->select('designation');
        $this->db->from('designation');
        $query = $this->db->get();
        $result = $query->result();

        $designation_id = array('-SELECT-');
        $designation_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($designation_id, $result[$i]->designation_id);
            array_push($designation_name, $result[$i]->designation);
        }
        return $designation_result = array_combine($designation_id, $designation_name);
    }
}
?>