<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Directur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        //$this->load->model('Directur_model');
        $this->load->library('form_validation');
        //$this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = 'directur';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('directur/index', $data);
        $this->load->view('templates/footer');
    }


    public function kadiva()
    {
        $data['title'] = 'team A harian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('directur/kadiva', $data);
        $this->load->view('templates/footer');
    }
    public function kadivb()
    {
        $data['title'] = 'team B harian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('directur/kadivb', $data);
        $this->load->view('templates/footer');
    }

    public function kadivc()
    {
        $data['title'] = 'team C harian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('directur/kadivc', $data);
        $this->load->view('templates/footer');
    }



    public function total()
    {
        $data['title'] = 'Global laba rugi ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('directur/total', $data);
        $this->load->view('templates/footer');
    }
}
