<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";
    var $id = 'id_user';

    public function getAll()
    {
        $this->db->order_by('id_user', 'ASC');
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        $this->db->order_by('id_user', 'ASC');
        return $this->db->get_where($this->_table, array($this->id => $id))->row();
    }
    public function save($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function edit($where, $_table)
    {
        return $this->db->get_where($_table, $where);
    }

    public function update($where, $data, $_table)
    {
        $this->db->where($where);
        $this->db->update($_table, $data);
    }
    public function delete($where, $_table)
    {
        $this->db->where($where);
        $this->db->delete($_table);
    }
}
