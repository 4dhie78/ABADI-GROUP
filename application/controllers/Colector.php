<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Colector extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Nasabah_model');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = 'data nasabah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nasabah'] = $this->Nasabah_model->getAllNasabah();


        if ($this->input->post('submit')) {

            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('name', $data['keyword']);
        $this->db->or_like('ktp', $data['keyword']);
        $this->db->or_like('cabang', $data['keyword']);
        $this->db->from('data_nasabah');

        $config['base_url'] = 'http://abadigroup.xyz/colector/index';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 7;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['nasabah'] = $this->Nasabah_model->getNasabah($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('colector/index', $data);
        $this->load->view('templates/footer');
    }
}
