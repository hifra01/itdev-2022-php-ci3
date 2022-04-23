<?php

class Todo extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kegiatan_model');
	}

	public function index()
	{
		$meta['title'] = "Halaman Utama To-do List";

		$data['kegiatan'] = $this->kegiatan_model->get();

		$this->load->view('templates/header', $meta);
		$this->load->view('todo/home', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$meta['title'] = "Tambah Kegiatan Baru";

		$this->load->helper('form');

		$this->form_validation->set_rules('namaKegiatan', 'Nama Kegiatan', 'required');
		$this->form_validation->set_rules('jenisKegiatan', 'Jenis Kegiatan', 'required');
		$this->form_validation->set_rules('deadlineKegiatan', 'Deadline Kegiatan', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $meta);
			$this->load->view('todo/add');
			$this->load->view('templates/footer');
		} else {
			$this->kegiatan_model->add();
			redirect('/');
		}
	}

	public function edit($id)
	{
		$meta['title'] = "Edit Kegiatan";
		$this->load->helper('form');

		$this->form_validation->set_rules('namaKegiatan', 'Nama Kegiatan', 'required');
		$this->form_validation->set_rules('jenisKegiatan', 'Jenis Kegiatan', 'required');
		$this->form_validation->set_rules('deadlineKegiatan', 'Deadline Kegiatan', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['kegiatan'] = $this->kegiatan_model->get_where($id);
			$data['id'] = $id;

			$this->load->view('templates/header', $meta);
			$this->load->view('todo/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->kegiatan_model->update($id);
			redirect('/');
		}
	}

	public function done($id)
	{
		$this->kegiatan_model->done($id);
		redirect('/');
	}

	public function delete($id)
	{
		$this->kegiatan_model->delete($id);
		redirect('/');
	}


}
