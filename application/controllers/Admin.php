<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function data()
	{
        $view = $_GET['v'];
        $t=$_GET['t'];

        $t = $this->db->get($t)->result();
		$this->load->view('Admin/'.$view,['data'=>$t]);
	}

	public function update($value='')
	{
		$lin=[];
		foreach ($_POST as $key => $upcase) {
			$lin[]=array($key,$upcase);
			$this->db->set($key, $upcase);
		}
		$this->db->where($_GET['link'], $_GET['val']);
		$this->db->update($_GET['t']);
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	public function add()
	{
		$view = $_GET['v'];
		$t=$_GET['t'];
		if (!empty($_POST)) {
			$this->db->insert($_GET['t'], $_POST);
			echo "<h1>Berhasil di tambahkan</h1>";
		}
		$t = $this->db->get($t)->result();
		$this->load->view('Admin/'.$view,['data'=>$t]);
	}
	public function dashboard()
	{
		$this->load->view('Admin/dashboard');
	}
	public function addfasilitas()
	{
		$this->load->view('Admin/addfasilitas');
	}

}
