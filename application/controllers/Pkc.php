<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pkc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
    }


    public function pkcHarian()
    {
        $data['title'] = 'pkc harian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pkc/pkcharian', $data);
        $this->load->view('templates/footer');
    }
    public function pkcBulanan()
    {
        $data['title'] = 'pkc bulanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pkc/pkcbulanan', $data);
        $this->load->view('templates/footer');
    }
}
