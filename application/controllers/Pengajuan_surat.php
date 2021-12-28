<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_surat extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('m_pengSurat', 'model');
	}

	function _templateTop() {
		$this->load->view('peng_surat_template/header');
		$this->load->view('peng_surat_template/sidebar');
	}

	function _templateBottom(){
		$this->load->view('peng_surat_template/footer');
	}

	public function index(){
		$this->_templateTop();
		$this->load->view('peng_surat/home');
		$this->_templateBottom();
	}

	public function status_surat(){
		$data["data"]=$this->model->get_dataSurat();
		$this->_templateTop();
		$this->load->view('peng_surat/status_surat', $data);
		$this->_templateBottom();
	}

	public function insert_dataSurat(){
        $nomor_kk = $this->input->post('nomor_kk');
        $nomor_nik = $this->input->post('nomor_nik');
        $dari = $this->input->post('dari');
        $agama = $this->input->post('agama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $pekerjaan = $this->input->post('pekerjaan');
        $alamat = $this->input->post('alamat');
        $nama_surat = $this->input->post('nama_surat');
        $deskripsi_surat = $this->input->post('deskripsi_surat');
        $upload_ktp = $this->input->post('upload_ktp');
        $upload_ktp = $this->input->post('upload_kk');


        $config['upload_path']          = './data_upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;


        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if( ! $this->upload->do_upload('upload_ktp')){
        	$error = array('error' => $this->upload->display_errors());
            echo '<div class="alert alert-danger">'.$error['error'].'</div>';
            die();
        } else {
        	$upload_ktp=$this->upload->data('file_name');
        }

        if( ! $this->upload->do_upload('upload_kk')){
        	$error = array('error' => $this->upload->display_errors());
            echo '<div class="alert alert-danger">'.$error['error'].'</div>';
            die();
        } else {
        	$upload_kk=$this->upload->data('file_name');
        }

        $data = array(
        	'nomor_kk' => $nomor_kk,
        	'nomor_nik' => $nomor_nik,
        	'dari' => $dari,
        	'agama' => $agama,
        	'jenis_kelamin' => $jenis_kelamin,
        	'tempat_lahir' => $tempat_lahir,
        	'tanggal_lahir' => $tanggal_lahir,
        	'pekerjaan' => $pekerjaan,
        	'alamat' => $alamat,
        	'nama_surat' => $nama_surat,
        	'deskripsi_surat' => $deskripsi_surat,
        	'upload_ktp' => $upload_ktp,
        	'upload_kk' => $upload_kk
        );

        $this->model->insert_dataSurat($data);
        redirect("pengajuan_surat/status_surat");
    }

    public function viewEditDataSurat($id){
    	$data["dataStatus"]=$this->model->status_surat();
    	$data["data"]=$this->model->get_dataSuratByID($id);
		$this->_templateTop();
        $this->load->view('peng_surat/v_editData', $data);
        $this->_templateBottom();
    }

    public function update_dataSurat(){
        $this->model->update_dataSurat();
        redirect("pengajuan_surat/status_surat");
    }

    function download_hasilSurat($id){
        $data = $this->db->get_where('kelola_surat',['id'=>$id])->row();
        force_download('data_surat/'.$data->file_surat_dsd,NULL);
    }

}