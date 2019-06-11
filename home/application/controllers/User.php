<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct()
		{
			parent::__construct();
			is_logged_in();
			$this->load->model('user_model');

		}

		public function blocked()
		{
			$this->load->view('user/blocked');
		}
		public function hapus_testimoni($id_testimoni)
	{
			$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
			$this->user_model->HapusTestimoni($id_testimoni);
			$this->session->set_flashdata('flash','Dihapus!');
			redirect('user/testimoni');
	}

		public function testimoni()
		{
			$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
			$data['judul'] = "Travel Agency Home";
			$data['title'] = "Travel Agency testimoni";
			$data['testimoni'] = "Tambah Testimoni";
			$data['get_testimoni'] = $this->user_model->getTestimonial();

			$this->form_validation->set_rules('testimoni','Testimoni','required|trim');
			$this->form_validation->set_rules('email_user','Ulasan','is_unique[tb_testimoni.email_user]',[

				'is_unique' => 'Anda telah menambahkan ulasan!'

				]);

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('templates/user/header_user',$data);
				$this->load->view('templates/user/topbar',$data);
				$this->load->view('templates/user/left_sidebar');
				$this->load->view('templates/user/right_sidebar');
				$this->load->view('user/testimoni');
				$this->load->view('templates/user/footer_user');
			}else{

				$this->user_model->TambahTestimoni();
				$this->session->set_flashdata('flash','Ditambah!');
				redirect('user/testimoni');
			}


		}

		public function edit_testimoni()
	{
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$this->form_validation->set_rules('testimoni','Ulasan','required|trim');

		if($this->form_validation->run() != FALSE){

		$this->user_model->EditTestimoni();
		$this->session->set_flashdata('flash','Diupdate!');
		redirect('user/testimoni');

		}
	}

		public function profile()
		{

		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency profil";
		$data['profilnya'] = "Your Profile";
		$this->load->view('templates/user/header_user',$data);
		$this->load->view('templates/user/topbar',$data);
		$this->load->view('templates/user/left_sidebar');
		$this->load->view('templates/user/right_sidebar');
		$this->load->view('user/profile');
		$this->load->view('templates/user/footer_user');
		}

		public function edit_profile()
		{
			$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Profil";
		$data['profilnya'] = "Edit Profile";

		$this->form_validation->set_rules('nama_user','Nama','required|trim');
		$this->form_validation->set_rules('alamat_user','Alamat','required|trim');
		$this->form_validation->set_rules('no_telepon','No Telepon','required|trim|numeric');

		if($this->form_validation->run() == FALSE){

			$this->load->view('templates/user/header_user',$data);
			$this->load->view('templates/user/topbar',$data);
			$this->load->view('templates/user/left_sidebar');
			$this->load->view('templates/user/right_sidebar');
			$this->load->view('user/edit_profile');
			$this->load->view('templates/user/footer_user');
		}else{

			$this->user_model->EditProfile();

			$this->session->set_flashdata('flash','Diupdate!');
			redirect('user/profile');

		}

		}

		public function change_password()
		{
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Profil";
		$data['ubah_pass'] = "Ubah Password";

		$this->form_validation->set_rules('password_lama','Password Lama','required|trim');
		$this->form_validation->set_rules('password_baru','password Baru','required|trim|min_length[6]|matches[ulangi_password]',[

			"matches" => "Password Tidak Cocok!",
			"min_length" => "Password minimal 6 karakter"

			]);
		$this->form_validation->set_rules('ulangi_password','Ulangi Password','required|trim|min_length[6]|matches[password_baru]',[

			"matches" => "Password Tidak Cocok!",
			"min_length" => "Password minimal 6 karakter"
		]);

		if($this->form_validation->run() == FALSE){

			$this->load->view('templates/user/header_user',$data);
			$this->load->view('templates/user/topbar',$data);
			$this->load->view('templates/user/left_sidebar');
			$this->load->view('templates/user/right_sidebar');
			$this->load->view('user/change_password');
			$this->load->view('templates/user/footer_user');
		}
		else{

			$this->user_model->ChangePassword();

			$this->session->set_flashdata('flash','<div class="alert bg-green alert-dismissible" role="alert">Password<strong> Berhasil Diubah! </strong>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                            </div>');
					redirect('user/change_password');

		}

		}

		public function logout()
	{

		$this->session->unset_userdata('email_user');
		$this->session->unset_userdata('nama_user');
		$this->session->set_flashdata('message','<center><small class="form-text text-success">
			  	Berhasil Logout</small></center>');
			redirect('auth');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Dashboard";
		$data['jumlah_tiket'] = $this->user_model->getAllTiket();
		$data['jumlah_maskapai'] = $this->user_model->getAllMaskapai();
		$data['pemesanan_tiket'] = $this->user_model->getPemesananTiket();
		$data['inbox'] = $this->user_model->getAllInbox();
		$data['members'] = $this->user_model->getAllMember();
		$data['transaksi_user'] = $this->user_model->getTransaksiUser();
		$data['admin'] = $this->user_model->getAllAdmin();
		$data['pendapatan'] = $this->user_model->getPendapatan();
		$data['artikel'] = $this->user_model->getAllArtikel();

		$this->load->view('templates/user/header_user',$data);
		$this->load->view('templates/user/topbar',$data);
		$this->load->view('templates/user/left_sidebar');
		$this->load->view('templates/user/right_sidebar');
		$this->load->view('user/index',$data);
		$this->load->view('templates/user/footer_user');


	}

	public function list_tiket()
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Tiket";
		$data['tiket'] = "List Tiket Pesawat";
		$data['list_tiket']= $this->user_model->getAllTiket();
		$this->load->view('templates/user/header_user',$data);
		$this->load->view('templates/user/topbar',$data);
		$this->load->view('templates/user/left_sidebar');
		$this->load->view('templates/user/right_sidebar');
		$this->load->view('user/list_tiket');
		$this->load->view('templates/user/footer_user');


	}

	public function tambah_tiket()
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Dashboard";
		$data['tiket'] = "Tambah Data Tiket Pesawat";
		$data['get_maskapai'] = $this->user_model->getAllMaskapai();

 		$this->form_validation->set_rules('maskapai','Maskapai','required|trim');
 		$this->form_validation->set_rules('jenis_penerbangan','Jenis Penerbangan','required|trim');
		$this->form_validation->set_rules('nomor_penerbangan','Nomor Penerbangan','required|trim');
		$this->form_validation->set_rules('tiket_berangkat','Tiket Berangkat','required|trim');
		$this->form_validation->set_rules('tiket_tujuan','Tiket Tujuan','required|trim');
		$this->form_validation->set_rules('tanggal_berangkat','Tanggal Berangkat','required|trim');
		$this->form_validation->set_rules('tanggal_datang','Tanggal Datang','required|trim');
		$this->form_validation->set_rules('waktu_keberangkatan','Waktu Keberangkatan','required|trim');
		$this->form_validation->set_rules('waktu_datang','Waktu Datang','required|trim');
		$this->form_validation->set_rules('harga_tiket','Harga Tiket','required|trim|numeric');
		$this->form_validation->set_rules('kelas','Kelas','required|trim');
		$this->form_validation->set_rules('stok_tiket','Stok Tiket','required|trim|numeric');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/user/header_user',$data);
			$this->load->view('templates/user/topbar',$data);
			$this->load->view('templates/user/left_sidebar');
			$this->load->view('templates/user/right_sidebar');
			$this->load->view('user/tambah_tiket',$data);
			$this->load->view('templates/user/footer_user');
		}
		else
		{
			$this->user_model->tambah_tiket();
			$this->session->set_flashdata('flash','Ditambah!');
			redirect('user/list_tiket');
		}



	}

	public function hapus_tiket($id_tiket)
	{
			if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
			$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
			$this->user_model->hapusTiket($id_tiket);
			$this->session->set_flashdata('flash','Dihapus!');
			redirect('user/list_tiket');

		}

	public function edit_tiket($id_tiket)
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Dashboard";
		$data['tiket'] = "Edit Tiket Pesawat";
		$data['edit_tiket'] = $this->user_model->getTiketById($id_tiket);
		$data['get_maskapai'] = $this->user_model->getAllMaskapai();

		$this->form_validation->set_rules('maskapai','Maskapai','required|trim');
 		$this->form_validation->set_rules('jenis_penerbangan','Jenis Penerbangan','required|trim');
		$this->form_validation->set_rules('nomor_penerbangan','Nomor Penerbangan','required|trim');
		$this->form_validation->set_rules('tiket_berangkat','Tiket Berangkat','required|trim');
		$this->form_validation->set_rules('tiket_tujuan','Tiket Tujuan','required|trim');
		$this->form_validation->set_rules('tanggal_berangkat','Tanggal Berangkat','required|trim');
		$this->form_validation->set_rules('tanggal_datang','Tanggal Datang','required|trim');
		$this->form_validation->set_rules('waktu_keberangkatan','Waktu Keberangkatan','required|trim');
		$this->form_validation->set_rules('waktu_datang','Waktu Datang','required|trim');
		$this->form_validation->set_rules('harga_tiket','Harga Tiket','required|trim|numeric');
		$this->form_validation->set_rules('kelas','Kelas','required|trim');
		$this->form_validation->set_rules('stok_tiket','Stok Tiket','required|trim|numeric');

		 if ($this->form_validation->run() == FALSE)

                {

			$this->load->view('templates/user/header_user',$data);
			$this->load->view('templates/user/topbar',$data);
			$this->load->view('templates/user/left_sidebar');
			$this->load->view('templates/user/right_sidebar');
			$this->load->view('user/edit_tiket',$data);
			$this->load->view('templates/user/footer_user');


			}
				else {

					$this->user_model->editTiket($id_tiket);
					$this->session->set_flashdata('flash','Diedit!');
					redirect('user/list_tiket');

				}

	}

	public function ajax()
	{
		$maskapai = $this->input->post('maskapai');
		echo json_encode($this->user_model->getAutoAjax($maskapai));

	}

	public function list_maskapai()
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Maskapai";
		$data['maskapai'] = "List Maskapai";
		$data['list_maskapai']= $this->user_model->getAllMaskapai();


		$this->form_validation->set_rules('maskapai','Maskapai','required|trim');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/user/header_user',$data);
			$this->load->view('templates/user/topbar',$data);
			$this->load->view('templates/user/left_sidebar');
			$this->load->view('templates/user/right_sidebar');
			$this->load->view('user/list_maskapai');
			$this->load->view('templates/user/footer_user');
		}
		else
		{
			$this->user_model->tambah_maskapai();
			$this->session->set_flashdata('flash','Ditambah!');
			redirect('user/list_maskapai');
		}


	}

	public function edit_maskapai()
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$this->form_validation->set_rules('maskapai','Maskapai','required|trim');

		if($this->form_validation->run() != FALSE){

		$this->user_model->EditMaskapai();
		$this->session->set_flashdata('flash','Diupdate!');
		redirect('user/list_maskapai');

		}
	}

	public function hapus_maskapai($id_maskapai)
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
			$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
			$this->user_model->hapusMaskapai($id_maskapai);
			$this->session->set_flashdata('flash','Dihapus!');
			redirect('user/list_maskapai');
	}

	public function getMaskapai()
	{
		echo json_encode($this->user_model->getMaskapaiById($_POST['id_maskapai']));
	}
	public function getUlasan()
	{
		echo json_encode($this->user_model->getTestimoniById($_POST['id_testimoni']));
	}

	public function transaksi()
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Riwayat Transaksi";
		$data['transaksi'] = "Riwayat Transaksi";
		$data['list_transaksi']= $this->user_model->getAllTransaksi();
		$this->load->view('templates/user/header_user',$data);
		$this->load->view('templates/user/topbar',$data);
		$this->load->view('templates/user/left_sidebar');
		$this->load->view('templates/user/right_sidebar');
		$this->load->view('user/transaksi');
		$this->load->view('templates/user/footer_user');
	}

	public function pemesanan_tiket()
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Pemesanan Tiket ";
		$data['pesan_tiket'] = "Pemesanan Tiket";
		$data['pemesanan_tiket']= $this->user_model->getPemesananTiket();
		$this->load->view('templates/user/header_user',$data);
		$this->load->view('templates/user/topbar',$data);
		$this->load->view('templates/user/left_sidebar');
		$this->load->view('templates/user/right_sidebar');
		$this->load->view('user/pemesanan_tiket');
		$this->load->view('templates/user/footer_user');
	}

	public function invalid_transaksi($id_transaksi)
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}

		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();

		$this->user_model->InvalidTransaksi($id_transaksi);

		$this->session->set_flashdata('flash','<div class="alert bg-green alert-dismissible" role="alert"> Transaksi <strong> Berhasil Dihapus </strong>
             		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                            </div>');
			redirect('user/pemesanan_tiket');

	}

	public function valid_transaksi($id_transaksi)
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$this->user_model->ConfirmValidTransaksi($id_transaksi);

		$this->session->set_flashdata('flash','<div class="alert bg-green alert-dismissible" role="alert"> Transaksi <strong> Berhasil Diverifikasi </strong>
             		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                            </div>');
			redirect('user/transaksi');
	}

	public function member_list()
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Member ";
		$data['member_list'] = "List Member";
		$data['member']= $this->user_model->getAllMember();
		$this->load->view('templates/user/header_user',$data);
		$this->load->view('templates/user/topbar',$data);
		$this->load->view('templates/user/left_sidebar');
		$this->load->view('templates/user/right_sidebar');
		$this->load->view('user/member_list');
		$this->load->view('templates/user/footer_user');
	}

	public function admin_list()
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency user ";
		$data['admin_list'] = "List Admin";
		$data['admin']= $this->user_model->getAllAdmin();
		$this->load->view('templates/user/header_user',$data);
		$this->load->view('templates/user/topbar',$data);
		$this->load->view('templates/user/left_sidebar');
		$this->load->view('templates/user/right_sidebar');
		$this->load->view('user/admin_list');
		$this->load->view('templates/user/footer_user');
	}

	public function tambah_admin()
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Dashboard";
		$data['admin'] = "Tambah Admin";

 		$this->form_validation->set_rules('nama_user','Nama user','required|trim');
 		$this->form_validation->set_rules('email_user','Email','required|trim|valid_email|is_unique[tb_user.email_user]',[

 			'is_unique' => 'Email telah didaftarkan !'

 				]);
		$this->form_validation->set_rules('alamat_user','Alamat','required|trim');
		$this->form_validation->set_rules('no_telepon','No Telepon','required|trim|numeric');
		$this->form_validation->set_rules('gender','Gender','required|trim');
		$this->form_validation->set_rules('password_user','Password','required|trim|min_length[6]|matches[password_repeat]',[

			'min_length' => 'Password minimal 6 karakter',
			'matches'	 => 'Password tidak cocok !'

			]);
		$this->form_validation->set_rules('password_repeat','Password','required|trim');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/user/header_user',$data);
			$this->load->view('templates/user/topbar',$data);
			$this->load->view('templates/user/left_sidebar');
			$this->load->view('templates/user/right_sidebar');
			$this->load->view('user/tambah_admin',$data);
			$this->load->view('templates/user/footer_user');
		}
		else
		{
			$this->user_model->tambah_admin();
			$this->session->set_flashdata('flash','Ditambah!');
			redirect('user/user_list');
		}

	}

	public function list_artikel()
	{
			if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Dashboard";
		$data['list_artikel'] = "List Artikel";
		$data['artikel'] = $this->user_model->getAllArtikel();

			$this->load->view('templates/user/header_user',$data);
			$this->load->view('templates/user/topbar',$data);
			$this->load->view('templates/user/left_sidebar');
			$this->load->view('templates/user/right_sidebar');
			$this->load->view('user/list_artikel',$data);
			$this->load->view('templates/user/footer_user');


	}

	public function tambah_artikel()
	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Dashboard";
		$data['tambah_artikel'] = "Tambah Artikel";

		$this->form_validation->set_rules('judul','Judul','required|trim');
		$this->form_validation->set_rules('tanggal','Tanggal','required');
		$this->form_validation->set_rules('artikel','Artikel','required|trim');
		$this->form_validation->set_rules('status','Status','required');

		if($this->form_validation->run() == FALSE){

			$this->load->view('templates/user/header_user',$data);
			$this->load->view('templates/user/topbar',$data);
			$this->load->view('templates/user/left_sidebar');
			$this->load->view('templates/user/right_sidebar');
			$this->load->view('user/tambah_artikel',$data);
			$this->load->view('templates/user/footer_user');
		}
		else{

			$this->user_model->TambahArtikel();
			$this->session->set_flashdata('flash','Ditambah!');
			redirect('user/list_artikel');
		}
	}

	public function hapus_artikel($id_artikel)

	{
		if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
			$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
			$this->user_model->HapusArtikel($id_artikel);
			$this->session->set_flashdata('flash','Dihapus!');
			redirect('user/list_artikel');
	}

	public function edit_artikel($id_artikel)
	{
			if($this->session->userdata('role_id') != '1'){

			redirect('user/blocked');
		}
			$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
			$data['judul'] = "Travel Agency Home";
			$data['title'] = "Travel Agency Dashboard";
			$data['edit_artikel'] = "Edit Artikel";
			$data['get_artikel'] = $this->user_model->getArtikelById($id_artikel);

			$this->form_validation->set_rules('judul','Judul','required|trim');
			$this->form_validation->set_rules('tanggal','Tanggal','required|trim');
			$this->form_validation->set_rules('artikel','Artikel','required|trim');
			$this->form_validation->set_rules('status','Status','required|trim');

			if($this->form_validation->run() == FALSE){

			$this->load->view('templates/user/header_user',$data);
			$this->load->view('templates/user/topbar',$data);
			$this->load->view('templates/user/left_sidebar');
			$this->load->view('templates/user/right_sidebar');
			$this->load->view('user/edit_artikel',$data);
			$this->load->view('templates/user/footer_user');

			}
			else{

				$this->user_model->EditArtikel($id_artikel);
				$this->session->set_flashdata('flash','Diupdate!');
				redirect('user/list_artikel');


			}
	}

	public function transaksi_user()
	{
			$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
			$data['judul'] = "Travel Agency Home";
			$data['title'] = "Travel Agency Dashboard";
			$data['riwayat_transaksi'] = "Riwayat Transaksi";
			$data['transaksi_user'] = $this->user_model->GetTransaksiUser();

			$this->load->view('templates/user/header_user',$data);
			$this->load->view('templates/user/topbar',$data);
			$this->load->view('templates/user/left_sidebar');
			$this->load->view('templates/user/right_sidebar');
			$this->load->view('user/transaksi_user',$data);
			$this->load->view('templates/user/footer_user');
	}

	public function tiket_user()
	{
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['tiket_user'] = $this->user_model->GetTransaksiUser();
		$data['judul'] = "Travel Agency Home";
		$data['title'] = "Travel Agency Dashboard";
		$data['list_tiket'] = "List Tiket";

		$this->load->view('templates/user/header_user',$data);
		$this->load->view('templates/user/topbar',$data);
		$this->load->view('templates/user/left_sidebar');
		$this->load->view('templates/user/right_sidebar');
		$this->load->view('user/tiket_user',$data);
		$this->load->view('templates/user/footer_user');
	}


}



?>
