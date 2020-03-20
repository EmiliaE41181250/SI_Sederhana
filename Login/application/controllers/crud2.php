<?php

class Crud2 extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //oprasional database	
        $this->load->model('m_data2');
        $this->load->helper('url');
    }



    function index2()
    {
        //mengambil data dari data base dan menampilkan data dari data base
        $data['tb_penulis'] = $this->m_data2->tampil_data2()->result();
        $this->load->view('v_tampil2', $data);
    }

    function tambah2()
    {
        //view yg dijadikan form untuk inputan data
        $this->load->view('v_input2');
    }


    //pada function ini, pertama yg ditangkap adalah input judul,nama penulis,tgl terbit
    function tambah_aksi2()
    {
        $nama_penulis = $this->input->post('nama_penulis');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');

        $data = array(
            'nama_penulis' => $nama_penulis,
            'alamat' => $alamat,
            'telepon' => $telepon
        );
        //menginput data ke database dengan menggunakan model m_data
        $this->m_data2->input_data2($data, 'tb_penulis');

        //pada parameter kedua, beri nama dari tabelnya. kemudian mengalihkannya ke metod index
        redirect('crud2/index2');
    }

    //next setelah login
    function next2()
    {
        //view yg dijadikan form untuk masuk ke form tampilkan data
        $data['tb_penulis'] = $this->m_data2->tampil_data2()->result();
        $this->load->view('v_tampil2', $data);
    }

    //link hapus pada view v_tampil tertuju pada function hapus ini
    //($id) digunakan untuk menangkap data yg dikirim melalui url dari link v_tampil
    function hapus2($id_penulis)
    {
        $where = array('id_penulis' => $id_penulis);
        //variabel $where berisi data id, pada parameter kedua masukkan nama tabel
        $this->m_data2->hapus_data2($where, 'tb_penulis');
        redirect('crud2/index2');
    }

    function edit2($id_penulis)
    {
        //merubah id menjadi array yg kemudian digunakan untuk mengambil data menurut id dgn menggunakan function edit_data pada model m_data
        $where = array('id_penulis' => $id_penulis);
        $data['tb_penulis'] = $this->m_data2->edit_data2($where, 'tb_penulis')->result();
        $this->load->view('v_edit2', $data);
    }



    //menangkap data dari form edit
    function update2()
    {
        $id_penulis = $this->input->post('id_penulis');
        $nama_penulis = $this->input->post('nama_penulis');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');

        //masukkan data yg akan di update ke dalam variabel data
        $data = array(
            'nama_penulis' => $nama_penulis,
            'alamat' => $alamat,
            'telepon' => $telepon
        );

        //variabel where menjadi penentu data yg di update/id yg mana  
        $where = array(
            'id_penulis' => $id_penulis
        );

        //menangkap update_data pada m_data untuk di jalankan	
        $this->m_data2->update_data2($where, $data, 'tb_penulis');
        redirect('crud2/index2');
    }
}
