<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BoneBone extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'masamba abadi bone bone';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bonebone/index', $data);
        $this->load->view('templates/footer');
    }

    public function boneBone()
    {
        $data['title'] = 'masamba abadi bone bone';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bonebone/bone-bone', $data);
        $this->load->view('templates/footer');
    }


    public function kasir()
    {
        $data['title'] = 'masamba abadi bone bone';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bonebone/kasir', $data);
        $this->load->view('templates/footer');
    }

    public function wakil()
    {
        $data['title'] = 'masamba abadi bone bone';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bonebone/wakil', $data);
        $this->load->view('templates/footer');
    }



    public function recap()
    {
        $data['title'] = 'masamba abadi bone bone';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bonebone/recap', $data);
        $this->load->view('templates/footer');
    }
}
