<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Malili extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'mangkutana abadi malili';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('malili/index', $data);
        $this->load->view('templates/footer');
    }

    public function malili()
    {
        $data['title'] = 'mangkutana abadi malili';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('malili/malili', $data);
        $this->load->view('templates/footer');
    }


    public function kasir()
    {
        $data['title'] = 'mangkutana abadi malili';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('malili/kasir', $data);
        $this->load->view('templates/footer');
    }

    public function wakil()
    {
        $data['title'] = 'mangkutana abadi malili';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('malili/wakil', $data);
        $this->load->view('templates/footer');
    }



    public function recap()
    {
        $data['title'] = 'mangkutana abadi malili';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('malili/recap', $data);
        $this->load->view('templates/footer');
    }
}
