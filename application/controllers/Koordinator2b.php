<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koordinator2b extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        //$this->load->model('Directur_model');
        //$this->load->library('form_validation');
        //$this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = 'koordinator 2 team B';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('koordinator2b/index', $data);
        $this->load->view('templates/footer');
    }

    public function perkembangan()
    {
        $data['title'] = 'koordinator 2 team B';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('koordinator2b/perkembangan', $data);
        $this->load->view('templates/footer');
    }
}
