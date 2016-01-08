<?php

class Db_model extends CI_Model {

//    public function addData($tablename, $data_arr) {
//        $a = $this->db->insert($tablename, $data_arr);
//        return $a;
//    }
    function getData(){
        $result=$this->db->query("select * from users");
        return $result->result();
    }
    
    function insertData($tablename,$data_array){
        $this->db->insert($tablename,$data_array);
                
        
    }

}

?>