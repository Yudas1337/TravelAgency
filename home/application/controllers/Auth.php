<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('email_user') && $this->session->userdata('nama_user')) {
			redirect('user');
		}
	}


	public function index()
	{

		$this->form_validation->set_rules('email_user','Email','trim|required|valid_email',
			[
				'required' 		=> 'Field Email harus Diisi',
				'valid_email' 	=> 'Email yang dimasukkan tidak valid!'
			]);
		$this->form_validation->set_rules('password_user','Password','trim|required',[

				'required' => 'Field Password Harus Diisi'

			]);

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('auth/index');
		}else

		{
			$this->_login();


		}
	}

	private function _login()
	{
		$email_user 	= $this->input->post('email_user',true);
		$password_user 	= $this->input->post('password_user',true);

		$login = $this->db->get_where('tb_user',['email_user' => $email_user])->row_array();

		if ($login){

			if (password_verify($password_user, $login['password_user'])) {

					$data = [

							'email_user' => $login['email_user'],
							'nama_user'  => $login['nama_user'],
							'role_id'	 => $login['role_id']
					];
					$this->session->set_userdata($data);
					redirect('user');


				}
				else{

				$this->session->set_flashdata('message','<center><small class="form-text text-danger">
			  	Email Or Password Does Not Match !</small></center>');
				redirect('auth/index');
				}

		}
		else{
			$this->session->set_flashdata('message','<center><small class="form-text text-danger">
			  Email or Password Invalid !</small></center>');
			redirect('auth/index');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('nama_user','Nama User','required|trim');
		$this->form_validation->set_rules('email_user','Email User','required|trim|valid_email|is_unique[tb_user.email_user]',[

			'is_unique' => 'Email telah didaftarkan !'
		]);
		$this->form_validation->set_rules('alamat_user','Alamat User','required|trim');
		$this->form_validation->set_rules('no_telepon','No Telepon','required|trim|numeric');
		$this->form_validation->set_rules('password_user','Password','required|trim|min_length[6]|matches[password_repeat]',[

			'min_length' => 'Password minimal 6 karakter',
			'matches'	 => 'Password tidak cocok !'

			]);
		$this->form_validation->set_rules('password_repeat','Password','required|trim');

		if($this->form_validation->run() == FALSE){

			$this->load->view('auth/register');
		}
		else{

			$gender = $this->input->post('gender',true);

			if($this->input->post('gender') == 'Male')
			{
				$foto_user = 'default_male.jpg';
			}
			else
			{
				$foto_user = 'default_female.jpg';
			}

			$data = [

			'nama_user' 	=> $this->input->post('nama_user',true),
			'foto_user'		=> $foto_user,
			'email_user' 	=> $this->input->post('email_user',true),
			'alamat_user'	=> $this->input->post('alamat_user',true),
			'no_telepon'	=> $this->input->post('no_telepon',true),
			'gender'		=> $gender,
			'password_user' => password_hash($this->input->post('password_user'), PASSWORD_DEFAULT),
			'role_id'		=> 2,
			'date_created' 	=> time()
			];

			$this->db->insert('tb_user',$data);
			$this->session->set_flashdata('message','<center><small class="form-text text-success">
			  Berhasil Daftar Member . Silahkan Login</small></center>');
			redirect('auth');

		}

	}

	}

	

?>
