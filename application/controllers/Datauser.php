
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datauser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'data user';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pejabat_model');
        $data['pejabat'] = $this->Pejabat_model->getAllPejabat();

        if ($this->input->post('submit')) {

            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('name', $data['keyword']);


        $this->db->from('user');



        $config['base_url'] = 'http://abadigroup.xyz/datauser/index';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 9;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['pejabat'] = $this->Pejabat_model->getAllPejabat($config['per_page'], $data['start'], $data['keyword']);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('datauser/index', $data);
        $this->load->view('templates/footer');
    }
}
