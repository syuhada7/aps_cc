<?php
defined('BASEPATH') or exit('No direct script access allowed');

class menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model("menu_model");
        $this->load->model("sub_menu_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data["user"] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["menu"] = $this->menu_model->getAll();

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function add_menu()
    {
        if (isset($_POST['btnsave'])) {
            $id = $this->input->post('id');
            $menu = $this->input->post('menu');

            $data = array(
                'id' => $id,
                'menu' => $menu
            );
            $this->menu_model->save_menu($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			New menu added!</div>');
            redirect('menu');
        }
    }

    public function edit_menu($id)
    {
        $data["title"] = 'Edit Name Menu';
        $data["user"] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $where = array('id' => $id);
        $data['menu'] = $this->menu_model->edit_menu($where, 'user_menu')->result();

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar", $data);
        $this->load->view("templates/topbar", $data);
        $this->load->view("menu/edit_menu", $data);
        $this->load->view("templates/footer");
    }

    public function update_menu()
    {
        if (isset($_POST['btnsave'])) {
            $id = $this->input->post('id');
            $menu = $this->input->post('menu');

            $data = array(
                'id' => $id,
                'menu' => $menu,
            );
            $where = array('id' => $id);
            $this->menu_model->update_menu($where, $data, 'user_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Edit Name menu Success!</div>');
            redirect('menu');
        }
    }

    public function delete_menu($id)
    {
        $where = array('id' => $id);
        $this->menu_model->delete_menu($where, 'user_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete menu success!</div>');
        redirect('menu');
    }

    //sub menu function

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['subMenu'] = $this->menu_model->getSubmenu();
        $data['menu'] = $this->menu_model->getAll();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        }
    }
    public function add_submenu()
    {
        if (isset($_POST['btnadd'])) {
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $menu_id = $this->input->post('menu');
            $url = $this->input->post('url');
            $icon = $this->input->post('icon');
            $is_active = $this->input->post('is_active');

            $data = array(
                'id' => $id,
                'title' => $title,
                'menu_id' => $menu_id,
                'url' => $url,
                'icon' => $icon,
                'is_active' => $is_active
            );
            $this->sub_menu_model->save_sub_menu($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Sub Menu added!</div>');
            redirect('menu/submenu');
        }
    }

    public function edit_submenu($id)
    {
        $data["title"] = 'Edit Sub Menu';
        $data["user"] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $where = array('id' => $id);
        $data['submenu'] = $this->menu_model->getSubmenu();
        $data['menu'] = $this->menu_model->getAll();
        $data['submenu'] = $this->sub_menu_model->edit_sub_menu($where, 'user_sub_menu')->result();

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar", $data);
        $this->load->view("templates/topbar", $data);
        $this->load->view("menu/edit_submenu", $data);
        $this->load->view("templates/footer");
    }

    public function update_submenu()
    {
        if (isset($_POST['btnsave'])) {
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $menu_id = $this->input->post('menu');
            $url = $this->input->post('url');
            $icon = $this->input->post('icon');
            $is_active = $this->input->post('is_active');

            $data = array(
                'id' => $id,
                'title' => $title,
                'menu_id' => $menu_id,
                'url' => $url,
                'icon' => $icon,
                'is_active' => $is_active
            );
            $where = array('id' => $id);
            $this->sub_menu_model->update_sub_menu($where, $data, 'user_sub_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Edit Sub menu Success!</div>');
            redirect('menu/submenu');
        }
    }

    public function delete_submenu($id)
    {
        $where = array('id' => $id);
        $this->sub_menu_model->delete_sub_menu($where, 'user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete Sub Menu success!</div>');
        redirect('menu/submenu');
    }
}
