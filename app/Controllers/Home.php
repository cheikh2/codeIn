<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		return view('welcome_message');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
