<?php defined('BASEPATH') or exit('No direct script access allowed');
class M_auth extends CI_Model
{
    public function CekLogin($table, $user, $pass)
    {
        $this->db->where($user, $pass);
        return $this->db->get($table)->row_array();
    }
}
