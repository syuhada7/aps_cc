<?php
defined('BASEPATH') or exit('No direct script access allowed');

class upload_vessel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("upload_vessel_model");
        $this->load->model("vessel_model");
        $this->load->library('form_validation');
    }

    public function upload()
    {
        $data['title'] = 'Upload File';
        $data["user"] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['vessel'] = $this->db->get('vessel')->result_array();
        $data['file_vessel'] = $this->upload_vessel_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('vessel/upload', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('name_vessel', 'Vessel Name', 'required');

            $config['upload_path']          = './assets/img/vessel';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);

            if (!empty($_FILES['sipi']['name'])) {
                $this->upload->do_upload('sipi');
                $file1 = $this->upload->data();
                $up = $file1['file_name'];
            }
            if (!empty($_FILES['manning']['name'])) {
                $this->upload->do_upload('manning');
                $file2 = $this->upload->data();
                $up2 = $file2['file_name'];
            }
            if (!empty($_FILES['siup']['name'])) {
                $this->upload->do_upload('siup');
                $file3 = $this->upload->data();
                $up3 = $file3['file_name'];
            }
            if (!empty($_FILES['pas_kapal']['name'])) {
                $this->upload->do_upload('pas_kapal');
                $file4 = $this->upload->data();
                $up4 = $file4['file_name'];
            }
            if (!empty($_FILES['ukur']['name'])) {
                $this->upload->do_upload('ukur');
                $file5 = $this->upload->data();
                $up5 = $file5['file_name'];
            }

            if ($this->form_validation->run()) {
                $name_vessel = $this->input->post('name_vessel', TRUE);
                $data = [
                    'name_vessel' => $name_vessel,
                    'sipi'        => $up,
                    'manning'     => $up2,
                    'siup'        => $up3,
                    'pas_kapal'   => $up4,
                    'ukur'        => $up5,
                    'date_create' => time()
                ];
                $insert = $this->upload_vessel_model->save($data);
                if ($insert) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New Vessel file success added!</div>');
                    redirect('upload_vessel');
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
        $data['vessel'] = $this->vessel_model->getAll();
        $data['file_vessel'] = $this->upload_vessel_model->edit($where, 'file_vessel')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('vessel/edit_upload', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('name_vessel', 'Vessel Name', 'required');

            $config['upload_path']          = './assets/img/vessel';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);

            if (!empty($_FILES['sipi']['name'])) {
                $this->upload->do_upload('sipi');
                $file1 = $this->upload->data();
                $up = $file1['file_name'];
            }
            if (!empty($_FILES['manning']['name'])) {
                $this->upload->do_upload('manning');
                $file2 = $this->upload->data();
                $up2 = $file2['file_name'];
            }
            if (!empty($_FILES['siup']['name'])) {
                $this->upload->do_upload('siup');
                $file3 = $this->upload->data();
                $up3 = $file3['file_name'];
            }
            if (!empty($_FILES['pas_kapal']['name'])) {
                $this->upload->do_upload('pas_kapal');
                $file4 = $this->upload->data();
                $up4 = $file4['file_name'];
            }
            if (!empty($_FILES['ukur']['name'])) {
                $this->upload->do_upload('ukur');
                $file5 = $this->upload->data();
                $up5 = $file5['file_name'];
            }

            if ($this->form_validation->run()) {
                $id = $this->input->post('id_upload');
                $name_vessel = $this->input->post('name_vessel', TRUE);
                $data = [
                    'name_vessel' => $name_vessel,
                    'sipi'        => $up,
                    'manning'     => $up2,
                    'siup'        => $up3,
                    'pas_kapal'   => $up4,
                    'ukur'        => $up5,
                    'date_update' => time()
                ];
                $where = array('id_upload' => $id);
                $this->upload_vessel_model->update($where, $data, 'file_vessel');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Edit Upload file success!</div>');
                redirect('upload_vessel');
            }
        }
    }

    public function download()
    {
        //load helper
        $this->load->helper('download');
        //filename
        $sipi['file_vessel'] = $this->db->get_where('file_vessel', ['sipi' => $this->session->userdata('sipi')])->row_array();
        $manning['file_vessel'] = $this->db->get_where('file_vessel', ['manning' => $this->session->userdata('manning')])->row_array();
        $siup['file_vessel'] = $this->db->get_where('file_vessel', ['siup' => $this->session->userdata('siup')])->row_array();
        $pas_kapal['file_vessel'] = $this->db->get_where('file_vessel', ['pas_kapal' => $this->session->userdata('pas_kapal')])->row_array();
        $ukur['file_vessel'] = $this->db->get_where('file_vessel', ['ukur' => $this->session->userdata('ukur')])->row_array();
        //load path
        $load = file_get_contents(base_url() . 'assets/img/vessel/');
        //function download
        force_download($load, $sipi);
        force_download($load, $manning);
        force_download($load, $siup);
        force_download($load, $pas_kapal);
        force_download($load, $ukur);
    }

    public function delete($id)
    {
        $where = array('id_upload' => $id);
        $this->upload_vessel_model->delete($where, 'file_vessel');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete Vessel data success!</div>');
        redirect('upload_vessel');
    }
}
