<?php

class Crud extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		//oprasional database	
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	function index()
	{
		//mengambil data dari data base dan menampilkan data dari data base
		$data['tb_konten'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil', $data);
	}

	function tambah()
	{
		//view yg dijadikan form untuk inputan data
		$this->load->view('v_input');
	}

	//next setelah login
	function next()
	{
		//view yg dijadikan form untuk masuk ke form tampilkan data
		$data['tb_konten'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil', $data);
	}



	//pada function ini, pertama yg ditangkap adalah input judul,nama penulis,tgl terbit
	function tambah_aksi()
	{
		$judul = $this->input->post('judul');
		$nama_penulis = $this->input->post('nama_penulis');
		$tgl_terbit = $this->input->post('tgl_terbit');

		$data = array(
			'judul' => $judul,
			'nama_penulis' => $nama_penulis,
			'tgl_terbit' => $tgl_terbit
		);
		//menginput data ke database dengan menggunakan model m_data
		$this->m_data->input_data($data, 'tb_konten');

		//pada parameter kedua, beri nama dari tabelnya. kemudian mengalihkannya ke metod index
		redirect('crud/index');
	}


	//link hapus pada view v_tampil tertuju pada function hapus ini
	//($id) digunakan untuk menangkap data yg dikirim melalui url dari link v_tampil
	function hapus($id_puisi)
	{
		$where = array('id_puisi' => $id_puisi);
		//variabel $where berisi data id, pada parameter kedua masukkan nama tabel
		$this->m_data->hapus_data($where, 'tb_konten');
		redirect('crud/index');
	}

	function edit($id_puisi)
	{
		//merubah id menjadi array yg kemudian digunakan untuk mengambil data menurut id dgn menggunakan function edit_data pada model m_data
		$where = array('id_puisi' => $id_puisi);
		$data['tb_konten'] = $this->m_data->edit_data($where, 'tb_konten')->result();
		$this->load->view('v_edit', $data);
	}

	//menangkap data dari form edit
	function update()
	{
		$id_puisi = $this->input->post('id_puisi');
		$judul = $this->input->post('judul');
		$nama_penulis = $this->input->post('nama_penulis');
		$tgl_terbit = $this->input->post('tgl_terbit');
		$karya = $this->input->post('karya');

		//masukkan data yg akan di update ke dalam variabel data
		$data = array(
			'judul' => $judul,
			'nama_penulis' => $nama_penulis,
			'tgl_terbit' => $tgl_terbit,
			'karya' => $karya
		);

		//variabel where menjadi penentu data yg di update/id yg mana  
		$where = array(
			'id_puisi' => $id_puisi
		);

		//menangkap update_data pada m_data untuk di jalankan	
		$this->m_data->update_data($where, $data, 'tb_konten');
		redirect('crud/index');
	}
}
