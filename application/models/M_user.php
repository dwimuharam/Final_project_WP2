<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function hapususer($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}
