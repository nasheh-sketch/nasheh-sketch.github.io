<?php

class ModelPenggajian extends CI_model{


	//Mendapatkan Tanggal Surat Masuk
	public function gettahunsuratmasukpik()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_surat) AS tahun FROM data_suratmasukpik GROUP BY YEAR(tanggal_surat) ORDER BY YEAR(tanggal_surat) ASC");

		return $query->result();
	}
	public function gettahunsuratmasuksekre()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_surat) AS tahun FROM data_suratmasuksekre GROUP BY YEAR(tanggal_surat) ORDER BY YEAR(tanggal_surat) ASC");

		return $query->result();
	}
	public function gettahunsuratmasukp2epd()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_surat) AS tahun FROM data_suratmasukp2epd GROUP BY YEAR(tanggal_surat) ORDER BY YEAR(tanggal_surat) ASC");

		return $query->result();
	}
	public function gettahunsuratmasuklitbang()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_surat) AS tahun FROM data_suratmasuklitbang GROUP BY YEAR(tanggal_surat) ORDER BY YEAR(tanggal_surat) ASC");

		return $query->result();
	}
	public function gettahunsuratmasukppm()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_surat) AS tahun FROM data_suratmasukppm GROUP BY YEAR(tanggal_surat) ORDER BY YEAR(tanggal_surat) ASC");

		return $query->result();
	}


	//Mendapatkan Tanggal Surat Keluar
	public function gettahunsuratkeluarpik()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_surat) AS tahun FROM data_suratkeluarpik GROUP BY YEAR(tanggal_surat) ORDER BY YEAR(tanggal_surat) ASC");

		return $query->result();
	}
	public function gettahunsuratkeluarsekre()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_surat) AS tahun FROM data_suratkeluarsekre GROUP BY YEAR(tanggal_surat) ORDER BY YEAR(tanggal_surat) ASC");

		return $query->result();
	}
	public function gettahunsuratkeluarp2epd()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_surat) AS tahun FROM data_suratkeluarp2epd GROUP BY YEAR(tanggal_surat) ORDER BY YEAR(tanggal_surat) ASC");

		return $query->result();
	}
	public function gettahunsuratkeluarlitbang()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_surat) AS tahun FROM data_suratkeluarlitbang GROUP BY YEAR(tanggal_surat) ORDER BY YEAR(tanggal_surat) ASC");

		return $query->result();
	}
	public function gettahunsuratkeluarppm()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_surat) AS tahun FROM data_suratkeluarppm GROUP BY YEAR(tanggal_surat) ORDER BY YEAR(tanggal_surat) ASC");

		return $query->result();
	}

	//Filter Tanggal Surat Masuk
	public function filterbytanggalsuratmasukpik($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * FROM data_suratmasukpik WHERE tanggal_surat BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal_surat ASC");
		
		return $query->result();
	}
	public function filterbytanggalsuratmasuksekre($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * FROM data_suratmasuksekre WHERE tanggal_surat BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal_surat ASC");
		
		return $query->result();
	}
	public function filterbytanggalsuratmasukp2epd($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * FROM data_suratmasukp2epd WHERE tanggal_surat BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal_surat ASC");
		
		return $query->result();
	}
	public function filterbytanggalsuratmasuklitbang($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * FROM data_suratmasuklitbang WHERE tanggal_surat BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal_surat ASC");
		
		return $query->result();
	}
	public function filterbytanggalsuratmasukppm($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * FROM data_suratmasukppm WHERE tanggal_surat BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal_surat ASC");
		
		return $query->result();
	}

	
	//Filter Tanggal Surat Keluar
	public function filterbytanggalsuratkeluarpik($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * FROM data_suratkeluarpik WHERE tanggal_surat BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal_surat ASC");
		
		return $query->result();
	}
	public function filterbytanggalsuratkeluarsekre($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * FROM data_suratkeluarsekre WHERE tanggal_surat BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal_surat ASC");
		
		return $query->result();
	}
	public function filterbytanggalsuratkeluarp2epd($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * FROM data_suratkeluarp2epd WHERE tanggal_surat BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal_surat ASC");
		
		return $query->result();
	}
	public function filterbytanggalsuratkeluarlitbang($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * FROM data_suratkeluarlitbang WHERE tanggal_surat BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal_surat ASC");
		
		return $query->result();
	}
	public function filterbytanggalsuratkeluarppm($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * FROM data_suratkeluarppm WHERE tanggal_surat BETWEEN '$tanggalawal' AND '$tanggalakhir' ORDER BY tanggal_surat ASC");
		
		return $query->result();
	}

	//Fungsi tambah, ubah, dll

	public function get_data($table) {
		return $this->db->get($table);
	}

	public function insert_data($data,$table){
		$this->db->insert($table, $data);
	}

	public function update_data($table, $data, $whare){
		$this->db->update($table, $data, $whare);
	}

	public function delete_data($whare,$table){
		$this->db->where($whare);
		$this->db->delete($table);
	}

	public function insert_batch($table = null, $data = array()) {
		$jumlah = count($data);
		if ($jumlah > 0) {
			$this->db->insert_batch($table, $data);
		}
	}

	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db->where('username',$username)
							->where('password',md5($password))
							->limit(1)
							->get('data_pegawai');
		if($result->num_rows()>0){
			return $result->row();
		}else{
			return FALSE;
		}
	}
}

?>