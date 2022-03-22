<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function detailTipe()
	{
		$this->db->where('id', $_GET['id']);
		$tipe_kamar = $this->db->get('Tipe_room')->result();
		$data=[];
		foreach ($tipe_kamar as $key => $kamar) {
					$this->db->where('id_tipekamar', $kamar->id);
					$fasilitaskamar = $this->db->get('F_kamar')->result();
					$data[$key]=array(
						'Info_kamar' =>$kamar, 
						'F_kamar'=>$fasilitaskamar
					);
				}
			$this->load->view('Tamu/DetailFKamar',['data'=>$data]);
	}
	
	public function booknow()
	{
		if (empty($_SESSION['user'])) {
			redirect('/Auth/login/');
		}
		$data['user']=$_SESSION['user'];

		$this->db->where('id', $_GET['id']);
		$tipe_kamar = $this->db->get('Tipe_room')->result();
		$dataKamar=[];
		foreach ($tipe_kamar as $key => $kamar) {
					$this->db->where('id_tipekamar', $kamar->id);
					$fasilitaskamar = $this->db->get('F_kamar')->result();
					$dataKamar[$key]=array(
						'Info_kamar' =>$kamar, 
						'F_kamar'=>$fasilitaskamar
					);
				}
				$allroom = $this->db->get('Tipe_room')->result();
				$data['kamar']=$dataKamar;
				$data['alltipe'] = $allroom;
				$this->load->view('Tamu/book',['data'=>$data]);

	}
	public function TipeKamar()
	{
		$tipe_kamar = $this->db->get('Tipe_room')->result();
		$data=[];
		foreach ($tipe_kamar as $key => $kamar) {
					$this->db->where('id_tipekamar', $kamar->id);
					$fasilitaskamar = $this->db->get('F_kamar')->result();
					$data[$key]=array(
						'Info_kamar' =>$kamar, 
						'F_kamar'=>$fasilitaskamar
					);
				}
		// var_dump($data);
		// echo 'Hallo mr/s. '.$_SESSION['user']->Nama.' Selamat Datang di Hotel Hebat';
			$this->load->view('Tamu/fasilitaskamar',['data'=>$data]);
	}
	public function ref()
	{
		if (empty($_SESSION['user'])) {
			redirect('/Auth/login/');
		}
		$this->db->where('nama_pemesan', $_SESSION['user']->Nama);
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('Tipe_room', 'Tipe_room.id = pemesanan.id_kamar');

		$yourbooked = $this->db->get()->result();
		$data['book']=$yourbooked;
		$this->load->view('Tamu/ref',['data'=>$data]);
	}
	public function prosBook()
	{
		
		$this->db->where('id',$_POST['id_kamar']);
		$tipe_kamar = $this->db->get('Tipe_room')->result();

		$total_harga=$_POST['jml_kamar']*$tipe_kamar[0]->harga;
		$data = array(
			'nama_pemesan' => $_POST['nama_pemesan'], 
			'email' => $_POST['email'], 
			'no_hp' => $_POST['no_hp'], 
			'nama_tamu' => $_POST['nama_tamu'], 
			'id_kamar' => $_POST['id_kamar'], 
			'tgl_cekin' => $_POST['tgl_cekin'], 
			'tgl_cekout' => $_POST['tgl_cekout'], 
			'jml_kamar' => $_POST['jml_kamar'], 
			'Harga' => $total_harga, 
			'PayBay' => $_POST['PayBay'], 
			'PayEND' => 0, 
			'Status_Kamar' => 0, 
			'RefPB' => date('mdy ').$_POST['PayBay'].
			date('His'), 
		);
		$this->db->insert('pemesanan', $data);
		redirect('/Tamu/ref');

	}
	public function print()
	{
		
		$this->db->where('id_pesanan', $_GET['id']);
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('Tipe_room', 'Tipe_room.id = pemesanan.id_kamar');
		$print=$this->db->get()->result();
		$data['book']=$print;
		$this->load->view('Tamu/print',['data'=>$data]);
	}
	public function logout()
    {
        session_destroy();
        redirect('/Auth/login');
    }
}
