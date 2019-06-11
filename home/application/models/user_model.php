<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function getPendapatan()
	{
			$this->db->select_sum('harga_total');
			$result = $this->db->get('tb_transaksi')->row();
			return $result->harga_total;
	}

	public function EditProfile()
	{
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();


		$foto_user = $_FILES['foto_user']['name'];

			if($foto_user){

				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']		 	 = '2048';
				$config['upload_path']	 = './assets/images/user_images/';
				$this->load->library('upload',$config);

				if($this->upload->do_upload('foto_user')){
					$old_image = $data['user']['foto_user'];

					if($old_image != 'default_male.jpg' && $old_image != 'default_female.jpg'){

						unlink(FCPATH . 'assets/images/user_images/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('foto_user',$new_image);

				}else{

					echo $this->upload->display_errors();
				}

			}

			$nama_user 		= $this->input->post('nama_user',true);
			$alamat_user 	= $this->input->post('alamat_user',true);
			$no_telepon 	= $this->input->post('no_telepon',true);
			$email_user 	= $this->input->post('email_user',true);

			$this->db->set('nama_user',$nama_user);
			$this->db->set('alamat_user',$alamat_user);
			$this->db->set('no_telepon',$no_telepon);
			$this->db->where('email_user',$email_user);
			$this->db->update('tb_user');
	}

	public function ChangePassword()
	{
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();

			$password_lama = $this->input->post('password_lama',true);
			$password_baru = $this->input->post('password_baru',true);
			if(!password_verify($password_lama, $data['user']['password_user'])){

				$this->session->set_flashdata('flash','<div class="alert bg-red alert-dismissible" role="alert"> Password Lama <strong> Tidak cocok! </strong>
             		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                            </div>');
				redirect('user/change_password');

			}else{

				if($password_lama == $password_baru ){

					$this->session->set_flashdata('flash','<div class="alert bg-red alert-dismissible" role="alert"> Anda belum <strong> Update Password! </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                            </div>');
					redirect('user/change_password');
				}else{

					$password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

					$this->db->set('password_user',$password_hash);
					$this->db->where('email_user',$this->session->userdata('email_user'));
					$this->db->update('tb_user');

				}
			}
	}

	public function getAllTiket()
		{
			$this->db->join('tb_maskapai','tb_tiket.id_maskapai = tb_maskapai.id_maskapai');
			return $this->db->get('tb_tiket')->result_array();

		}

		public function getTiketById($id_tiket)

		{
			return $this->db->get_where('tb_tiket',['id_tiket' => $id_tiket])->row_array();
		}

		public function getMaskapaiById()
		{
			$id_maskapai = $this->input->post('id_maskapai');
			return $this->db->get_where('tb_maskapai',['id_maskapai' => $id_maskapai])->row_array();

		}

		public function getTestimoniById()
		{
			$id_testimoni = $this->input->post('id_testimoni');
			return $this->db->get_where('tb_testimoni',['id_testimoni' => $id_testimoni])->row_array();

		}

		public function getAllMaskapai()
		{

			return $this->db->get('tb_maskapai')->result_array();

		}

		public function EditMaskapai()
		{
			$uploaded_image = $_FILES['gambar_maskapai']['name'];
			$id_maskapai = $this->input->post('id_maskapai',true);
			$maskapai 	 = $this->input->post('maskapai',true);

			$sql = $this->db->get('tb_maskapai',['id_maskapai' => $id_maskapai])->row_array();
			$fotolama = $sql['gambar_maskapai'];

			if ($uploaded_image) {

				$new_name												= time().$_FILES['gambar_maskapai']['name'];
				$config['file_name']						= $new_name;
				$config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);
                unlink(FCPATH . 'assets/images/' . $fotolama);

                 if ($this->upload->do_upload('gambar_maskapai'))
                {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('gambar_maskapai',$new_image);
                }
                else
                {
                        echo $this->upload->display_errors();
                }

			}

			$this->db->set('maskapai',$maskapai);
			$this->db->where('id_maskapai',$id_maskapai);
			$this->db->update('tb_maskapai');

		}

		public function hapusMaskapai($id_maskapai)
		{
		$sql = $this->db->get_where('tb_maskapai',['id_maskapai' => $id_maskapai])->row_array();
			$fotolama = $sql['gambar_maskapai'];
			unlink(FCPATH . 'assets/images/' . $fotolama);
			$this->db->delete('tb_maskapai',['id_maskapai' => $id_maskapai]);

		}

		public function tambah_maskapai()
		{

			$uploaded_image = $_FILES['gambar_maskapai']['name'];

			if ($uploaded_image) {

				$new_name												= time().$_FILES['gambar_maskapai']['name'];
				$config['file_name']						= $new_name;
				$config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);

                 if ($this->upload->do_upload('gambar_maskapai'))
                {
                        $new_image = $this->upload->data('file_name');
                }
                else
                {
                        echo $this->upload->display_errors();
                }

			}

			$data = [
					"maskapai" 		  	=> $this->input->post('maskapai',true),
					"gambar_maskapai" => $new_image,

			];

			$this->db->insert('tb_maskapai',$data);

		}

		public function getAutoAjax()
		{
			$maskapai = $this->input->post('maskapai');
			return $this->db->get_where('tb_maskapai',['maskapai' => $maskapai ])->row_array();

			}

		public function tambah_tiket()
		{

			$data = [
				"id_maskapai" 					=> $this->input->post('id_maskapai',true),
				"maskapai" 							=> $this->input->post('maskapai',true),
				"jenis_penerbangan" 		=> $this->input->post('jenis_penerbangan',true),
				"nomor_penerbangan" 		=> $this->input->post('nomor_penerbangan',true),
				"tiket_berangkat" 			=> $this->input->post('tiket_berangkat',true),
				"tiket_tujuan" 					=> $this->input->post('tiket_tujuan',true),
				"tanggal_berangkat" 		=> $this->input->post('tanggal_berangkat',true),
				"tanggal_datang" 				=> $this->input->post('tanggal_datang',true),
				"waktu_keberangkatan" 	=> $this->input->post('waktu_keberangkatan',true),
				"waktu_datang" 					=> $this->input->post('waktu_datang',true),
				"harga_tiket" 					=> $this->input->post('harga_tiket',true),
				"kelas" 								=> $this->input->post('kelas',true),
				"stok_tiket" 						=> $this->input->post('stok_tiket',true),


			];

			$this->db->insert('tb_tiket',$data);

		}

		public function hapusTiket($id_tiket)
		{
				$this->db->delete('tb_tiket',['id_tiket' => $id_tiket]);

					}

		public function editTiket($id_tiket)
		{
			$data = [

				"id_maskapai" 					=> $this->input->post('id_maskapai',true),
				"maskapai" 							=> $this->input->post('maskapai',true),
				"jenis_penerbangan" 		=> $this->input->post('jenis_penerbangan',true),
				"nomor_penerbangan" 		=> $this->input->post('nomor_penerbangan',true),
				"tiket_berangkat" 			=> $this->input->post('tiket_berangkat',true),
				"tiket_tujuan" 					=> $this->input->post('tiket_tujuan',true),
				"tanggal_berangkat" 		=> $this->input->post('tanggal_berangkat',true),
				"tanggal_datang" 				=> $this->input->post('tanggal_datang',true),
				"waktu_keberangkatan" 	=> $this->input->post('waktu_keberangkatan',true),
				"waktu_datang" 					=> $this->input->post('waktu_datang',true),
				"harga_tiket" 					=> $this->input->post('harga_tiket',true),
				"kelas" 								=> $this->input->post('kelas',true),
				"stok_tiket" 						=> $this->input->post('stok_tiket',true),
			];

			$this->db->where('id_tiket', $this->input->post('id_tiket'));
			$this->db->update('tb_tiket',$data);
		}

		public function getAllTransaksi()
		{
			$this->db->join('tb_maskapai','tb_tiket.id_maskapai = tb_maskapai.id_maskapai');
			$this->db->join('tb_transaksi','tb_tiket.id_tiket = tb_transaksi.id_tiket');
			$this->db->where('status',1);
			return $this->db->get('tb_tiket')->result_array();
		}

		public function getPemesananTiket()
		{
			$this->db->join('tb_maskapai','tb_tiket.id_maskapai = tb_maskapai.id_maskapai');
			$this->db->join('tb_transaksi','tb_tiket.id_tiket = tb_transaksi.id_tiket');
			$this->db->where('status',0);
			return $this->db->get('tb_tiket')->result_array();
		}

		public function getAllMember()
		{
			return $this->db->get_where('tb_user',['role_id' => 2])->result_array();
		}

		public function getAllAdmin()
		{
			return $this->db->get_where('tb_user',['role_id' => 1])->result_array();
		}

		public function tambah_admin()
		{
			$gender = $this->input->post('gender',true);
			if($gender == 'Male')
			{
				$foto_user = 'default_male.jpg';
			}else
			{
				$foto_user = 'default_female.jpg';
			}
			$data = [
				"nama_user" 		=> $this->input->post('nama_user',true),
				"foto_user"			=> $foto_user,
				"email_user"		=> $this->input->post('email_user',true),
				"alamat_user" 	=> $this->input->post('alamat_user',true),
				"no_telepon"		=> $this->input->post('no_telepon',true),
				"gender" 				=> $gender,
				"password_user" => password_hash($this->input->post('password_user'), PASSWORD_DEFAULT),
				"role_id"				=> 1,
				"date_created"	=> time()



			];

			$this->db->insert('tb_user',$data);
		}

		public function ConfirmValidTransaksi($id_transaksi)
		{
			$status = 1;
			$this->db->set('status',$status);
			$this->db->where('id_transaksi', $id_transaksi);
			$this->db->update('tb_transaksi');

		}

		public function InvalidTransaksi($id_transaksi)
		{
			$sql = $this->db->get_where('tb_transaksi',['id_transaksi' => $id_transaksi])->row_array();
			$fotolama = $sql['bukti_transfer'];

			unlink(FCPATH . 'assets/images/bukti_pembayaran/' . $fotolama);

			$idnya 				= $sql['id_tiket'];
			$jumlah_beli  = $sql['jumlah_pembelian'];
			$ambil 				= $this->db->get_where('tb_tiket',['id_tiket' => $idnya])->row_array();
			$stoklama 		= $ambil['stok_tiket'];

			$stokbaru = $stoklama + $jumlah_beli ;
			$this->db->set('stok_tiket',$stokbaru);
			$this->db->where('id_tiket',$idnya);
			$this->db->update('tb_tiket');

			$this->db->delete('tb_transaksi', ['id_transaksi' => $id_transaksi]);

		}

		public function getAllArtikel()
		{
			return $this->db->get('tb_artikel')->result_array();

		}

		public function TambahArtikel()
		{
			$uploaded_image = time().$_FILES['foto']['name'];

			if ($uploaded_image) {

				$new_name												= time().$_FILES['foto']['name'];
				$config['file_name']						= $new_name;
				$config['upload_path']          = './assets/images/artikel/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);

                 if ($this->upload->do_upload('foto'))
                {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('foto',$new_image);
                }
                else
                {
                        echo $this->upload->display_errors();
                }

			}


			$data = [

				"judul" 		=> $this->input->post('judul',true),
				"tanggal"		=> $this->input->post('tanggal',true),
				"artikel"		=> $this->input->post('artikel',true),
				"foto"			=> $new_image,
				"status"		=> $this->input->post('status',true),
				"username"	=> $this->input->post('username',true)



			];

			$this->db->insert('tb_artikel',$data);
		}

		public function HapusArtikel($id_artikel)
		{
			$sql = $this->db->get_where('tb_artikel',['id_artikel' => $id_artikel])->row_array();
			$fotolama = $sql['foto'];
			unlink(FCPATH . 'assets/images/artikel/' . $fotolama);

			$this->db->delete('tb_artikel',['id_artikel' => $id_artikel]);

		}

		public function getArtikelById($id_artikel)

		{
			return $this->db->get_where('tb_artikel',['id_artikel' => $id_artikel])->row_array();
		}

		public function EditArtikel($id_artikel)
		{
			$uploaded_image = $_FILES['foto']['name'];
			$sql = $this->db->get_where('tb_artikel',['id_artikel' => $id_artikel])->row_array();
			$fotolama = $sql['foto'];

			if ($uploaded_image) {

				$new_name												= time().$_FILES['foto']['name'];
				$config['file_name']						= $new_name;
				$config['upload_path']          = './assets/images/artikel/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);
                unlink(FCPATH . 'assets/images/' . $fotolama);

                 if ($this->upload->do_upload('foto'))
                {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('foto',$new_image);
                }
                else
                {
                        echo $this->upload->display_errors();
                }

			}



				$judul		= $this->input->post('judul',true);
				$tanggal	= $this->input->post('tanggal',true);
				$artikel	= $this->input->post('artikel',true);
				$status		= $this->input->post('status',true);
				$username	= $this->input->post('username',true);


			$this->db->set('judul',$judul);
			$this->db->set('tanggal',$tanggal);
			$this->db->set('artikel',$artikel);
			$this->db->set('status',$status);
			$this->db->set('username',$username);
			$this->db->where('id_artikel', $this->input->post('id_artikel'));
			$this->db->update('tb_artikel');
		}

		public function getAllInbox()
		{
			return $this->db->get('tb_inbox')->result_array();
		}

		public function GetTransaksiUser()
		{
			 $session = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
			 $id_user = $session['id_user'];

			$this->db->join('tb_transaksi','tb_tiket.id_tiket = tb_transaksi.id_tiket');
			$this->db->join('tb_maskapai','tb_tiket.id_maskapai = tb_maskapai.id_maskapai');
			$this->db->where('status',1);
			$this->db->where('id_user',$id_user);
			$this->db->order_by('id_transaksi','DESC');
			return $this->db->get('tb_tiket')->result_array();

		}


	public function getTestimonial()
	{
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$this->db->where('email_user',$this->session->userdata('email_user'));
		return $this->db->get('tb_testimoni')->result_array();
	}

	public function TambahTestimoni()
	{
		$testimoni 	= $this->input->post('testimoni',true);
		$nama_user 	= $this->input->post('nama_user',true);
		$email_user = $this->input->post('email_user',true);

		$data =
		[

			'testimoni' 	=> $testimoni,
			'nama_user'		=> $nama_user,
			'email_user'	=> $email_user

		];

		$this->db->insert('tb_testimoni',$data);
	}

	public function HapusTestimoni($id_testimoni)
	{
		$this->db->delete('tb_testimoni',['id_testimoni' => $id_testimoni]);
	}

	public function EditTestimoni()
	{
		$id_testimoni 	= $this->input->post('id_testimoni',true);
		$testimoni 		= $this->input->post('testimoni',true);

		$this->db->set('testimoni',$testimoni);
		$this->db->where('id_testimoni',$id_testimoni);
		$this->db->update('tb_testimoni');
	}
}


?>
