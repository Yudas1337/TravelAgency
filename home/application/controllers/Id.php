<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Id extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->model('id_model');

		}

	public function index()
	{
		$data['tiket'] 		= $this->id_model->getAllTiket();
		$data['maskapai']   = $this->id_model->getAllMaskapai();
		$data['client'] 	= $this->id_model->getTestimonial();

		$this->form_validation->set_rules('email','Email','required|trim|valid_email');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('Id/index',$data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->id_model->Subscribe();
			$this->session->set_flashdata('flash','');
			redirect('Id/index');
		}

	}

	public function about()
	{
		$data['admin'] = $this->id_model->getAllAdmin();

		$this->load->view('templates/header');
		$this->load->view('Id/about',$data);
		$this->load->view('templates/footer');
	}

	public function contact()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('pesan','Pesan','required|trim');

		if($this->form_validation->run() == FALSE){

		$this->load->view('templates/header');
		$this->load->view('Id/contact');
		$this->load->view('templates/footer');

		}
		else{

			$this->id_model->ContactForm();
			$this->session->set_flashdata('flash','<small class="form-text text-success">
			  Berhasil Mengirim Pesan!</small>');
			redirect('Id/contact');
		}
	}

	public function artikel()
	{
		$config = array(

				'base_url' 			=> base_url().'Id/artikel/',
				'total_rows'		=> $this->db->count_all('tb_artikel'),
				'per_page'			=> 3,
				'first_link'		=> 'First',
				'last_link'			=> 'Last',
				'next_link'			=> 'Next',
				'prev_link'			=> 'Previous',
				'num_links'			=> '3',
				'full_tag_open'		=> '<div class="pager_wrapper"><ul class="pager clearfix">',
				'full_tag_close'	=> '</ul></div>',
				'num_tag_open'		=> ' <li class="li">',
				'num_tag_close'		=> '</li>',
				'cur_tag_open'		=> ' <li class="active"><a href="#">',
				'cur_tag_close'		=> '</a></li>',
				'next_tag_open'		=> ' <li class="li">',
				'next_tag_close'	=> '</li>',
				'prev_tag_open'		=> '<li class = "li">',
				'prev_tagl_close'	=> '</li>',
				'first_tag_open'	=> '<li class="prev">',
				'first_tagl_close'	=> '</li>',
				'last_tag_open'		=> '<li class="next">',
				'last_tagl_close'	=> '</li>'
			);


		if($this->input->post('search'))
		{
			$data['all_artikel'] = $this->id_model->SearchArtikel();
			$this->load->view('templates/header');
			$this->load->view('Id/artikel',$data);
			$this->load->view('templates/footer');
		}else{

			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);
			$data['all_artikel'] = $this->id_model->getAllArtikel($config['per_page'],$from);
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view('templates/header');
			$this->load->view('Id/artikel',$data);
			$this->load->view('templates/footer');
		}
	}

	public function detail_artikel($id_artikel)
	{
		$data['random_artikel'] = $this->id_model->RandomArtikel();
		$data['getartikel'] = $this->id_model->getArtikelById($id_artikel);
		$this->load->view('templates/header');
		$this->load->view('Id/detail_artikel',$data);
		$this->load->view('templates/footer');
	}

	public function tiket()
	{
		$config = array(

				'base_url' 			=> base_url().'Id/tiket/',
				'total_rows'		=> $this->db->count_all('tb_tiket'),
				'per_page'			=> 6,
				'first_link'		=> 'First',
				'last_link'			=> 'Last',
				'next_link'			=> 'Next',
				'prev_link'			=> 'Previous',
				'num_links'			=> '3',
				'full_tag_open'		=> '<div class="pager_wrapper"><ul class="pager clearfix">',
				'full_tag_close'	=> '</ul></div>',
				'num_tag_open'		=> ' <li class="li">',
				'num_tag_close'		=> '</li>',
				'cur_tag_open'		=> ' <li class="active"><a href="#">',
				'cur_tag_close'		=> '</a></li>',
				'next_tag_open'		=> ' <li class="li">',
				'next_tag_close'	=> '</li>',
				'prev_tag_open'		=> '<li class = "li">',
				'prev_tagl_close'	=> '</li>',
				'first_tag_open'	=> '<li class="prev">',
				'first_tagl_close'	=> '</li>',
				'last_tag_open'		=> '<li class="next">',
				'last_tagl_close'	=> '</li>'
			);

		if($this->input->post('tiket_berangkat'))
		{
			$data['client']	= $this->id_model->getTestimonial();

			$data['all_tiket'] = $this->id_model->SearchTiket();

			$this->load->view('templates/header');
			$this->load->view('Id/tiket',$data);
			$this->load->view('templates/footer');
		}else{

			$data['client']	= $this->id_model->getTestimonial();
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);
			$data['all_tiket'] = $this->id_model->GetRandomTiket($config['per_page'],$from);
			$data['pagination'] = $this->pagination->create_links();

			$this->load->view('templates/header');
			$this->load->view('Id/tiket',$data);
			$this->load->view('templates/footer');

		}


	}

	public function detail_tiket($id_tiket)
	{
		$data['getTiket'] = $this->id_model->getTiketById($id_tiket);
		$data['testimoni'] = $this->id_model->getTestimonial();
		$this->load->view('templates/header');
		$this->load->view('Id/detail_tiket',$data);
		$this->load->view('templates/footer');
	}

	public function keranjang()
	{
		$data['keranjang'] = $this->cart->contents();

		$this->load->view('templates/header');
		$this->load->view('Id/keranjang',$data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$this->id_model->AddKeranjang();
	}

	public function deletecart($rowid)
	{
		$this->id_model->DeleteCart($rowid);
	}

	public function destroycart()
	{
		$this->id_model->DestroyCart();
	}

	public function updatecart($rowid)
	{

		if ($rowid) {

			$this->id_model->UpdateCart($rowid);

		}else{

			redirect(base_url('Id/keranjang'),'refresh');
		}
	}

	public function checkout()
	{
		$data['user'] = $this->db->get_where('tb_user',['email_user' => $this->session->userdata('email_user')])->row_array();
		$data['keranjang'] = $this->cart->contents();

				if(empty($this->cart->contents()))
		{
		    $this->session->set_flashdata('flash','<div class="alert alert-danger">Anda belum memesan tiket . silahkan pesan tiket terlebih dahulu</div>');
		    redirect(base_url('Id/keranjang'));
		}

		if (!$this->session->userdata('email_user')) {

		    $this->session->set_flashdata('message','<center><small class="form-text text-danger">
		                Silahkan Login terlebih dahulu</small></center>');
		    redirect(base_url('auth/index'));

		}

		$this->form_validation->set_rules('title','Title','required|trim');
		$this->form_validation->set_rules('nama_user','Nama','required|trim');
		$this->form_validation->set_rules('email_user','Email','required|trim|valid_email');
		$this->form_validation->set_rules('no_telepon','No Telepon','required|trim|numeric');
		$this->form_validation->set_rules('alamat_user','Alamat','required|trim');

		if($this->form_validation->run() == FALSE)
		{
					$this->load->view('templates/header');
					$this->load->view('Id/checkout',$data);
					$this->load->view('templates/footer');

		}else{

			$this->id_model->Transaksi();
		}
	}

	public function ajax()
	{
		$this->input->get('search',true);
		$data['all_tiket'] = $this->id_model->GetSearchAjax();

		$this->load->view('Id/ajax',$data);
	}
	
}


?>