<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sengkang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'sengkang abadi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sengkang/index', $data);
        $this->load->view('templates/footer');
    }

    public function sengkangAbadi()
    {
        $data['title'] = 'sengkang abadi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sengkang/sengkang-abadi', $data);
        $this->load->view('templates/footer');
    }

    public function kasir()
    {
        $data['title'] = 'sengkang abadi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sengkang/kasir', $data);
        $this->load->view('templates/footer');
    }

    public function wakil()
    {
        $data['title'] = 'sengkang abadi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sengkang/wakil', $data);
        $this->load->view('templates/footer');
    }



    public function recap()
    {
        $data['title'] = 'sengkang abadi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sengkang/recap', $data);
        $this->load->view('templates/footer');
    }
}
