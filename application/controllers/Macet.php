<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Macet extends CI_Controller
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
        $data['title'] = 'macet';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('macet/index', $data);
        $this->load->view('templates/footer');
    }

    public function teama()
    {
        $data['title'] = 'team A harian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('macet/teama', $data);
        $this->load->view('templates/footer');
    }
    public function teamb()
    {
        $data['title'] = 'team B harian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('macet/teamb', $data);
        $this->load->view('templates/footer');
    }

    public function teamc()
    {
        $data['title'] = 'team C harian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('macet/teamc', $data);
        $this->load->view('templates/footer');
    }
}
