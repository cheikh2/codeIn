<?php namespace App\Controllers;

class Physique extends BaseController
{
	public function index()
	{
		echo "Bonjour je suis dans la salle";
	}

	public function show($physique = '')
	{
        
        echo view('templates/header');
        echo view('physique/'.$physique);
        echo view('templates/footer');
	}

}
