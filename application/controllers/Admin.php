<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('m_admin', 'model');
	}

	function _templateTop() {
		$this->load->view('admin_template/header');
		$this->load->view('admin_template/sidebar');
	}

	function _templateBottom() {
		$this->load->view('admin_template/footer');
	}

	// kelola data admin
	public function index() {
		$data["data"]=$this->model->get_dataAdmin();
		$this->_templateTop();
		$this->load->view('admin/v_admin', $data);
		$this->_templateBottom();
	}

	public function viewAddDataAdmin(){
		$this->_templateTop();
        $this->load->view('admin/v_formAddAdmin');
        $this->_templateBottom();
    }

    public function viewEditDataAdmin($id){
    	$data["dataLevel"]=$this->model->level_user();
    	$data["data"]=$this->model->view_dataAdmin($id);
		$this->_templateTop();
        $this->load->view('admin/v_formEditAdmin', $data);
        $this->_templateBottom();
    }

    public function insert_dataAdmin(){
        $this->model->insert_dataAdmin();
        redirect("admin");
    }

    public function update_dataAdmin(){
        $this->model->update_dataAdmin();
        redirect("admin");
    }

    public function delete_dataAdmin($id){
        $this->model->delete_dataAdmin($id);
        redirect("admin");
    }

    // kelola data warga
    public function kelAkunWarga() {
		$data["data"]=$this->model->get_dataWarga();
		$this->_templateTop();
		$this->load->view('admin/v_kelAkunWarga', $data);
		$this->_templateBottom();
	}

	public function viewAddDataWarga(){
		$this->_templateTop();
        $this->load->view('admin/v_formAddWarga');
        $this->_templateBottom();
    }

    public function viewEditDataWarga($id){
    	$data["dataLevel"]=$this->model->level_user();
    	$data["data"]=$this->model->view_dataWarga($id);
		$this->_templateTop();
        $this->load->view('admin/v_formEditWarga', $data);
        $this->_templateBottom();
    }

    public function insert_dataWarga(){
        $this->model->insert_dataWarga();
        redirect("admin/kelAkunWarga");
    }

    public function update_dataWarga(){
        $this->model->update_dataWarga();
        redirect("admin/kelAkunWarga");
    }

    public function delete_dataWarga($id) {
    	$this->model->delete_dataWarga($id);
    	redirect("admin/kelAkunWarga");
    }
	
}
