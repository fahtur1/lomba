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
        $this->db->join('model', 'model.model_id = product.model_id');
        $this->db->where($this->table . '.updated', '0');
        return $this->db->get()->result_array();
    }

    public function getPlanById($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('product', 'product.product_id = plan.product_id');
        $this->db->join('model', 'model.model_id = product.model_id');
        $this->db->where($this->table . '.updated', '0');
        $this->db->where($this->key, $id);
        return $this->db->get()->row_array();
    }

    /**
     * TODO : YANG INI DI UBAH JUGA DI
     */
    public function getPlanRow($model, $ps)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('product', 'product.product_id = plan.product_id');
        $this->db->join('model', 'model.model_id = product.model_id');
        $this->db->where('ps_type', $ps);
        $this->db->where('model.model_id', $model);
        $this->db->where($this->table . '.updated', '0');
        return $this->db->get()->num_rows();
    }

    public function updated_plan($id, $data)
    {
        $this->db->where($this->key, $id);
        return $this->db->update($this->table, $data);
    }
}
