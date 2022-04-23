<?php

class Kegiatan_model extends CI_Model
{
	public function get() {
		$query = $this->db->get('kegiatan');
		return $query->result_array();
	}

	public function get_where($id) {
		$query = $this->db->get_where('kegiatan', array(
			'id' => $id,
		));

		return $query->row_array();
	}

	public function add() {
		$data = array(
			'nama_kegiatan' => $this->input->post('namaKegiatan'),
			'jenis_kegiatan' => $this->input->post('jenisKegiatan'),
			'deadline_kegiatan' => $this->input->post('deadlineKegiatan'),
			'keterangan' => $this->input->post('keterangan')
		);

		return $this->db->insert('kegiatan', $data);
	}

	public function update($id) {
		$data = array(
			'nama_kegiatan' => $this->input->post('namaKegiatan'),
			'jenis_kegiatan' => $this->input->post('jenisKegiatan'),
			'deadline_kegiatan' => $this->input->post('deadlineKegiatan'),
			'keterangan' => $this->input->post('keterangan')
		);

		$this->db->where('id', $id);
		return $this->db->update('kegiatan', $data);
	}

	public function done($id) {
		$data = array(
			'status' => true
		);

		$this->db->where('id', $id);
		return $this->db->update('kegiatan', $data);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		return $this->db->delete('kegiatan');
	}
}
