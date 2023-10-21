<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bulukumba extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'bulukumba abadi sejahtera';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bulukumba/index', $data);
        $this->load->view('templates/footer');
    }

    public function bulukumbaAbadi()
    {
        $data['title'] = 'bulukumba abadi sejahtera';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bulukumba/bulukumba-abadi', $data);
        $this->load->view('templates/footer');
    }

    public function kasir()
    {
        $data['title'] = 'bulukumba abadi sejahtera';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bulukumba/kasir', $data);
        $this->load->view('templates/footer');
    }

    public function wakil()
    {
        $data['title'] = 'bulukumba abadi sejahtera';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bulukumba/wakil', $data);
        $this->load->view('templates/footer');
    }



    public function recap()
    {
        $data['title'] = 'bulukumba abadi sejahtera';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bulukumba/recap', $data);
        $this->load->view('templates/footer');
    }
}
