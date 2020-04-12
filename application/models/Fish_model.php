<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fish_model extends CI_Model
{
    private $_table = "fish";
    var $id = 'id_fish';

    public function getAll()
    {
        $this->db->order_by('id_fish', 'ASC');
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        $this->db->order_by('id_fish', 'ASC');
        return $this->db->get_where($this->_table, array($this->id => $id))->row();
    }

    public function save($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function delete($where, $_table)
    {
        $this->db->where($where);
        $this->db->delete($_table);
    }
}
