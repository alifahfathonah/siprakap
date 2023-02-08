<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('galery_model','galery');
        // $this->load->model('pengajuan_track_model','pengajuan_track');
        $this->load->model('dashboard_model', 'akun');
        $this->load->database();
        $this->load->helper(array('form', 'url','Cookie', 'String', 'html'));
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[8]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|min_length[8]|matches[password]');
        // $this->form_validation->set_rules('level', 'Hak Akses', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Akun Mahasiswa',
                'sub_title' => ''
            ];

            $id = 'id_user';
            $data['user'] = $this->db->get('user', ['id_user' => $id])->row_array();
            $this->load->view('frontend/header2', $judul);
            $this->load->view('frontend/akun', $data);
            $this->load->view('frontend/footer2');
        } else {
            $username =  $this->input->post("username", TRUE);
            $password =  $this->input->post("password", TRUE);
            // $level =  $this->input->post("level", TRUE);

            $update = [
                'username' => $username,
                'password' => $password,
                // 'level' => $level,

            ];


            $this->db->where('id_user', $id);
            $this->db->update('user', $update);

            $this->session->set_flashdata('success', 'User Berhasil Update!');
            redirect(base_url('akun'));
        }
    }

}
