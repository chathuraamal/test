<?php

class Generic_model extends CI_Model {

    function getData($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0) {
        $limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->where($where_arr);
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            } elseif ($limit == 0 AND $offset > 0) {
                $this->db->limit(0, $offset);
            }

            $query = $this->db->get();

            return $query->result();
        }
    }

    function getDataOr($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0) {
        $limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->or_where($where_arr); //Or operator added here
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            } elseif ($limit == 0 AND $offset > 0) {
                $this->db->limit(0, $offset);
            }

            $query = $this->db->get();

            return $query->result();
        }
    }

    function insertData($tablename, $data_arr) {
        $this->db->insert($tablename, $data_arr);
     
    }

    function updateData($tablename, $data_arr, $where_arr) {
        $this->db->update($tablename, $data_arr, $where_arr);
    }

    function deleteData($tablename, $where_arr, $trno = Null) {

        $this->db->where($where_arr, NULL, FALSE);
        $result = $this->db->delete($tablename);

        return $result;
    }

    /*     * ****** Grid Functions ********* */

    function getNextSerialNumber($Code) {
        try {
            $strSQL = "SELECT serial from tbl_serial where code = '" . $Code . "'";
            $query = $this->db->query($strSQL);
            $currentSN = $query->result();
            if ($currentSN) {
                $serailno = ((int) $currentSN[0]->serial) + 1;
            } else {
                $serailno = 99999;
            }
        } catch (Exception $ex) {

            $serailno = 900000;
        }
        //$serailno = 100;
        return $serailno;
    }

    function increaseSerialNumber($Code) {
        try {

            $strSQL = "UPDATE tbl_serial SET serial = serial + 1 WHERE code = '" . $Code . "'";
            $query = $this->db->query($strSQL);
            $rtn = TRUE;
        } catch (Exception $ex) {

            $rtn = FALSE;
        }
        return $rtn;
    }

}

?>
