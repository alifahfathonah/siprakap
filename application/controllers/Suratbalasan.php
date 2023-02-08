<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratbalasan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('galery_model', 'galery');
        // $this->load->model('pengajuan_track_model', 'pengajuan_track');
        // $this->load->model('M_Penduduk', 'penduduk');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('nama_surat', 'Nama Surat', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Keterangan', 'required');
        $this->form_validation->set_rules('keterangan_surat', 'Keterangan', 'required');
        // $this->form_validation->set_rules('file_surat', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Tracking',
                'sub_title' => 'Buat Surat Balasan KP'
            ];
            $this->load->view('frontend/header2', $judul);
            $this->load->view('frontend/s_balasan');
            $this->load->view('frontend/footer2');
        } else {
            $nama_surat =  $this->input->post("nama_surat", TRUE);
            $tanggal_surat =  $this->input->post("tanggal_surat", TRUE);
            $keterangan_surat =  $this->input->post("keterangan_surat", TRUE);
            // $file_surat =  $this->input->post("file_surat", TRUE);

            $config['upload_path']          = './uploads/surat_masuk';
            $config['allowed_types']        = 'pdf|doc|docx';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_surat')) {

                $data = array('upload_data' => $this->upload->data());
                $file_surat = $data['upload_data']['file_name'];

                $save = [
                    'nama_surat_masuk' => $nama_surat,
                    'tanggal_surat_masuk' => date('Y-m-d', strtotime($tanggal_surat)),
                    'keterangan_surat_masuk' => $keterangan_surat,
                    'file_surat_masuk' => $file_surat
                ];

                $this->db->insert('surat_masuk', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Selamat!</h5> Berhasil Menambahkan Surat Balasan Kerja Praktek!</div>');
                redirect(base_url("suratbalasan"));
            }
        }
    }

}
