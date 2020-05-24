<?php namespace App\Controllers;

use Codeigniter\Controller;

class Users extends BaseController
{

	private $session;

	public function __construct()
	{
		$this->session = session();
	}

	public function index()
	{

		$datos = array(
			'id_user' => 1,
			'nombre' => 'Carlos'
		);
		$this->session->set($datos);

	}

	public function menu_inicial(){

		if(!$this->session->has('id_user')){
			echo 'Acceso Prohibido';
			exit();
		}
		echo 'Estoy en el menú principal';

	}

}
