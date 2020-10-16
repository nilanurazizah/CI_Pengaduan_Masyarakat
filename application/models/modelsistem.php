<?php
defined('BASEPATH') or exit('No direct script access allowed');

    Class modelsistem extends CI_Model{

// SIMPAN DATA USER
    public function simpan_db(){    
        // $config['upload_path'] = './assets/filee/foto_profil_user';
        // $config['allowed_types'] = 'jpg|png|gif';
        // // $config['max_size'] = '2048000';
        // $config['file_name'] = url_title($this->input->post('fille'));
        // $filename = $this->upload->file_name;
        // $this->upload->initialize($config);
        // $this->upload->do_upload('fille');
        // $data = $this->upload->data($filename);

        $data = array(
            'id_user' => '',
            'Nik' => $this->input->post('nikk'),
            'nama_masyarakat' => $this->input->post('namaa'),
            'username' => $this->input->post('userr'),
            'password' => ($this->input->post('pass')),
            'telepon' => $this->input->post('telp'),
            // 'foto' => $data['file_name']
        );

        $this->db->insert('masyarakat', $data);
        header("Location:".base_url().'Homepage/loginn');
    }

    public function get_user()
    {
        $data = $this->db->get('masyarakat');
        return $data->result();
    }
    public function count_user()
    {
        $data = $this->db->get('masyarakat');
        return $data->num_rows();
    }

    public function edit_data_user($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data_user($id_user, $data)
    {
        $this->db->set($data);
        $this->db->where('id_user', $id_user);
        $this->db->update('masyarakat');
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    

// SIMPAN LAPORAN USER
    public function report()
    {
        $bukti = $_FILES['files'];
            if ($bukti = '') {
                //
            } else {
                $config['upload_path']   = './assets/filee/foto_pengaduan';
                $config['allowed_types'] = 'jpg|png|gif';

                $this->load->library('upload');
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('files')) {
                    echo "Gagal Upload"; 
                    die();
                } else {
                    $bukti = $this->upload->data('file_name');
                }
            }

        $data = array(
            'id_pengaduan' => "",
            'nama' => $this->input->post('nama'),
            'tgl_pengaduan' => $this->input->post('tgl'),
            'isi_pengaduan' => $this->input->post('isi'),
            'foto' => $bukti
        );
        // $this->db->set('tgl_pengaduan','NOW()',FALSE);
        $this->db->insert('pengaduan', $data);
        header('Location:'. base_url().'Homepage/jml_pengaduan');
    }

    public function edit_data($table,$where)
    {
       return $this->db->get_where($table,$where);
    }

    public function edit_pengaduan()
    {
        $foto = $_FILES['foto']['tmp_name'];
        if ($foto = '') {
            # code...
        } else {
            $config['upload_path'] = "./assets/filee/foto_pengaduan";
            $config['allowed_types'] = "jpg|png|gif";
            $this->load->library('upload');
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('files')) {
                    echo "gagal upload"; die();
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
    $data=array(
        // 'id_pengaduan'  =>"",
        'nama'           => $this->input->post('nama'),
        'tgl_pengaduan' => $this->input->post('tgl'),
        'isi_pengaduan'   => $this->input->post('isi'),
        'foto'          => $foto,
        // 'status'        =>$this->input->post('status')
    );
    $id = $this->input->post('id_pengaduan');
    $this->db->set($data);
    $this->db->where('id_pengaduan',$id);
    $this->db->update('pengaduan');
    header("Location:" . base_url('Homepage/jml_pengaduan'));
    }

    public function get_report()
    {
        $data = $this->db->get('pengaduan');
        return $data->result();
    }

    public function count_report()
    {
        $data = $this->db->get('pengaduan');
        return $data->num_rows();
    }

    public function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }

    public function update_login($log_stat, $usernames)
    {
        $this->db->set('status', $log_stat);
        $this->db->where('username', $usernames);
        $this->db->update('masyarakat');
    }


// 
    public function update_loginn($log_stat, $usernames)
    {
        $this->db->set('status', $log_stat);
        $this->db->where('username', $usernames);
        $this->db->update('admin');
    }
    


    // ADMIN
    // public function get_petugas()
    // {
    //     $data = $this->db->get('petugas');
    //     return $data->result();
    // }

    // public function count_petugas()
    // {
    //     $data = $this->db->get('petugas');
    //     return $data->num_rows();
    // }

    public function cek_loginn($akun) {
        $petugas = $this->db->get_where('petugas',$akun);
        $admin = $this->db->get_where('petugas',$akun);
        if ($petugas->result() == null) {
            return $admin;
        }else{
            return $petugas;
        }
    }

    // public function simpan_data_petugas(){    
    //     $data = array(
    //         'id_petugas' => '',
    //         // 'Nik' => $this->input->post('nikk'),
    //         'nama_petugas' => $this->input->post('nama'),
    //         'username' => $this->input->post('username'),
    //         'password' => ($this->input->post('password')),
    //         'telp' => $this->input->post('telepon'),
    //         'level' => $this->input->post('levell')
    //         // 'foto' => $data['file_name']
    //     );

    //     $this->db->insert('petugas', $data);
    //     header("Location:".base_url().'Homepage/data_petugas');
    // }

    // public function edit_data_petugas($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }

    // public function update_data_petugas($id_petugas, $data)
    // {
    //     $this->db->set($data);
    //     $this->db->where('id_petugas', $id_petugas);
    //     $this->db->update('petugas');
    // }

    // public function hapus_data_petugas($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }


    
    

    // CRUD AJAX USER
    public function view_user(){
		return $this->db->get('masyarakat')->result();
    }
    
    // Fungsi untuk validasi form tambah dan ubah
	public function validationn($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, NIS tidak harus divalidasi
		// Jadi NIS di validasi hanya ketika menambah data siswa saja
        if($mode == "save")
        $this->form_validation->set_rules('input_nik', 'NIK', 'required');
		$this->form_validation->set_rules('input_nama', 'Nama Petugas', 'required');
		$this->form_validation->set_rules('input_user', 'Username', 'required');
		$this->form_validation->set_rules('input_password', 'Password', 'required');
		$this->form_validation->set_rules('input_telp', 'telp', 'required');
		// $this->form_validation->set_rules('input_level', 'Level', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return true; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return false; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function savee(){
		$data = array(
			"Nik" => $this->input->post('input_nik'),
			"nama_masyarakat" => $this->input->post('input_nama'),
			"username" => $this->input->post('input_user'),
			"password" => $this->input->post('input_password'),
			"telepon" => $this->input->post('input_telp'),
		);

		$this->db->insert('masyarakat', $data); // Untuk mengeksekusi perintah insert data
	}

	// Fungsi untuk melakukan ubah data siswa berdasarkan ID siswa
	public function editt($id_user){
		$data = array(
            "Nik" => $this->input->post('input_nik'),
			"nama_masyarakat" => $this->input->post('input_nama'),
			"username" => $this->input->post('input_user'),
			"password" => $this->input->post('input_password'),
			"telepon" => $this->input->post('input_telp'),
			// "level" => $this->input->post('input_level')
		);

		$this->db->where('id_user', $id_user);
		$this->db->update('masyarakat', $data); // Untuk mengeksekusi perintah update data
	}

	// Fungsi untuk melakukan menghapus data siswa berdasarkan ID siswa
	public function deletee($id_user){
		$this->db->where('id_user', $id_user);
		$this->db->delete('masyarakat'); // Untuk mengeksekusi perintah delete data
	}


    // CRUD AJAX PETUGAS
    public function view(){
		return $this->db->get('petugas')->result();
	}

	// Fungsi untuk validasi form tambah dan ubah
	public function validation($mode){
		$this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

		// Tambahkan if apakah $mode save atau update
		// Karena ketika update, NIS tidak harus divalidasi
		// Jadi NIS di validasi hanya ketika menambah data siswa saja
		if($mode == "save")
		$this->form_validation->set_rules('input_nama', 'Nama Petugas', 'required');

		$this->form_validation->set_rules('input_user', 'Username', 'required');
		$this->form_validation->set_rules('input_password', 'Password', 'required');
		$this->form_validation->set_rules('input_telp', 'telp', 'required');
		$this->form_validation->set_rules('input_level', 'Level', 'required');

		if($this->form_validation->run()) // Jika validasi benar
			return true; // Maka kembalikan hasilnya dengan TRUE
		else // Jika ada data yang tidak sesuai validasi
			return false; // Maka kembalikan hasilnya dengan FALSE
	}

	// Fungsi untuk melakukan simpan data ke tabel siswa
	public function save(){
		$data = array(
			"nama_petugas" => $this->input->post('input_nama'),
			"username" => $this->input->post('input_user'),
			"password" => $this->input->post('input_password'),
			"telepon" => $this->input->post('input_telp'),
			"level" => $this->input->post('input_level'),
		);

		$this->db->insert('petugas', $data); // Untuk mengeksekusi perintah insert data
	}

	// Fungsi untuk melakukan ubah data siswa berdasarkan ID siswa
	public function edit($id_petugas){
		$data = array(
			"nama_petugas" => $this->input->post('input_nama'),
			"username" => $this->input->post('input_user'),
			"password" => $this->input->post('input_password'),
			"telepon" => $this->input->post('input_telp'),
			"level" => $this->input->post('input_level')
		);

		$this->db->where('id_petugas', $id_petugas);
		$this->db->update('petugas', $data); // Untuk mengeksekusi perintah update data
	}

	// Fungsi untuk melakukan menghapus data siswa berdasarkan ID siswa
	public function delete($id_petugas){
		$this->db->where('id_petugas', $id_petugas);
		$this->db->delete('petugas'); // Untuk mengeksekusi perintah delete data
    }
    
















    // CRUD PENGADUAN
    public function view_pengaduan(){
		return $this->db->get('pengaduan')->result();
    }
    

    public function delete_pengaduan($id_pengaduan){
		$this->db->where('id_pengaduan', $id_pengaduan);
		$this->db->delete('pengaduan'); // Untuk mengeksekusi perintah delete data
	}
}    
?>