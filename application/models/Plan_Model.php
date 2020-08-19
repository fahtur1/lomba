<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Plan_Model extends CI_Model
{
    private $table = 'plan';
    private $key = 'plan_id';

    public function insertPlan($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function updatePlan($data)
    {
        $this->db->where($this->key, $data[$this->key]);
        return $this->db->update($this->table, $data);
    }

    public function getPlans()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('product', 'product.product_id = plan.product_id');
        $this->db->join('model', 'model.product_id = product.product_id');
        return $this->db->get()->result_array();
    }

    public function getPlanById($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('product', 'product.product_id = plan.product_id');
        $this->db->join('model', 'model.product_id = product.product_id');
        $this->db->where($this->key, $id);
        return $this->db->get()->row_array();
    }
}
