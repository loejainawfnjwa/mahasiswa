<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KelasModel extends CI_Model {
    public function DataMahasiswa()
    {
        return $this->db->get('tabel_2101060006')->result_array();
    }
}