<?php
defined('BASEPATH') or exit('No direct script access allowed');

    Class pengaduanmodel extends CI_Model{
    public function view(){
		return $this->db->get('pengaduan')->result();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, NIS tidak harus divalidasi
		// Jadi NIS di validasi hanya ketika menambah data siswa saja
		if($mode == "save")
		$this->form_validation->set_rules('input_nama', 'Nama Masyarakat', 'required');
		$this->form_validation->set_rules('input_tgl', 'Tanggal Pengaduan', 'required');
		$this->form_validation->set_rules('input_isi', 'Isi Pengaduan', 'required');
        $this->form_validation->set_rules('input_bukti', 'Bukti Foto', 'required');
        
		if($this->form_validation->run()) // Jika validasi benar
			return true; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return false; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function save(){
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"tgl_pengaduan" => $this->input->post('input_tgl'),
			"isi_pengaduan" => $this->input->post('input_isi'),
			"foto" => $this->input->post('input_bukti')
		);

		$this->db->insert('pengaduan', $data); // Untuk mengeksekusi perintah insert data
	}

	// Fungsi untuk melakukan ubah data siswa berdasarkan ID siswa
	public function edit($id){
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"tgl_pengaduan" => $this->input->post('input_tgl'),
			"isi_pengaduan" => $this->input->post('input_isi'),
			"foto" => $this->input->post('input_bukti')
		);

		$this->db->where('id_pengaduan', $id);
		$this->db->update('pengaduan', $data); // Untuk mengeksekusi perintah update data
	}

	// Fungsi untuk melakukan menghapus data siswa berdasarkan ID siswa
	public function delete($id){
		$this->db->where('id_pengaduan', $id);
		$this->db->delete('pengaduan'); // Untuk mengeksekusi perintah delete data
	}

    }
?>