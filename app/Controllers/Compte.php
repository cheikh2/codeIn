<?php namespace App\Controllers;

class Compte extends BaseController
{
	public function index()
	{
		echo "Bonjour je suis dans la salle";
	}

	public function show($compte = '')
	{
        
        echo view('templates/header');
        echo view('compte/'.$compte);
        echo view('templates/footer');
	}

}
