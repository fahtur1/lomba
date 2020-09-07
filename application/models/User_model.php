<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $table = 'user';
    private $key = 'user_id';

    public function getUserByEmail($email)
    {
        return $this->db->get_where($this->table, ['email' => $email])->row_array();
    }
}
