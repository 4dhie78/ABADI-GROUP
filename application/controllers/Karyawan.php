<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
	is_logged_in();
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

	$config['base_url'] = 'http://abadigroup.xyz/karyawan/index';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 9;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['karyawan'] = $this->Karyawan_model->getKaryawan($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('karyawan/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {

        $data['title'] = 'tambah karyawan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama lengkap', 'required|strtoupper');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal', 'required');
        $this->form_validation->set_rules('nik', 'No induk', 'required|numeric');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|strtoupper');
        $this->form_validation->set_rules('cabang', 'Cabang', 'required|strtoupper');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|strtoupper');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Karyawan_model->tambahKaryawan();

            redirect('karyawan/index');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            pejabat berhasil di tambah !
          </div>');
        }
    }

    public function hapusKaryawan($id)
    {
        $this->Karyawan_model->hapusKaryawan($id);

        redirect('karyawan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        pejabat berhasil di hapus !
      </div>');
    }



    public function ubahKaryawan($id)
    {
        $data['title'] = 'Ubah ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->Karyawan_model->getKaryawanById($id);


        $this->form_validation->set_rules('nama', 'Nama Karyawan', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('nik', 'No Induk', 'required|numeric');
        $this->form_validation->set_rules('jabatan', 'Jabantan', 'required');
        $this->form_validation->set_rules('cabang', 'Cabang', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Karyawan_model->ubah($id);

            redirect('karyawan');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            karyawan berhasil di edit !
          </div>');
        }
    }
}
