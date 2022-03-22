<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->CekLogin();
        }

        public function CekLogin()
        {
            if (!empty($_SESSION['user'])) {
               $this->Leving();
                
            }else{
                // redirect('/Auth/login');
            }
        }
    public function index()
	{
		$this->load->view('welcome_message');
	}

    public function register()
    {
        $this->load->view('Auth/register');
    }
    public function addusers()
    {
        
        $data=$_POST;
        $data += array(
            'level' => 'tamu'
        );
        
        // var_dump($data);die;
        $this->db->insert('users', $data);

        redirect('/Auth/login');
    }
    public function login()
	{
		$this->load->view('Auth/login');
	}

	public function cekusers()
	{
		// var_dump($_POST);
		$username=$_POST['username'];
		$password=$_POST['password'];

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$login=$this->db->get('users')->result();
		if (empty($login)) {
			redirect('/Auth/login');
		}
        if ( ! function_exists('redirect_back'))
        {
            function redirect_back()
            {
                if(isset($_SERVER['HTTP_REFERER']))
                {
                    header('Location: '.$_SERVER['HTTP_REFERER']);
                }
                else
                {
                    header('Location: http://'.$_SERVER['SERVER_NAME']);
                }
                exit;
            }
        }
		$_SESSION['user']=$login[0];
		
        $this->Leving();
        
        
	}

    public function Leving()
    {
        if ($_SESSION['user']->level=="tamu") {
			redirect('/Tamu/TipeKamar');
		}

        if ($_SESSION['user']->level=="resepsionis") {
			redirect('/Resp/dashboard');
		}
        if ($_SESSION['user']->level=="admin") {
			redirect('/Admin/dashboard');
		}
    }
    
}