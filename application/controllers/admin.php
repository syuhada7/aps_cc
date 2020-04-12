<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model("role_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["title"] = 'Dashboard';
		$data["user"] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data["fish"] = $this->db->get('fish')->row_array();

		$this->load->view("templates/header", $data);
		$this->load->view("templates/sidebar", $data);
		$this->load->view("templates/topbar", $data);
		$this->load->view("admin/home", $data);
		$this->load->view("templates/footer");
	}

	public function role()
	{
		$data["title"] = 'Role';
		$data["user"] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data["role"] = $this->role_model->getAll();

		if ($this->form_validation->run() ==  false) {
			$this->load->view("templates/header", $data);
			$this->load->view("templates/sidebar", $data);
			$this->load->view("templates/topbar", $data);
			$this->load->view("admin/role", $data);
			$this->load->view("templates/footer");
		}
	}

	public function add_role()
	{
		if (isset($_POST['btnadd'])) {
			$id = $this->input->post('id');
			$role = $this->input->post('role');

			$data = array(
				'id' => $id,
				'role' => $role,
			);
			$this->role_model->save($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			New Role added!</div>');
			redirect('admin/role');
		}
	}

	public function edit_role($id)
	{
		$data["title"] = 'Edit Name Role';
		$data["user"] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$where = array('id' => $id);
		$data['role'] = $this->role_model->edit($where, 'user_role')->result();

		$this->load->view("templates/header", $data);
		$this->load->view("templates/sidebar", $data);
		$this->load->view("templates/topbar", $data);
		$this->load->view("admin/edit_role", $data);
		$this->load->view("templates/footer");
	}

	public function update_role()
	{
		if (isset($_POST['btnsave'])) {
			$id = $this->input->post('id');
			$role = $this->input->post('role');

			$data = array(
				'id' => $id,
				'role' => $role,
			);
			$where = array('id' => $id);
			$this->role_model->update($where, $data, 'user_role');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Edit Name Role Success!</div>');
			redirect('admin/role');
		}
	}
	public function delete_role($id)
	{
		$where = array('id' => $id);
		$this->role_model->delete($where, 'user_role');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete Role success!</div>');
		redirect('admin/role');
	}

	public function roleAccess($role_id)
	{
		$data['title'] = 'Role Access';
		$data["user"] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('templates/footer');
	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  		Access Changed!! </div>');
	}
}
