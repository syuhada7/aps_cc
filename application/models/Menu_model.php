<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    private $_table = "user_menu";
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

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
                     FROM `user_sub_menu` JOIN `user_menu`
                     ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
            ";
        return $this->db->query($query)->result_array();
    }

    public function save_menu($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function edit_menu($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update_menu($where, $data, $_table)
    {
        $this->db->where($where);
        $this->db->update($_table, $data);
    }

    public function delete_menu($where, $_table)
    {
        $this->db->where($where);
        $this->db->delete($_table);
    }
}
