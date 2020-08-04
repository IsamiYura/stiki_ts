<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\User_model;
 
class User extends Controller
{
    public function index()
    {
        $model = new User_model();
        $data['user'] = $model->getUser();
        echo view('user_view',$data);
    }

    public function tracer()
    {
        $model = new User_model();
        $data['user'] = $model->getUser();
        echo view('user_view',$data);
    }
}