<?php namespace App\Controllers;

use Codeigniter\Controller;

class Users extends BaseController
{

	private $session;

	//=============================================
	public function __construct()
	{
		$this->session = session();
	}

	//=============================================
	public function index()
	{
		if($this->checkSession()){
			//active session
		}else{
			//inactive session - show login form
			$this->login();
		}
	}

	//=============================================
	public function login()
	{
		// show the login page
		echo view('users/login');
	}

	//=============================================
	private function checkSession()
	{
		return $this->session->has('id_user');
	}

}
