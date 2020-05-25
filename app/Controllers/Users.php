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

		/*
		Verificar si hay un post
			Si hubo un post:
			- Verificar que existen los dos campos requeridos
			- Chequear con la BD si existen el username y password introducidos
			- Si existen los dos:
				- Crear session y abrir la pantalla inicial
			- Si no existen:
				- Mostrar Login Form con el error
		*/

		$error = '';
		$data = array();
		$request = $this->request;

		if($request->getMethod() == 'post'){
			$username = $request->getPost('username');
			$password = $request->getPost('password');
			if($username == '' || $password == ''){
				$error = 'Error en los campos.';
			}
		}

		if($error != ''){
			$data['error'] = $error;
		}
		// show the login page
		echo view('users/login',$data);
	}

	//=============================================
	private function checkSession()
	{
		return $this->session->has('id_user');
	}

}
