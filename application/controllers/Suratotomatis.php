<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratotomatis extends CI_Controller
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
        $judul = [
            'title' => 'Buat Surat Pengajuan Otomatis',
            'sub_title' => ''
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/header2', $judul);
        $this->load->view('frontend/s_otomatis');
        $this->load->view('frontend/footer2');
    }

    public function cetak()
    {
         // mengambil data dari yang dikirim dari form index.php 
        $tempat             = $_POST['tempat'];
        $alamat             = $_POST['alamat'];
        $tahun_ajaran       = $_POST['tahun_ajaran'];
        $durasi_kp          = $_POST['durasi_kp'];
        $tanggal_kp         = $_POST['tanggal_kp'];
        $nama1              = $_POST['nama1'];
        $nama2              = $_POST['nama2'];
        $nama3              = $_POST['nama3'];
        $nrp1               = $_POST['nrp1'];
        $nrp2               = $_POST['nrp2'];
        $nrp3               = $_POST['nrp3'];
        $prodi              = $_POST['prodi'];
    
    
        //mengambil dokumen surat
        $document = file_get_contents("./assets/file/SURAT.rtf");
     
    
        //mereplace semua kata yang ada di file dengan variabel
        $document = str_replace("#TEMPAT", $tempat, $document);
        $document = str_replace("#ALAMAT", $alamat, $document);
        $document = str_replace("#TAHUN_AJARAN", $tahun_ajaran, $document);
        $document = str_replace("#DURASI_KP", $durasi_kp, $document);
        $document = str_replace("#TANGGAL_KP", $tanggal_kp, $document);
        $document = str_replace("#NAMA1", $nama1, $document);
        $document = str_replace("#NAMA2", $nama2, $document);
        $document = str_replace("#NAMA3", $nama3, $document);
        $document = str_replace("#NRP1", $nrp1, $document);
        $document = str_replace("#NRP2", $nrp2, $document);
        $document = str_replace("#NRP3", $nrp3, $document);
        $document = str_replace("#PRODI", $prodi, $document);
     
    
        // header untuk membuka file yang dihasilkan dengna aplikasi Ms. Word
        // nama file yang dihasilkan adalah surat izin.docx
        header("Content-type: application/msword");
        header("Content-disposition: inline; filename=Surat Pengajuan KP.doc");
        header("Content-length: " . strlen($document));
        echo $document;
    }

}
