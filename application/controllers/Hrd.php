<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hrd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Hrd_model');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = 'Hrd Pusat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ijazah'] = $this->Hrd_model->getAllIjazah();

        if ($this->input->post('submit')) {

            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('no_ijazah', $data['keyword']);
        $this->db->or_like('tambahan', $data['keyword']);
        $this->db->or_like('asal_cabang', $data['keyword']);
        $this->db->from('data_ijazah');
        $config['base_url'] = 'http://abadigroup.xyz/hrd/index';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 7;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['ijazah'] = $this->Hrd_model->getIjazah($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('hrd/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['title'] = 'tambah ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        
        $this->form_validation->set_rules('tgl_msk_ijazah', 'Tanggal', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required|ucwords');
        $this->form_validation->set_rules('asal_cabang', 'Cabang', 'required|ucwords');
        $this->form_validation->set_rules('tgl_msk_kerja', 'Taggal Masuk', 'required');
        $this->form_validation->set_rules('berhenti', 'berhenti');
        $this->form_validation->set_rules('pendidikan', 'pendidikan', 'required|ucwords');
        $this->form_validation->set_rules('no_ijazah', 'nomor ijazah', 'required');
        $this->form_validation->set_rules('tambahan', 'tambahan|ucwords');
        $this->form_validation->set_rules('yg_stor', 'yang setor', 'required|ucwords');
        $this->form_validation->set_rules('tgl_keluar', 'keluar');
        $this->form_validation->set_rules('keterangan', 'keterangan|ucwords');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('hrd/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Hrd_model->tambahIjazah();

            redirect('hrd/index');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            pejabat berhasil di tambah !
          </div>');
        }
    }

    public function hapusIjazah($id)
    {
        $this->Hrd_model->hapusIjazah($id);

        redirect('hrd');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        pejabat berhasil di hapus !
      </div>');
    }



    public function ubahIjazah($id)
    {
        $data['title'] = 'Ubah ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ijazah'] = $this->Hrd_model->getIjazahById($id);


         $this->form_validation->set_rules('tgl_msk_ijazah', 'Tanggal', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('asal_cabang', 'Cabang', 'required');
        $this->form_validation->set_rules('tgl_msk_kerja', 'Taggal Masuk', 'required');
        $this->form_validation->set_rules('berhenti', 'berhenti');
        $this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');
        $this->form_validation->set_rules('no_ijazah', 'nomor ijazah', 'required');
        $this->form_validation->set_rules('tambahan', 'tambahan');
        $this->form_validation->set_rules('yg_stor', 'yang setor', 'required');
        $this->form_validation->set_rules('tgl_keluar', 'keluar');
        $this->form_validation->set_rules('keterangan', 'keterangan');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('hrd/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Hrd_model->ubah($id);

            redirect('hrd');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            karyawan berhasil di edit !
          </div>');
        }
    }
}
