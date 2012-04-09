<?php

class Model_query extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function GetField($eksekusi) {
        $query = $this->db->query($eksekusi);
        if ($query->num_rows() > 0) {
            return $query->list_fields();
        } else {
            return array();
        }
    }

    function GetAll($eksekusi) {
        $query = $this->db->query($eksekusi);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
}

?>