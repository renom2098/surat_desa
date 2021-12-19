<?php

class m_kelSurat extends CI_Model {

	public function get_dataSurat() {
		$this->db->from("kelola_surat");
		$this->db->order_by('id', 'DESC');
        return $this->db->get();
	}

	public function get_dataSuratByID($id) {
        return $this->db->get_where('kelola_surat', ['id' => $id])->row();
    }

    public function status_surat() {
		$this->db->from("status_surat");
        return $this->db->get();
	}

	/*public function update_dataSurat($data, $where) {
		$this->db->update("kelola_surat", $data, $where);
	}*/

	function update_dataSurat(){
	    $id = $this->input->post("id");
	    $form = $this->input->post("f");

	    $this->db->set($form);
	    $this->db->where("id", $id);
	    return $this->db->update("kelola_surat");
	}

}