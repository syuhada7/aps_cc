<?php
defined('BASEPATH') or exit('No direct script access allowed');

class shti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("shti_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Data SHTI';
        $data["user"]  = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["shti"]   = $this->shti_model->getAll();
        $data['vessel'] = $this->db->get('vessel')->result_array();
        $data['fish']   = $this->db->get('fish')->result_array();

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('shti/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function add()
    {
        if (isset($_POST['btnsave'])) {
            $id          = $this->input->post('id_idla');
            $no_idla     = $this->input->post('no_idla');
            $supplier    = $this->input->post('supplier');
            $name_vessel = $this->input->post('name_vessel');
            $gt          = $this->input->post('gt');
            $catch       = $this->input->post('catch');
            $length      = $this->input->post('length');
            $wpp         = $this->input->post('wpp');
            $port        = $this->input->post('port');
            $captain     = $this->input->post('captain');
            $trip        = $this->input->post('trip');
            $until       = $this->input->post('until');
            $rfmo        = $this->input->post('rfmo');
            $no_rfmo     = $this->input->post('no_rfmo');
            $issf        = $this->input->post('issf');
            $no_issf     = $this->input->post('no_issf');
            $species     = $this->input->post('species');
            $qty         = $this->input->post('qty');
            $fip         = $this->input->post('fip');
            $area        = $this->input->post('area');
            $note        = $this->input->post('note');
            $id_unik     = $no_idla;

            //jika no_idla ada
            if ($id_unik = $this->db->get_where('shti', ['id_unik' => $id_unik])->row_array()) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  				No IDLA has Avail!!</div>');
                redirect('shti');
            }

            // function mencocokan tgl trip
            $cek_tgl = $this->db->query('SELECT trip,until FROM shti WHERE `name_vessel` BETWEEN trip AND until');
            $cek_tgl2 = $this->db->query('SELECT trip,until FROM shti WHERE `name_vessel` BETWEEN until AND trip');
            if (!$cek_tgl) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  				Trip date Wrong!!</div>');
                redirect('shti');
            }
            if (!$cek_tgl2) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  				Until date Wrong!!</div>');
                redirect('shti');
            }

            $data = array(
                'id_idla'     => $id,
                'no_idla'     => $no_idla,
                'supplier'    => $supplier,
                'name_vessel' => $name_vessel,
                'gt'          => $gt,
                'catch'       => $catch,
                'length'      => $length,
                'wpp'         => $wpp,
                'port'        => $port,
                'captain'     => $captain,
                'trip'        => $trip,
                'until'       => $until,
                'rfmo'        => $rfmo,
                'no_rfmo'     => $no_rfmo,
                'issf'        => $issf,
                'no_issf'     => $no_issf,
                'species'     => $species,
                'qty'         => $qty,
                'fip'         => $fip,
                'area'        => $area,
                'note'        => $note,
                'id_unik'     => md5($id_unik)
            );
            $this->shti_model->save($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New SHTI data success added!</div>');
            redirect('shti');
        }
    }

    public function edit($id)
    {
        $data["title"] = 'Edit SHTI Data';
        $data["user"]  = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $where = array('id_idla' => $id);
        $data['vessel'] = $this->db->get('vessel')->result_array();
        $data['fish']   = $this->db->get('fish')->result_array();
        $data['shti']   = $this->shti_model->edit($where, 'shti')->result();

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar", $data);
        $this->load->view("templates/topbar", $data);
        $this->load->view("shti/edit", $data);
        $this->load->view("templates/footer");
    }

    public function update()
    {
        if (isset($_POST['btnsave'])) {
            $id          = $this->input->post('id_idla');
            $no_idla     = $this->input->post('no_idla');
            $supplier    = $this->input->post('supplier');
            $name_vessel = $this->input->post('name_vessel');
            $gt          = $this->input->post('gt');
            $catch       = $this->input->post('catch');
            $length      = $this->input->post('length');
            $wpp         = $this->input->post('wpp');
            $port        = $this->input->post('port');
            $captain     = $this->input->post('captain');
            $trip        = $this->input->post('trip');
            $until       = $this->input->post('until');
            $rfmo        = $this->input->post('rfmo');
            $no_rfmo     = $this->input->post('no_rfmo');
            $issf        = $this->input->post('issf');
            $no_issf     = $this->input->post('no_issf');
            $species     = $this->input->post('species');
            $qty         = $this->input->post('qty');
            $fip         = $this->input->post('fip');
            $area        = $this->input->post('area');
            $note        = $this->input->post('note');
            $id_unik     = $no_idla;

            $data = array(
                'no_idla'     => $no_idla,
                'supplier'    => $supplier,
                'name_vessel' => $name_vessel,
                'gt'          => $gt,
                'catch'       => $catch,
                'length'      => $length,
                'wpp'         => $wpp,
                'port'        => $port,
                'captain'     => $captain,
                'trip'        => $trip,
                'until'       => $until,
                'rfmo'        => $rfmo,
                'no_rfmo'     => $no_rfmo,
                'issf'        => $issf,
                'no_issf'     => $no_issf,
                'species'     => $species,
                'qty'         => $qty,
                'fip'         => $fip,
                'area'        => $area,
                'note'        => $note,
                'id_unik'     => md5($id_unik)
            );
            $where = array('id_idla' => $id);
            $this->shti_model->update($where, $data, 'shti');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Edit SHTI data success added!</div>');
            redirect('shti');
        }
    }

    public function detail($id)
    {
        $data["title"] = 'Detail SHTI Data';
        $data["user"]  = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->model('shti_model');
        $detail         = $this->shti_model->detail($id);
        $data['detail'] = $detail;

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar", $data);
        $this->load->view("templates/topbar", $data);
        $this->load->view("shti/detail", $data);
        $this->load->view("templates/footer");
    }

    // public function print()
    // {
    //     $data['shti'] = $this->shti_model->getAll();
    //     $this->load->view("shti/print", $data);
    // }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['shti'] = $this->shti_model->getAll();
        $this->load->view("shti/pdf", $data);

        $paper_size = 'A3';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Master Data SHTI.pdf", array('Attachment' => 0));
    }

    public function delete($id)
    {
        $where = array('id_idla' => $id);
        $this->shti_model->delete($where, 'shti');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Delete SHTI data success!</div>');
        redirect('shti');
    }
}
