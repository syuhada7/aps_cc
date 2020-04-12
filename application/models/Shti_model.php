<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shti_model extends CI_Model
{

	private $_table = "shti";
	var $id = 'id_idla';

	public function getAll()
	{
		$this->db->order_by('id_idla', 'ASC');
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		$this->db->order_by('id_idla', 'ASC');
		return $this->db->get_where($this->_table, array($this->id => $id))->row();
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('shti');
		$this->db->like('no_idla', $keyword);
		$this->db->or_like('supplier', $keyword);
		$this->db->or_like('name_vessel', $keyword);
		$this->db->or_like('gt', $keyword);
		$this->db->or_like('catch', $keyword);
		$this->db->or_like('length', $keyword);
		$this->db->or_like('wpp', $keyword);
		$this->db->or_like('port', $keyword);
		$this->db->or_like('captain', $keyword);
		$this->db->or_like('trip', $keyword);
		$this->db->or_like('until', $keyword);
		$this->db->or_like('rfmo', $keyword);
		$this->db->or_like('no_rfmo', $keyword);
		$this->db->or_like('issf', $keyword);
		$this->db->or_like('no_issf', $keyword);
		$this->db->or_like('species', $keyword);
		$this->db->or_like('qty', $keyword);
		$this->db->or_like('fip', $keyword);
		$this->db->or_like('area', $keyword);
		$this->db->or_like('note', $keyword);
		return $this->db->get()->result();
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

	public function detail($id = null)
	{
		$query = $this->db->get_where('shti', array('id_idla' => $id))->row();
		return $query;
	}

	public function delete($where, $_table)
	{
		$this->db->where($where);
		$this->db->delete($_table);
	}
}
