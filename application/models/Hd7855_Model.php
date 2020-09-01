<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hd7855_Model extends CI_Model
{
    private $table = 'hd785-5';
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
