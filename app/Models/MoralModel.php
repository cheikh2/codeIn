<?php namespace App\Models;

use CodeIgniter\Model;

class MoralModel extends Model{

    protected  $table = 'moral';
    protected $allowedFields = ['nomEmpl', 'ninea', 'rc', 'raisonSocial', 'adressEmpl'];

    // public function getMoral(){
    //     return $this->findAll();
    // }
}