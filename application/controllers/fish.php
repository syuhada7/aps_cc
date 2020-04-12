<?php
defined('BASEPATH') or exit('No direct script access allowed');

class fish extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model("fish_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["title"] = 'Data Fish';
        $data["user"] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["fish"] = $this->fish_model->getAll();

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar", $data);
        $this->load->view("templates/topbar", $data);
        $this->load->view("fish/index", $data);
        $this->load->view("templates/footer");
    }

    public function add()
    {
        if (isset($_POST['btnadd'])) {
            $this->form_validation->set_rules('name_fish', 'Fish Name', 'required');

            $config['upload_path']          = './assets/img/fish';
            $config['allowed_types']        = 'jpg|gif|png';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);

            if (!empty($_FILES['photo']['name'])) {
                $this->upload->do_upload('photo');
                $file1 = $this->upload->data();
                $up = $file1['file_name'];
            }

            if ($this->form_validation->run()) {
                $name_fish = $this->input->post('name_fish', TRUE);
                $data = [
                    'name_fish'     => $name_fish,
                    'photo'         => $up,
                    'date_create'   => time()
                ];
                $insert = $this->fish_model->save($data);
                if ($insert) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			        New Fish added!</div>');
                    redirect('fish');
                }
            } else {
                $this->index();
            }
        } else {
            $this->index();
        }
    }

    public function delete($id)
    {
        $where = array('id_fish' => $id);
        $this->fish_model->delete($where, 'fish');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete Data Fish success!</div>');
        redirect('fish');
    }
}
