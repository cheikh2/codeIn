<?php namespace App\Controllers;

use App\Models\PhysiqueModel;

class Physique extends BaseController
{
	public function insert($physique)
	{   
        echo view('templates/header');
        echo view('physique/add');
        echo view('templates/footer');
    }
    
    public function show($physique)
	{   
        echo view('templates/header');
        echo view('physique/liste');
        echo view('templates/footer');
	}

}
