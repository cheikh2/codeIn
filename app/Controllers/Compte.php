<?php namespace App\Controllers;

use App\Models\CompteModel;

class Compte extends BaseController
{
	public function insert($compte)
	{
        
        echo view('templates/header');
        echo view('compte/add');
        echo view('templates/footer');
    }
    
    public function show($compte)
	{
        
        echo view('templates/header');
        echo view('compte/liste');
        echo view('templates/footer');
	}

}
