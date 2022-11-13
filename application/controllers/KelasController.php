<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KelasController extends CI_Controller {

    public function index()
    {
        $data['mahasiswa'] = $this->KelasModel->DataMahasiswa();
        return $this->load->view('v_mahasiswa', $data);
    }
}