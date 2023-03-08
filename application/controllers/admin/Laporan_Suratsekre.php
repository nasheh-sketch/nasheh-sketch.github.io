<?php

class Laporan_Suratsekre extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('login');
		}
	}

	public function index(){
		$data['tahun'] = $this->ModelPenggajian->gettahunsuratmasuksekre();

		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/laporan/suratsekre',$data);
		$this->load->view('template_admin/footer');
	}

	public function filter(){
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$nilaifilter = $this->input->post('nilaifilter');

		if ($nilaifilter == 0) {
			$data['title'] = "Laporan Surat Masuk";
			$data['suratmasuk'] = $this->ModelPenggajian->filterbytanggalsuratmasuksekre($tanggalawal,$tanggalakhir);

			$data['title'] = "Laporan Surat Keluar";
			$data['suratkeluar'] = $this->ModelPenggajian->filterbytanggalsuratkeluarsekre($tanggalawal,$tanggalakhir);


			$this->load->view('template_admin/header',$data);
			$this->load->view('admin/laporan/cetak_laporansekre',$data);
		}
	}
}

?>