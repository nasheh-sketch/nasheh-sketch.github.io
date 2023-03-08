<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('hak_akses') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('login');
		}
	}
	public function index()
	{
		//dashboard data pegawai
		$pegawai = $this->db->query("SELECT * FROM data_pegawai");
		$kabid = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'Kepala Bidang'");
		$kasubag = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'Kepala Sub Bagian'");
		$perencana = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'Perencana'");
		$peneliti = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'Peneliti'");
		$analis = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'Analis'");
		$pengelola = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'Pengelola'");
		$honor = $this->db->query("SELECT * FROM data_pegawai WHERE jabatan = 'Honor'");

		//dashboard surat bidang sekretariat
		$suratmasuksekre = $this->db->query("SELECT * FROM data_suratmasuksekre");
		$suratkeluarsekre = $this->db->query("SELECT * FROM data_suratkeluarsekre");
		//dashboard surat bidang P2EPD
		$suratmasukp2epd = $this->db->query("SELECT * FROM data_suratmasukp2epd");
		$suratkeluarp2epd = $this->db->query("SELECT * FROM data_suratkeluarp2epd");
		//dashboard surat bidang litbang
		$suratmasuklitbang = $this->db->query("SELECT * FROM data_suratmasuklitbang");
		$suratkeluarlitbang = $this->db->query("SELECT * FROM data_suratkeluarlitbang");
		//dashboard surat bidang ppm
		$suratmasukppm = $this->db->query("SELECT * FROM data_suratmasukppm");
		$suratkeluarppm = $this->db->query("SELECT * FROM data_suratkeluarppm");
		//dashboard surat bidang pik
		$suratmasukpik = $this->db->query("SELECT * FROM data_suratmasukpik");
		$suratkeluarpik = $this->db->query("SELECT * FROM data_suratkeluarpik");


		
		$data['title'] = "Dashboard";
		$data['pegawai'] = $pegawai->num_rows();
		$data['kabid'] = $kabid->num_rows();
		$data['kasubag'] = $kasubag->num_rows();
		$data['perencana'] = $perencana->num_rows();
		$data['peneliti'] = $peneliti->num_rows();
		$data['analis'] = $analis->num_rows();
		$data['pengelola'] = $pengelola->num_rows();
		$data['honor'] = $honor->num_rows();
		$data['suratmasuksekre'] = $suratmasuksekre->num_rows();
		$data['suratkeluarsekre'] = $suratkeluarsekre->num_rows();
		$data['suratmasukp2epd'] = $suratmasukp2epd->num_rows();
		$data['suratkeluarp2epd'] = $suratkeluarp2epd->num_rows();
		$data['suratmasuklitbang'] = $suratmasuklitbang->num_rows();
		$data['suratkeluarlitbang'] = $suratkeluarlitbang->num_rows();
		$data['suratmasukppm'] = $suratmasukppm->num_rows();
		$data['suratkeluarppm'] = $suratkeluarppm->num_rows();
		$data['suratmasukpik'] = $suratmasukpik->num_rows();
		$data['suratkeluarpik'] = $suratkeluarpik->num_rows();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template_admin/footer');
	}
}
