<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class id_model extends CI_Model {

	public function GetRandomTiket($number,$offset)
	{

		$this->db->join('tb_maskapai', 'tb_tiket.id_maskapai = tb_maskapai.id_maskapai');
		$this->db->order_by('id_tiket', 'RANDOM');
		$this->db->where('stok_tiket >',0);
		return $this->db->get('tb_tiket',$number,$offset)->result_array();

	}

	public function getAllArtikel($number,$offset)
	{
		$this->db->where('status',1);
		return $this->db->get('tb_artikel',$number,$offset)->result_array();
	}

	public function RandomArtikel()
	{
		$this->db->where('status',1);
		return $this->db->get('tb_artikel')->result_array();
	}

	public function getArtikelById($id_artikel)
	{
		return $this->db->get_where('tb_artikel',['id_artikel' => $id_artikel])->row_array();
	}

		public function getTiketById($id_tiket)
		{

			$this->db->join('tb_maskapai','tb_tiket.id_maskapai = tb_maskapai.id_maskapai');
			return $this->db->get_where('tb_tiket',['id_tiket' => $id_tiket])->row_array();
		}

	public function getAllTiket()
	{

		$this->db->join('tb_maskapai', 'tb_tiket.id_maskapai = tb_maskapai.id_maskapai');
		$this->db->order_by('id_tiket','DESC');
		$this->db->limit(12);
		$this->db->where('stok_tiket >',0);
		return $this->db->get('tb_tiket')->result_array();

	}

	public function SearchTiket()
	{
			$tiket_berangkat 		= $this->input->post('tiket_berangkat',true);
			$tiket_tujuan	 		= $this->input->post('tiket_tujuan',true);
			$tanggal_berangkat  	= $this->input->post('tanggal_berangkat',true);
			$kelas					= $this->input->post('kelas',true);
			$stok_tiket				= $this->input->post('stok_tiket',true);

			$this->db->join('tb_maskapai', 'tb_tiket.id_maskapai = tb_maskapai.id_maskapai');
			$this->db->like('tiket_berangkat',$tiket_berangkat);
			$this->db->like('tiket_tujuan',$tiket_tujuan);
			$this->db->like('kelas',$kelas);
			$this->db->where('stok_tiket >=',$stok_tiket);
			return $this->db->get('tb_tiket')->result_array();
	}

	public function getAllMaskapai()
	{
		return $this->db->get('tb_maskapai')->result_array();
	}

	public function Subscribe()
	{
		$data = [

			'email' => $this->input->post('email',true)


		];

		$this->db->insert('tb_berlangganan',$data);
	}

	public function getAllAdmin()
	{
		return $this->db->get_where('tb_user',['role_id' => 1])->result_array();
	}

	public function ContactForm()
	{
		$data =
		[
			'nama' 	=> $this->input->post('nama',true),
			'email'	=> $this->input->post('email',true),
			'pesan' => $this->input->post('pesan',true)
		];

		$this->db->insert('tb_inbox',$data);
	}

	public function AddKeranjang()
	{
		$redirect_page 			= $this->input->post('redirect_page',true);

		$id_tiket 				= $this->input->post('id_tiket',true);
		$maskapai 				= $this->input->post('maskapai',true);
		$harga_tiket			= $this->input->post('harga_tiket',true);
		$jenis_penerbangan		= $this->input->post('jenis_penerbangan',true);
		$nomor_penerbangan		= $this->input->post('nomor_penerbangan',true);
		$tiket_berangkat		= $this->input->post('tiket_berangkat',true);
		$tiket_tujuan			= $this->input->post('tiket_tujuan',true);
		$tanggal_berangkat		= $this->input->post('tanggal_berangkat',true);
		$tanggal_datang			= $this->input->post('tanggal_datang',true);
		$waktu_keberangkatan	= $this->input->post('waktu_keberangkatan',true);
		$waktu_datang			= $this->input->post('waktu_datang',true);
		$kelas					= $this->input->post('kelas',true);

		$sql = $this->db->get_where('tb_tiket',['id_tiket' =>  $id_tiket])->row_array();
		$harga_asli = $sql['harga_tiket'];

		if($harga_tiket != $harga_asli)
		{
			$this->session->set_flashdata('flash','<div class="alert alert-danger">Terjadi Parameter Tampering!</div>');
			redirect('Id/detail_tiket/'.$id_tiket);	
		}else{

		$data = array(

				'id' 					=> $id_tiket,
				'name'					=> $maskapai,
				'qty'					=> 1,
				'price'					=> $harga_tiket,
				'jenis_penerbangan' 	=> $jenis_penerbangan,
				'nomor_penerbangan' 	=> $nomor_penerbangan,
				'tiket_berangkat' 		=> $tiket_berangkat,
				'tiket_tujuan'			=> $tiket_tujuan,
				'tanggal_berangkat'		=> $tanggal_berangkat,
				'tanggal_datang'		=> $tanggal_datang,
				'waktu_keberangkatan'	=> $waktu_keberangkatan,
				'waktu_datang'			=> $waktu_datang,
				'kelas'					=> $kelas

			);

		$this->cart->insert($data);
		$this->session->set_flashdata('flash','<div class="alert alert-success">Tiket berhasil dipesan</div>');
		redirect($redirect_page,'refresh');
		
		}
	}

	public function UpdateCart($rowid)
	{
		$qty = $this->input->post('qty',true);
		$stok_tiket = $this->input->post('stok_tiket',true);

		$data = array(

				'rowid'			=> $rowid,
				'qty'			=> $qty,
				'stok_tiket'	=> $stok_tiket
			);

			if($qty > $stok_tiket){

				$this->session->set_flashdata('flash','<div class="alert alert-danger">Stok tiket tidak mencukupi!</div>');
			redirect(base_url('Id/keranjang'),'refresh');
			}

			else{

				$this->cart->update($data);
				$this->session->set_flashdata('flash','<div class="alert alert-success">Tiket berhasil diupdate!</div>');
				redirect(base_url('Id/keranjang'),'refresh');

			}


	}

	public function DeleteCart($rowid)
	{
			$this->cart->remove($rowid);
			$this->session->set_flashdata('flash','<div class="alert alert-success alert-dismissible">Tiket berhasil dihapus dari keranjang</div>');
			redirect(base_url('Id/keranjang'),'refresh');

	}

	public function DestroyCart()
	{
			$this->cart->destroy();
			$this->session->set_flashdata('flash','<div class="alert alert-warning">Keranjang berhasil dikosongkan</div>');
			redirect(base_url('Id/keranjang'),'refresh');
	}

	public function Transaksi()
	{

		$uploaded_image = $_FILES['bukti_transfer']['name'];

		if ($uploaded_image) {

				$new_name					= time().$_FILES['bukti_transfer']['name'];
				$config['file_name']		= $new_name;
				$config['upload_path']  	= './assets/images/bukti_pembayaran/';
        		$config['allowed_types']  	= 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);

                 if ($this->upload->do_upload('bukti_transfer'))
                {
                        $new_image = $this->upload->data('file_name');
                }
                else
                {
                        echo $this->upload->display_errors();
                }

			}

		$id_user 				= $this->input->post('id_user',true);
		$title					= $this->input->post('title',true);
		$nama_user				= $this->input->post('nama_user',true);
		$no_telepon				= $this->input->post('no_telepon',true);
		$email_user				= $this->input->post('email_user',true);
		$alamat_user			= $this->input->post('alamat_user',true);
		$stok_tiket 			= $this->input->post('stok_tiket',true);

		$keranjang 				= $this->cart->contents();

		foreach($keranjang as $items ){

		$stok_sisa = $stok_tiket - $items['qty'];
		$data = [

				'id_tiket'					=> $items['id'],
				'kode_tiket'				=> $items['rowid'],
				'id_user'					=> $id_user,
				'title'						=> $title,
				'nama_user'					=> $nama_user,
				'no_telepon'				=> $no_telepon,
				'email_user'				=> $email_user,
				'alamat_user'				=> $alamat_user,
				'bukti_transfer'  			=> $new_image,
				'jumlah_pembelian'			=> $items['qty'],
				'tanggal_pembelian'			=> date("Y-m-d"),
				'harga_total'				=> $items['price'],
				'status'					=> 0
			];

			$this->db->insert('tb_transaksi',$data);
			$this->db->set('stok_tiket',$stok_sisa);
			$this->db->where('id_tiket',$items['id']);
			$this->db->update('tb_tiket');

		}

		$this->cart->destroy();

		$this->session->set_flashdata('flash','<div class = "alert alert-success alert-dismissible">Pemesanan berhasil . silahkan tunggu hingga pembayaran divalidasi oleh admin!</div>');
		redirect(base_url('user/'));



	}

	public function SearchArtikel()
		{

			$search = $this->input->post('search',true);
			$this->db->like('judul',$search);
			$this->db->or_like('artikel',$search);
			$this->db->or_like('username',$search);
			$this->db->or_like('tanggal',$search);
			return $this->db->get('tb_artikel')->result_array();

		}

	public function getTestimonial()
	{
		return $this->db->get('tb_testimoni')->result_array();
	}

	public function getSearchAjax()
	{
		$search = $this->input->get('search',true);
		$this->db->join('tb_maskapai','tb_tiket.id_maskapai = tb_maskapai.id_maskapai');
		$this->db->like('tb_tiket.maskapai',$search);
		$this->db->or_like('kelas',$search);
		$this->db->or_like('tiket_berangkat',$search);
		$this->db->or_like('tiket_tujuan',$search);
		$this->db->or_like('jenis_penerbangan',$search);
		$this->db->or_like('tanggal_berangkat',$search);
		$this->db->where('stok_tiket >',0);

		$this->db->limit(6);
		return $this->db->get('tb_tiket')->result_array();

	}
}



?>
