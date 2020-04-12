<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vessel_model extends CI_Model
{

	private $_table = "vessel";
	var $id = 'id_vessel';
	var $name_vessel = 'name_vessel';

	public function getAll()
	{
		$this->db->order_by('id_vessel', 'ASC');
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		$this->db->order_by('id_vessel', 'ASC');
		return $this->db->get_where($this->_table, array($this->id => $id))->row();
	}

	public function getByname($name_vessel)
	{
		return $this->db->get_where($this->_table, array($this->name_vessel => $name_vessel))->row();
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('vessel');
		$this->db->like('name_vessel', $keyword);
		$this->db->or_like('gt', $keyword);
		$this->db->or_like('nt', $keyword);
		$this->db->or_like('length', $keyword);
		$this->db->or_like('catch', $keyword);
		$this->db->or_like('regis', $keyword);
		$this->db->or_like('port', $keyword);
		$this->db->or_like('place', $keyword);
		$this->db->or_like('year', $keyword);
		$this->db->or_like('base', $keyword);
		$this->db->or_like('rfmo', $keyword);
		$this->db->or_like('no_rfmo', $keyword);
		$this->db->or_like('issf', $keyword);
		$this->db->or_like('no_issf', $keyword);
		$this->db->or_like('owner', $keyword);
		$this->db->or_like('address', $keyword);
		$this->db->or_like('no_siup', $keyword);
		$this->db->or_like('no_sipi', $keyword);
		$this->db->or_like('valid_sipi', $keyword);
		$this->db->or_like('until_sipi', $keyword);
		$this->db->or_like('status_sipi', $keyword);
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
		$query = $this->db->get_where('vessel', array('id_vessel' => $id))->row();
		return $query;
	}

	public function delete($where, $_table)
	{
		$this->db->where($where);
		$this->db->delete($_table);
	}
}
