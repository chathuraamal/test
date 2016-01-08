<?php

class Math extends CI_Model {

    public function add($var1, $var2) {
        $result = $var1 + $var2;
        return $result;
    }

    public function subt($var1, $var2) {
        $result = $var1 - $var2;
        return $result;
    }
    public function multiply($var1, $var2) {
        $result = $var1 * $var2;
        return $result;
    }
    public function devide($var1, $var2) {
        $result = $var1 / $var2;
        return $result;
    }

}

?>