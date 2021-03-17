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
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('model', 'model.model_id = product.model_id');
        $this->db->order_by('product_code','asc');
        return $this->db->get()->result_array();
    }

    public function getProductById($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('model', 'model.model_id = product.model_id');
        $this->db->where($this->key, $id);
        return $this->db->get()->row_array();
    }
}
