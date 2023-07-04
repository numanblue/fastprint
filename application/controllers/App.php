<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('upload');


		$this->load->helper('url', 'form');
    $this->load->library('form_validation');
		$this->load->model('modelcrud');
	}
	public function index()
	{
		$this->load->view('app/utama');
	}
	public function notsell()
	{
		$this->load->view('app/notsell');
	}
	public function tambah()
	{
		$this->load->view('app/tambah');
	}
	public function edit($id)
	{
		$data = array(
			'idne' => $id
				);
		$this->load->view('app/edit',$data);
	}
	public function tambahdata()
	{
		$namaproduk = $this->db->escape_str($this->input->post('namaproduk'));
		$kategori = $this->db->escape_str($this->input->post('kategori'));
		$harga = $this->db->escape_str($this->input->post('harga'));
		$status = $this->input->post('status');

		$tambahya = $this->db->query("INSERT INTO datanya VALUES('','$namaproduk','$kategori','$harga','$status')");

		echo "<script>alert('Berhasil Ditambah');window.location = '".base_url('app')."';</script>";
	}
	public function editdata()
	{
		$id_produk = $this->input->post('id_produk');

		$namaproduk = $this->db->escape_str($this->input->post('namaproduk'));
		$kategori = $this->db->escape_str($this->input->post('kategori'));
		$harga = $this->db->escape_str($this->input->post('harga'));
		$status = $this->input->post('status');

		$editya = $this->db->query("UPDATE datanya SET nama_produk='$namaproduk', kategori='$kategori', harga='$harga', status='$status' WHERE id_produk='$id_produk'");

		echo "<script>alert('Berhasil Diedit');window.location = '".base_url('app')."';</script>";
	}
	public function sellit($id)
	{
		$editya = $this->db->query("UPDATE datanya SET status='bisa dijual' WHERE id_produk='$id'");

		echo "<script>alert('Berhasil Diedit');window.location = '".base_url('app')."';</script>";
	}
	public function hapus($id){
		$ajg = $this->db->query("DELETE FROM datanya WHERE id_produk='$id'");
		redirect(base_url('app'));
	}
}
