<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Nasabah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
	//is_logged_in();
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

	$config['base_url'] = 'http://abadigroup.xyz/nasabah/index';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 9;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['nasabah'] = $this->Nasabah_model->getNasabah($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('nasabah/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['title'] = 'tambah nasabah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('name', 'Nama', 'required|ucwords');
        $this->form_validation->set_rules('ktp', 'Nomor Identitas', 'required|numeric|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('alamatktp', 'Alamat', 'required|ucwords');
        $this->form_validation->set_rules('cabang', 'Asal Cabang', 'required|ucwords');
        $this->form_validation->set_rules('resort', 'Resort', 'required|ucwords');
	$this->form_validation->set_rules('simpanan', 'Simpanan');
        $this->form_validation->set_rules('keterangan', 'Keterangan|ucwords');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nasabah/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Nasabah_model->tambahNasabah();

            redirect('nasabah/index');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            pejabat berhasil di tambah !
          </div>');
        }
    }

    public function hapusNasabah($id)
    {
        $this->Nasabah_model->hapusNasabah($id);

        redirect('nasabah');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        pejabat berhasil di hapus !
      </div>');
    }



    public function ubahNasabah($id)
    {
        $data['title'] = 'Ubah ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nasabah'] = $this->Nasabah_model->getNasabahById($id);


        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('ktp', 'No Identitas', 'required');
        $this->form_validation->set_rules('alamatktp', 'Alamat', 'required');
        $this->form_validation->set_rules('cabang', 'Asal Cabang', 'required');
        $this->form_validation->set_rules('resort', 'Resort', 'required');
	$this->form_validation->set_rules('simpanan', 'Simpanan');
        $this->form_validation->set_rules('keterangan', 'Keterangan');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('nasabah/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Nasabah_model->ubah($id);

            redirect('nasabah');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            pejabat berhasil di edit !
          </div>');
        }
    }
}
