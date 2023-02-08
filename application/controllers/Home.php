<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model','galery');

        $this->load->helper(array('form', 'url','Cookie', 'String', 'download'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Home - Sistem Pengajuan Surat Kerja Praktek',
            'sub_title' => ''
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/header', $judul);
        $this->load->view('frontend/home',$data);
        $this->load->view('frontend/footer',$data);
    }

    public function download_pedoman_kp(){              
        force_download('assets/file/pedoman.pdf',NULL);
    }

    public function download_proposal_kp(){             
        force_download('assets/file/proposal.pdf',NULL);
    }

    public function download_perusahaan_kp(){                
        force_download('assets/file/perusahaan.pdf',NULL);
    }   
}
