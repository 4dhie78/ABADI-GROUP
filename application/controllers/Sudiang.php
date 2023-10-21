<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sudiang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'purnama abadi sudiang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sudiang/index', $data);
        $this->load->view('templates/footer');
    }

    public function sudiang()
    {
        $data['title'] = 'purnama abadi sudiang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sudiang/sudiang', $data);
        $this->load->view('templates/footer');
    }



    public function kasir()
    {
        $data['title'] = 'purnama abadi sudiang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sudiang/kasir', $data);
        $this->load->view('templates/footer');
    }

    public function wakil()
    {
        $data['title'] = 'purnama abadi sudiang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sudiang/wakil', $data);
        $this->load->view('templates/footer');
    }



    public function recap()
    {
        $data['title'] = 'purnama abadi sudiang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sudiang/recap', $data);
        $this->load->view('templates/footer');
    }
}
