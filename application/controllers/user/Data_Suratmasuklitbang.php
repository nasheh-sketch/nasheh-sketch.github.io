<?php

class Data_Suratmasuklitbang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != '2') {
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
        $data['title'] = "Data Surat Masuk";
        $data['suratmasuk'] = $this->ModelPenggajian->get_data('data_suratmasuklitbang')->result();

        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/sidebar');
        $this->load->view('user/suratmasuk/data_suratmasuklitbang', $data);
        $this->load->view('template_user/footer');
    }

    public function tambah_data()
    {
        $data['title'] = "Tambah Data Surat Masuk";

        $data['suratmasuk'] = $this->ModelPenggajian->get_data('data_suratmasuklitbang')->result();

        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/sidebar');
        $this->load->view('user/suratmasuk/tambah_datasuratmasuklitbang', $data);
        $this->load->view('template_user/footer');
    }

    public function tambah_data_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_data();
        } else {
            $no_berkas          = $this->input->post('no_berkas');
            $alamat_pengirim    = $this->input->post('alamat_pengirim');
            $tanggal_surat      = $this->input->post('tanggal_surat');
            $no_surat           = $this->input->post('no_surat');
            $perihal            = $this->input->post('perihal');
            $no_petunjuk        = $this->input->post('no_petunjuk');
            $no_paket           = $this->input->post('no_paket');
            $file               = $this->input->post('file');
            if ($file = '') {
            } else {
                $config['upload_path']         = './file';
                $config['allowed_types']     = 'pdf|jpg|jpeg|png';
                $config['max_size']            =     10000;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')) {
                    echo "File Gagal Diupload !";
                } else {
                    $file = $this->upload->data('file_name');
                }
            }


            $data = array(
                'no_berkas'         => $no_berkas,
                'alamat_pengirim'   => $alamat_pengirim,
                'tanggal_surat'     => $tanggal_surat,
                'no_surat'          => $no_surat,
                'perihal'           => $perihal,
                'no_petunjuk'       => $no_petunjuk,
                'no_paket'          => $no_paket,
                'file'              => $file,
            );

            $this->ModelPenggajian->insert_data($data, 'data_suratmasuklitbang');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
            redirect('user/data_suratmasuklitbang');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('no_surat', 'Nomor Surat', 'required');
    }

    public function detail_data($id)
    {
        $data['title'] = "Detail Surat";
		$data['suratmasuk'] = $this->db->query("SELECT * FROM data_suratmasuklitbang WHERE id='$id'")->result();

        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/sidebar');
        $this->load->view('user/suratmasuk/detail_datasuratmasuklitbang', $data);
        $this->load->view('template_user/footer');
    }

    public function download($id)
    {
        $this->load->helper('download');
        $filedata = $this->db->query("SELECT * FROM data_suratmasuklitbang WHERE id='$id'");
        foreach($filedata->result() as $fd){
            $file = 'file/'.$fd->file;
            force_download($file, null);
        }
    }
}
