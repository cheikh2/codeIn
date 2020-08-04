<?php namespace App\Controllers;

class Moral extends BaseController
{
	public function index()
	{
		echo "Bonjour je suis dans la salle";
	}

	public function show($moral = '')
	{
        
        echo view('templates/header');
        echo view('moral/'.$moral);
        echo view('templates/footer');
	}

}
