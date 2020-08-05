<?php namespace App\Controllers;

use App\Models\MoralModel;

class Moral extends BaseController
{
    /*public function insert($moral)
	{
        
        echo view('templates/header');
        echo view('moral/add');
        echo view('templates/footer');
	}

	public function show($moral)
	{
        
        echo view('templates/header');
        echo view('moral/liste');
        echo view('templates/footer');
        }*/
        
        public function show()
    {    
        echo view('templates/header');
        $model = new MoralModel();
 
        $data['moral'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('moral/liste', $data);
        echo view('templates/footer');
    }    
 
    public function save()
    {   
        echo view('templates/header'); 
        return view('moral/add');
        echo view('templates/footer');
    }
 
    public function store()
    {  
 
        echo view('templates/header');
        helper(['form', 'url']);
         
        $model = new MoralModel();
 
        $data = [
 
            'nomEmpl' => $this->request->getVar('nomEmpl'),
            'ninea'  => $this->request->getVar('ninea'),
            'rc' => $this->request->getVar('rc'),
            'raisonSocial'  => $this->request->getVar('raisonSocial'),
            'adressEmpl' => $this->request->getVar('adressEmpl'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to('http://localhost/codeIn/public/Moral/show');
        echo view('templates/footer');
    }
 
    public function edit($id = null)
    {
        echo view('templates/header');
     $model = new MoralModel();
 
     $data['moral'] = $model->where('id', $id)->first();
 
     return view('moral/edit', $data);
     echo view('templates/footer');
    }
 
    public function update()
    {  
        echo view('templates/header');
        helper(['form', 'url']);
         
        $model = new MoralModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
                'nomEmpl' => $this->request->getVar('nomEmpl'),
                'ninea'  => $this->request->getVar('ninea'),
                'rc' => $this->request->getVar('rc'),
                'raisonSocial'  => $this->request->getVar('raisonSocial'),
                'adressEmpl' => $this->request->getVar('adressEmpl'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to('http://localhost/codeIn/public/Moral/show');
        echo view('templates/footer');
    }
 
    public function delete($id = null)
    {
 
     $model = new ModelModel();
 
     $data['moral'] = $model->where('id', $id)->delete();
      
     return redirect()->to('http://localhost/codeIn/public/Moral/show');
    }

}
