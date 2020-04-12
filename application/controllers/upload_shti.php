<?php
defined('BASEPATH') or exit('No direct script access allowed');

class upload_shti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("upload_shti_model");
        $this->load->model("shti_model");
        $this->load->library('form_validation');
    }

    public function upload()
    {
        $data['title'] = 'Upload File';
        $data["user"] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['shti'] = $this->db->get('shti')->result_array();
        $data['file_shti'] = $this->upload_shti_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('shti/upload', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('no_idla', 'No Idla', 'required');

            $config['upload_path']          = './assets/img/shti';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);

            if (!empty($_FILES['shti']['name'])) {
                $this->upload->do_upload('shti');
                $file1 = $this->upload->data();
                $up = $file1['file_name'];
            }

            if ($this->form_validation->run()) {
                $no_idla = $this->input->post('no_idla', TRUE);
                $data = [
                    'no_idla' => $no_idla,
                    'shti'        => $up,
                    'date_create' => time()
                ];
                $insert = $this->upload_shti_model->save($data);
                if ($insert) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New file SHTI success added!</div>');
                    redirect('upload_shti/upload');
                }
            } else {
                $this->upload();
            }
        } else {
            $this->upload();
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Upload File';
        $data["user"] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $where = array('id_upload' => $id);
        $data['shti'] = $this->shti_model->getAll();
        $data['file_shti'] = $this->upload_shti_model->edit($where, 'file_shti')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('shti/edit_upload', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('no_idla', 'No Idla', 'required');

            $config['upload_path']          = './assets/img/shti';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);

            if (!empty($_FILES['shti']['name'])) {
                $this->upload->do_upload('shti');
                $file1 = $this->upload->data();
                $up = $file1['file_name'];
            }

            if ($this->form_validation->run()) {
                $id = $this->input->post('id_upload');
                $no_idla = $this->input->post('no_idla', TRUE);
                $data = [
                    'no_idla' => $no_idla,
                    'shti'        => $up,
                    'date_create' => time()
                ];

                $where = array('id_upload' => $id);
                $this->upload_shti_model->update($where, $data, 'file_shti');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Edit Upload file success!</div>');
                redirect('upload_shti/upload');
            }
        }
    }

    public function download()
    {
        //load helper
        $this->load->helper('download');
        //filename
        $shti['file_shti'] = $this->db->get_where('file_shti', ['shti' => $this->session->userdata('shti')])->row_array();
        //load path
        $load = file_get_contents(base_url() . 'assets/img/shti/');
        //function download
        force_download($load, $shti);
    }

    public function delete($id)
    {
        $where = array('id_upload' => $id);
        $this->upload_shti_model->delete($where, 'file_shti');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete file SHTI success!</div>');
        redirect('upload_shti/upload');
    }
}
