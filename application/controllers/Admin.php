<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {



            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Menu added!
          </div>');
            redirect('admin/role');
        }
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id!=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }



    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];


        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access changed!
      </div>');
    }

    public function hapusRoleAccess($id)
    {

        $this->db->delete('user_role', array('id' => $id));

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        role berhasil di hapus !
      </div>');
    }





    public function dataPejabat()
    {
        $data['title'] = 'Data pejabat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pejabat_model');
        $data['pejabat'] = $this->Pejabat_model->getAllPejabat();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pejabat/index', $data);
        $this->load->view('templates/footer');
    }



    public function hapusPejabat($id)
    {
        $this->load->model('Pejabat_model');
        $this->Pejabat_model->hapusPejabat($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/datapejabat');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        pejabat berhasil di hapus !
      </div>');
    }



    public function editPejabat($id)
    {
        $data['title'] = 'Edit ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pejabat_model');
        $data['pejabat'] = $this->Pejabat_model->getPejabatById($id);
        //  Sy tambahkan di form edit nnti sesuaikan aja di form tambah ya??
        // Sudh mas klw di form tambah jgn diubah lgi

        $this->form_validation->set_rules('name', 'Nama Pejabat', 'required');
        $this->form_validation->set_rules('role_id', 'Role id', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pejabat/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pejabat_model->editPejabat();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/datapejabat');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            pejabat berhasil di edit !
          </div>');
        }
    }
}
