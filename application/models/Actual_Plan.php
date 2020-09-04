<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actual_Plan extends CI_Model
{
    private $table = 'actual';
    private $key = 'actual_id';

    public function insertActual($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function updateActual($data)
    {
        $this->db->where($this->key, $data[$this->key]);
        return $this->db->update($this->table, $data);
    }

    public function getActuals()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('ppm', 'ppm.ppm_id = actual.ppm_id');
        $this->db->join('plan', 'plan.product_id = actual.product_id');
        $this->db->join('product', 'product.product_id = plan.product_id');
        $this->db->join('model', 'model.product_id = product.product_id');
        return $this->db->get()->result_array();
    }

    public function getActualJoin($table)
    {
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->join($table, $table . '.id_update = ' . $this->table . '.id_update');
        $this->db->join('plan', 'plan.plan_id = actual.plan_id');
        $this->db->join('product', 'product.product_id = plan.product_id');
        $this->db->join('model', 'model.model_id = product.model_id');
        return $this->db->get()->result_array();
    }

    public function getActualRow($table, $ps)
    {
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->join($table, $table . '.id_update = ' . $this->table . '.id_update');
        $this->db->join('plan', 'plan.plan_id = actual.plan_id');
        $this->db->join('product', 'product.product_id = plan.product_id');
        $this->db->join('model', 'model.model_id = product.model_id');
        $this->db->where('ps_type', $ps);
        return $this->db->get()->num_rows();
    }

    public function getActualById($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('plan', 'plan.product_id = actual.product_id');
        $this->db->join('product', 'product.product_id = plan.product_id');
        $this->db->join('model', 'model.product_id = product.product_id');
        $this->db->where($this->key, $id);
        return $this->db->get_where()->row_array();
    }
}
