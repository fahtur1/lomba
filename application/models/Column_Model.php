<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Column_Model extends CI_Model
{
    public function getColumn($table)
    {
        $this->db->select("COLUMN_NAME as column");
        $this->db->from("information_schema.columns");
        $this->db->where("table_name", $table);
        $this->db->where("table_schema", "lomba");
        return $this->db->get()->result_array();
    }
}