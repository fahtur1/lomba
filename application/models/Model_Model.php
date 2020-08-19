<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Model extends CI_Model
{
    private $table = 'model';
    private $key = 'model_id';

    public function insertModel($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function updateModel($data)
    {
        $this->db->where($this->key, $data[$this->key]);
        return $this->db->update($this->table, $data);
    }

    public function getModels()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function getModelById($id)
    {
        return $this->db->get_where([$this->key => $id])->row_array();
    }
}
