<?php

class Homepage extends CI_Controller{

// BERANDA SEBELUM LOGIN
    public function beranda(){
        $data['title'] = "Pengaduan Masyarakat";
        $this->load->view('home', $data);
    }

// LOGIN
    // LOGIN MASYARAKAT
    public function loginn(){
        
        $data['title'] = "Login";
        $this->load->view('login_mas', $data);
    }

    public function aksi_login(){

        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => $passwords
        );
        $cek = $this->modelsistem->cek_login("masyarakat", $where)->num_rows();
    
        if ($cek > 0) {
            $data_session = array(
                'username' => $usernames,
                'status' => 'login'
            );
     
        $this->session->set_userdata($data_session);
            if ($this->session->userdata('status') == 'login') {
                // echo "berhasil";
            header("location:" . base_url() . 'Homepage/home_user');
        } else{
            echo 'login gagal';
        }
        } else {
            echo 'email dan password yang anda masukan salah!';
        }
    }
    
    // PUBLIC FUNCTION UNTUK USER
    public function home_user(){
        $data['title'] = "Pengaduan Masyarakat";
        $this->load->view('dashboard_user',$data);
    }
    public function form(){
        $data['title'] = "Pengaduan Masyarakat";
        $this->load->view('form_lapor',$data);
    }
    public function jml_pengaduan()
    {
        $data['title'] = "Jumlah Pengaduan";
        $data['pengaduan'] = $this->modelsistem->get_report();
        $data['c_pengaduan'] = $this->modelsistem->count_report();
        $this->load->view('jumlah_pengaduan', $data);
    }

    public function simpan_data(){
        $this->modelsistem->simpan_db();
        $this->load->view('login_mas');
    }

    public function simpan_lapor()
    {
        $this->modelsistem->report();
        $this->load->view('form_lapor');
    }

    // LOGIN ADMIN PETUGAS
    public function login_admin(){
        
        $data['title'] = "Login";
        $this->load->view('login_admin', $data);
    }

    public function aksi_login_admin() {
		$usernames = $this->input->post('username');
		$passwords = $this->input->post('password');
		$where = array(
			'username' => $usernames,
			'password' => $passwords
		);
		$cek = $this->modelsistem->cek_loginn($where)->num_rows();
		
		if ($cek>0) {
			$role = $this->modelsistem->cek_loginn($where)->row(0)->level;
			if ($role == 'admin' || $role == 'petugas') {
				$rule = $this->modelsistem->cek_loginn($where)->row(0)->level;
				$nama_petugas = $this->modelsistem->cek_loginn($where)->row(0)->nama_petugas;
				$data_session = array(
                    'nama_petugas' => $nama_petugas,
                    'username' => $usernames,
                    'level' => $rule,
                    'status' => 'login'
				);
				$this->session->set_userdata($data_session);
				if ($this->session->userdata('status')=='login') {
					header("Location:".site_url()."/homepage/home_admin");
				} else {
					header("Location:".site_url()."/homepage/home_user");
				}
			} else {
				$nama = $this->modelsistem->cek_loginn($where)->row(0)->nama;
				// $nik = $this->modelsistem->cek_loginn($where)->row(0)->nik;
				$data_session = array(
					'username' => $usernames,
					'status' => 'login',
					'nama_petugas' => $nama,
					// 'nik' => $nik
				);
				$this->session->set_userdata($data_session);
				if ($this->session->userdata('status')=='login') {
					header("Location:".site_url()."/homepage/login_admin");
				} else {
					echo 'gagal login';
				}
			}
		} else {
			header("Location:".base_url()."");
		}
	}

    

    // PUBLIC FUNCTION ADMIN
    public function home_admin()
    {
        $data['title'] = "Pengaduan Masyarakat";
        $this->load->view('dashboard_admin',$data);
    }
    

    // LOGOUT
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('homepage/beranda'));
    }

    // REGISTER
    public function regis()
    {
        $data['title'] = "Register";
        $data['model_user'] = $this->modelsistem->view_user();
        // $data[''] = $this->modelsistem->count_user();
        $this->load->view('register', $data);
    }

    // MODEL
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelsistem');
        $this->load->model('pengaduanmodel'); // Load PetugasModel ke controller ini
    } 

    // CRUD DATA PENGADUAN
    
    public function data()
    {
        $this->modelsistem->edit_pengaduan();
        $this->load->view('edit_pengaduan');
    }
    public function edit_pengaduan($id_pengaduan){
        $where=array('id_pengaduan' => $id_pengaduan);
        $data['pengaduan'] = $this->modelsistem->edit_data('pengaduan',$where)->result();
        $this->load->view('edit_pengaduan',$data);
    }
    public function editPengaduan()
        {
            $this->modelsistem->edit_pengaduan();
        }

    public function hapuss($id_pengaduan)
    {
        $where = array('id_pengaduan' => $id_pengaduan);
        $this->modelsistem->hapus_data($where, 'pengaduan');
        redirect('Homepage/jml_pengaduan');
    }



    // CETAK PDF EXCEL PETUGAS
    public function pdf_preview_petugas(){
        $data['model'] = $this->modelsistem->view();
        $this->load->view('v_pdf_preview_petugas', $data);
    }
    public function cetak_pdf_petugas(){
        ob_start();
        $data['model'] = $this->modelsistem->view();
        $this->load->view('v_pdf_preview_petugas',$data);
        $html = ob_get_contents();
                ob_end_clean();
        
        require './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
        $pdf->WriteHtml($html);
        $pdf->Output('Data_Petugas_'.date('d-m-Y').'.pdf','D');
    }
    public function cetak_xls_petugas(){
        header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attacment; filename="Data Petugas.xls"');
        //set nama file excel nya
        header('Cache-Control: max-age=0');

        $data['model'] = $this->modelsistem->view();
        $this->load->view('v_pdf_preview_petugas',$data);
    }

    // CETAK PDF EXCEL user
    public function pdf_preview_user(){
        $data['model_user'] = $this->modelsistem->view_user();
        $this->load->view('v_pdf_preview_user', $data);
    }
    public function cetak_pdf_user(){
        ob_start();
        $data['model_user'] = $this->modelsistem->view_user();
        $this->load->view('v_pdf_preview_user',$data);
        $html = ob_get_contents();
                ob_end_clean();
        
        require './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
        $pdf->WriteHtml($html);
        $pdf->Output('Data_User_'.date('d-m-Y').'.pdf','D');
    }
    public function cetak_xls_user(){
        header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attacment; filename="Data User.xls"');
        //set nama file excel nya
        header('Cache-Control: max-age=0');

        $data['model_user'] = $this->modelsistem->view_user();
        $this->load->view('v_pdf_preview_user',$data);
    }

    // CETAK PDF EXCEL ADUAN
    public function pdf_preview_aduan(){
        $data['model_pengaduan'] = $this->modelsistem->view_pengaduan();
        $this->load->view('pengaduan/v_pdf_preview_pengaduan', $data);
    }
    public function cetak_pdf_aduan(){
        ob_start();
        $data['model_pengaduan'] = $this->modelsistem->view_pengaduan();
        $this->load->view('pengaduan/v_pdf_preview_pengaduan',$data);
        $html = ob_get_contents();
                ob_end_clean();
        
        require './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
        $pdf->WriteHtml($html);
        $pdf->Output('Data_Aduan_'.date('d-m-Y').'.pdf','D');
    }
    public function cetak_xls_aduan(){
        header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attacment; filename="Data Aduan.xls"');
        //set nama file excel nya
        header('Cache-Control: max-age=0');

        $data['model_pengaduan'] = $this->modelsistem->view_pengaduan();
        $this->load->view('pengaduan/v_pdf_preview_pengaduan',$data);
    }


    
    // CRUD AJAX PETUGAS
    
    public function index(){
		$data['model'] = $this->modelsistem->view();
		$this->load->view('data_petugas/index_petugas', $data);
    }

	public function simpan(){
		if($this->modelsistem->validation("save")){ // Jika validasi sukses atau hasil validasi adalah true
			$this->modelsistem->save(); // Panggil fungsi save() yang ada di modelsistem.php

			// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
			$html = $this->load->view('data_petugas/view', array('model'=>$this->modelsistem->view()), true);

			$callback = array(
				'status'=>'sukses',
				'pesan'=>'Data berhasil disimpan',
				'html'=>$html
			);
		}else{
			$callback = array(
				'status'=>'gagal',
				'pesan'=>validation_errors()
			);
		}

		echo json_encode($callback);
	}

	public function ubah($id_petugas){
		if($this->modelsistem->validation("update")){ // Jika validasi sukses atau hasil validasi adalah true
			$this->modelsistem->edit($id_petugas); // Panggil fungsi edit() yang ada di PetugasModel.php

			// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
			$html = $this->load->view('data_petugas/view', array('model'=>$this->modelsistem->view()), true);

			$callback = array(
				'status'=>'sukses',
				'pesan'=>'Data berhasil diubah',
				'html'=>$html
			);
		}else{
			$callback = array(
				'status'=>'gagal',
				'pesan'=>validation_errors()
			);
		}

		echo json_encode($callback);
	}

	public function hapus($id_petugas){
		$this->modelsistem->delete($id_petugas); // Panggil fungsi delete() yang ada di PetugasModel.php

		// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
		$html = $this->load->view('data_petugas/view', array('model'=>$this->modelsistem->view()), true);
		
		$callback = array(
			'status'=>'sukses',
			'pesan'=>'Data berhasil dihapus',
			'html'=>$html
		);

		echo json_encode($callback);
    }
    

    // CRUD AJAX USER
    public function index_user(){
		$data['model_user'] = $this->modelsistem->view_user();
		$this->load->view('data_user/index_user', $data);
    }

	public function ubah_user($id_user){
		if($this->modelsistem->validationn("update")){ // Jika validasi sukses atau hasil validasi adalah true
			$this->modelsistem->editt($id_user); // Panggil fungsi edit() yang ada di PetugasModel.php

			// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
			$html = $this->load->view('data_user/view', array('model_user'=>$this->modelsistem->view_user()), true);

			$callback = array(
				'status'=>'sukses',
				'pesan'=>'Data berhasil diubah',
				'html'=>$html
			);
		}else{
			$callback = array(
				'status'=>'gagal',
				'pesan'=>validation_errors()
			);
		}

		echo json_encode($callback);
	}

	public function hapus_user($id_user){
		$this->modelsistem->deletee($id_user); // Panggil fungsi delete() yang ada di PetugasModel.php

		// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
		$html = $this->load->view('data_user/view', array('model_user'=>$this->modelsistem->view_user()), true);
		
		$callback = array(
			'status'=>'sukses',
			'pesan'=>'Data berhasil dihapus',
			'html'=>$html
		);

		echo json_encode($callback);
    }

    // CRUD AJAX PENGADUAN
    public function index_pengaduan(){
		$data['model_pengaduan'] = $this->modelsistem->view_pengaduan();
		$this->load->view('pengaduan/index_pengaduan', $data);
    }


    public function hapus_pengaduan($id_pengaduan){
		$this->modelsistem->delete_pengaduan($id_pengaduan); // Panggil fungsi delete() yang ada di PetugasModel.php

		// Load ulang view.php agar data yang baru bisa muncul di tabel pada view.php
		$html = $this->load->view('pengaduan/index_pengaduan', array('model_pengaduan'=>$this->pengaduanmodel->view()), true);
		
		$callback = array(
			'status'=>'sukses',
			'pesan'=>'Data berhasil dihapus',
			'html'=>$html
		);

		echo json_encode($callback);
    }
    

}

?>