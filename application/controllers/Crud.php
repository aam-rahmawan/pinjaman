<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper('url');
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$sisa = $this->input->post('sisa');
		$tgl = $this->input->post('tgl');
		$petugas = $this->input->post('petugas');
		$hasil = $this->input->post('hasil');
 
		$data = array(
			'nama' => $nama,
			'sisa' => $sisa,
			'tgl' => $tgl,
			'petugas' => $petugas,
			'hasil' => $hasil
			);
		$this->m_data->input_data($data,'p_pinjam');
		redirect('crud/index');
	}

	function hapus($pinjam_id){
		$where = array('pinjam_id' => $pinjam_id);
		$this->m_data->hapus_data($where,'p_pinjam');
		redirect('crud/index');
	}

	function edit($pinjam_id){
	$where = array('pinjam_id' => $pinjam_id);
	$data['p_pinjam'] = $this->m_data->edit_data($where,'p_pinjam')->result();
	$this->load->view('v_edit',$data);
	}

	function update(){
	$pinjam_id = $this->input->post('pinjam_id');
	$nama = $this->input->post('nama');
	$sisa = $this->input->post('sisa');
	$tgl = $this->input->post('tgl');
	$petugas = $this->input->post('petugas');
	$hasil = $this->input->post('hasil');
 
	$data = array(
		'nama' => $nama,
			'sisa' => $sisa,
			'tgl' => $tgl,
			'petugas' => $petugas,
			'hasil' => $hasil
	);
 
	$where = array(
		'pinjam_id' => $pinjam_id
	);
 
	$this->m_data->update_data($where,$data,'p_pinjam');
	redirect('crud/index');
	}
}