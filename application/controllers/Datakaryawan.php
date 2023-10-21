<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Datakaryawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }



    public function index()
    {
        $data['title'] = 'data karyawan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->getAllKaryawan();

        if ($this->input->post('submit')) {

            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('nik', $data['keyword']);
        $this->db->or_like('jabatan', $data['keyword']);
        $this->db->or_like('cabang', $data['keyword']);
        $this->db->from('data_karyawan');

        $config['base_url'] = 'http://abadigroup.xyz/datakaryawan/index/';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 24;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['karyawan'] = $this->Karyawan_model->getKaryawan($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('datakaryawan/index', $data);
        $this->load->view('templates/footer');
    }
}
