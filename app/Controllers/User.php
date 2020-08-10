<?php namespace App\Controllers;

use App\Models\User_model;
use CodeIgniter\Controller;

class User extends Controller
{
    public function index()
    {

         echo view('user_view');
    }
}