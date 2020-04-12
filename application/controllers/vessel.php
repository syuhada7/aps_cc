<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vessel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model("vessel_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["title"] = 'Data Vessel';
        $data["user"] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['vessel'] = $this->vessel_model->getAll();

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar", $data);
        $this->load->view("templates/topbar", $data);
        $this->load->view("vessel/index", $data);
        $this->load->view("templates/footer");
    }

    public function add()
    {
        if (isset($_POST['btnsave'])) {
            $id          = $this->input->post('id_vessel');
            $name_vessel = $this->input->post('name_vessel');
            $gt          = $this->input->post('gt');
            $nt          = $this->input->post('nt');
            $length      = $this->input->post('length');
            $catch       = $this->input->post('catch');
            $regis       = $this->input->post('regis');
            $port        = $this->input->post('port');
            $place       = $this->input->post('place');
            $year        = $this->input->post('year');
            $base        = $this->input->post('base');
            $rfmo        = $this->input->post('rfmo');
            $no_rfmo     = $this->input->post('no_rfmo');
            $issf        = $this->input->post('issf');
            $no_issf     = $this->input->post('no_issf');
            $owner       = $this->input->post('owner');
            $address     = $this->input->post('address');
            $no_siup     = $this->input->post('no_siup');
            $no_sipi     = $this->input->post('no_sipi');
            $valid_sipi  = $this->input->post('valid_sipi');
            $until_sipi  = $this->input->post('until_sipi');
            $status_sipi = $this->input->post('status_sipi');
            $id_unik     = $name_vessel . $regis . $port . $rfmo . $no_rfmo . $issf . $no_issf . $no_siup . $no_sipi;

            // jika ada data name,regis,port,rfmo,no_rfmo,issf,no_issf,no_siup,no_sipiyang sama
            if (!$id_unik = $this->db->get_where('vessel', ['id_unik' => $id_unik])->row_array()) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  				Please Check Name/Number Regis/Port/RFMO/ISSF/SIUP/SIPI cause same data before!!</div>');
                redirect('vessel');
            }

            $data = array(
                'id_vessel' => $id,
                'name_vessel' => $name_vessel,
                'gt' => $gt,
                'nt' => $nt,
                'length' => $length,
                'catch' => $catch,
                'regis' => $regis,
                'port' => $port,
                'place' => $place,
                'year' => $year,
                'base' => $base,
                'rfmo' => $rfmo,
                'no_rfmo' => $no_rfmo,
                'issf' => $issf,
                'no_issf' => $no_issf,
                'owner' => $owner,
                'address' => $address,
                'no_siup' => $no_siup,
                'no_sipi' => $no_sipi,
                'valid_sipi' => $valid_sipi,
                'until_sipi' => $until_sipi,
                'status_sipi' => $status_sipi,
                'id_unik' => md5($id_unik)
            );
            $this->vessel_model->save($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Vessel data success added!</div>');
            redirect('vessel');
        }
    }

    public function edit($id)
    {
        $data["title"] = 'Edit Vessel Data';
        $data["user"] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $where = array('id_vessel' => $id);
        $data['vessel'] = $this->vessel_model->edit($where, 'vessel')->result();

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar", $data);
        $this->load->view("templates/topbar", $data);
        $this->load->view("vessel/edit", $data);
        $this->load->view("templates/footer");
    }

    public function update()
    {
        if (isset($_POST['btnsave'])) {
            $id = $this->input->post('id_vessel');
            $name_vessel = $this->input->post('name_vessel');
            $gt = $this->input->post('gt');
            $nt = $this->input->post('nt');
            $length = $this->input->post('length');
            $catch = $this->input->post('catch');
            $regis = $this->input->post('regis');
            $port = $this->input->post('port');
            $place = $this->input->post('place');
            $year = $this->input->post('year');
            $base = $this->input->post('base');
            $rfmo = $this->input->post('rfmo');
            $no_rfmo = $this->input->post('no_rfmo');
            $issf = $this->input->post('issf');
            $no_issf = $this->input->post('no_issf');
            $owner = $this->input->post('owner');
            $address = $this->input->post('address');
            $no_siup = $this->input->post('no_siup');
            $no_sipi = $this->input->post('no_sipi');
            $valid_sipi = $this->input->post('valid_sipi');
            $until_sipi = $this->input->post('until_sipi');
            $status_sipi = $this->input->post('status_sipi');
            $id_unik = $name_vessel . $regis . $port . $rfmo . $no_rfmo . $issf . $no_issf . $no_siup . $no_sipi;

            $data = array(
                'name_vessel' => $name_vessel,
                'gt' => $gt,
                'nt' => $nt,
                'length' => $length,
                'catch' => $catch,
                'regis' => $regis,
                'port' => $port,
                'place' => $place,
                'year' => $year,
                'base' => $base,
                'rfmo' => $rfmo,
                'no_rfmo' => $no_rfmo,
                'issf' => $issf,
                'no_issf' => $no_issf,
                'owner' => $owner,
                'address' => $address,
                'no_siup' => $no_siup,
                'no_sipi' => $no_sipi,
                'valid_sipi' => $valid_sipi,
                'until_sipi' => $until_sipi,
                'status_sipi' => $status_sipi,
                'id_unik' => md5($id_unik)
            );
            $where = array('id_vessel' => $id);
            $this->vessel_model->update($where, $data, 'vessel');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Edit Vessel data success!</div>');
            redirect('vessel');
        }
    }

    public function detail($id)
    {
        $data["title"] = 'Detail Vessel Data';
        $data["user"] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('vessel_model');
        $detail = $this->vessel_model->detail($id);
        $data['detail'] = $detail;

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar", $data);
        $this->load->view("templates/topbar", $data);
        $this->load->view("vessel/detail", $data);
        $this->load->view("templates/footer");
    }

    // public function print()
    // {
    //     $data['vessel'] = $this->vessel_model->getAll();
    //     $this->load->view("vessel/print", $data);
    // }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['vessel'] = $this->vessel_model->getAll();
        $this->load->view("vessel/pdf", $data);

        $paper_size = 'A3';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Master Data Vessel.pdf", array('Attachment' => 0));
    }

    public function delete($id)
    {
        $where = array('id_vessel' => $id);
        $this->vessel_model->delete($where, 'vessel');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete Vessel data success!</div>');
        redirect('vessel');
    }

    public function get_data_vessel()
    {
        $name_vessel = $this->input->get('name_vessel');

        $result = $this->vessel_model->getByname($name_vessel);

        if ($result) {
            echo json_encode(array('status' => true, 'hasil' => $result));
        } else {
            echo json_encode(array('status' => false));
        }
    }
}
