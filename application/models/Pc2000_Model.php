<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pc2000_Model extends CI_Model
{
    private $table = 'pc2000-8';
    private $key = 'id_update';

    public function insertPs2($data, $dataActual)
    {
        if ($this->db->insert('actual', $dataActual)) {
            return $this->db->insert($this->table, $data);
        }
    }

    public function insertPs34($data, $dataActual, $dataOther)
    {
        if ($this->db->insert('actual', $dataActual)) {
            if ($this->db->insert('other_data', $dataOther)) {
                return $this->db->insert($this->table, $data);
            }
        }
    }
}
