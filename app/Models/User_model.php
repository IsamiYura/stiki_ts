<?php namespace App\Models;
use CodeIgniter\Model;
 
class User_model extends Model
{
    protected $table = 'user';
     
    public function getUser($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['nrp' => $nrp]);
        }   
    }
 
}