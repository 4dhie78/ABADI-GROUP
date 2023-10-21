<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pelanggaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'data pelanggaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelanggaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function pemakaian()
    {
        $data['title'] = 'data pelanggaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelanggaran/pemakaian', $data);
        $this->load->view('templates/footer');
    }
}