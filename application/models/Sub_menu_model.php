<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sub_menu_model extends CI_Model
{
    private $_table = "user_sub_menu";
    var $id = 'id';

    public function getAll()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->get_where($this->_table, array($this->id => $id))->row();
    }

    //submenu

    public function save_sub_menu($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function edit_sub_menu($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update_sub_menu($where, $data, $_table)
    {
        $this->db->where($where);
        $this->db->update($_table, $data);
    }

    public function delete_sub_menu($where, $_table)
    {
        $this->db->where($where);
        $this->db->delete($_table);
    }
}
