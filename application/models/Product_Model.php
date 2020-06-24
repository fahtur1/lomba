<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_Model extends CI_Model
{
    public function insertProduct($data)
    {
        return $this->db->insert('product', $data);
    }

    public function updateProduct($data)
    {
        $this->db->where('product_id', $data['product_id']);
        return $this->db->update('product', $data);
    }

    public function getProducts()
    {
        return $this->db->get_where('product')->result_array();
    }

    public function getProductById($id)
    {
        return $this->db->get_where('product', ['product_id' => $id])->row_array();
    }
}
