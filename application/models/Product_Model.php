<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_Model extends CI_Model
{
    private $table = 'product';
    private $key = 'product_id';

    public function insertProduct($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function updateProduct($data)
    {
        $this->db->where($this->key, $data[$this->key]);
        return $this->db->update($this->table, $data);
    }

    public function getProducts()
    {
        return $this->db->get_where($this->table)->result_array();
    }

    public function getProductById($id)
    {
        return $this->db->get_where($this->table, [$this->key => $id])->row_array();
    }
}
