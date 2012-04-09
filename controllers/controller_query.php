<?php

class Controller_query extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_query');
    }

    function index() {
        $eksekusi = $this->input->post('eksekusi');
        if ($eksekusi == '') {
            $eksekusi = 'select * from mahasiswa';
        }
        //$this->model_query->GetAll($eksekusi);
        $data['column'] = $this->model_query->GetField($eksekusi);
        $data['isi'] = $this->model_query->GetAll($eksekusi);
        //$data['baris'] = $this->model_query->JmlBaris($eksekusi);
        //$data['kolom'] = $this->model_query->JmlField($eksekusi);
        $this->load->view('view_query', $data);
    }

}

?>