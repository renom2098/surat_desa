<?php

class m_admin extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function level_user() {
		$this->db->from("level_user");
        return $this->db->get();
	}

	//model data admin
	public function get_dataAdmin() {
		$this->db->from("user");
        $this->db->where("level", 1);
        $this->db->or_where("level", 2);
        return $this->db->get();
	}

	public function insert_dataAdmin() {
        $form = $this->input->post("f");
        $this->db->set($form);
        return $this->db->insert("user");
    }

    public function view_dataAdmin($id) {
        return $this->db->get_where('user', ['id' => $id])->row();
    }

    function update_dataAdmin(){
	    $id = $this->input->post("id");
	    $form = $this->input->post("f");

	    $this->db->set($form);
	    $this->db->where("id", $id);
	    return $this->db->update("user");
	}

	function delete_dataAdmin($id){
        $this->db->where("id", $id);
        return $this->db->delete("user");
    }

    //model data warga
    public function get_dataWarga() {
		$this->db->from("user");
        $this->db->where("level", 3);
        return $this->db->get();
	}

	public function insert_dataWarga() {
        $form = $this->input->post("f");
        $this->db->set($form);
        return $this->db->insert("user");
    }

    public function view_dataWarga($id) {
        return $this->db->get_where('user', ['id' => $id])->row();
    }

    function update_dataWarga(){
	    $id = $this->input->post("id");
	    $form = $this->input->post("f");

	    $this->db->set($form);
	    $this->db->where("id", $id);
	    return $this->db->update("user");
	}

	function delete_dataWarga($id){
        $this->db->where("id", $id);
        return $this->db->delete("user");
    }

}