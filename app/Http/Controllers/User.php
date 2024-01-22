<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class UserData{
    public int $id; 

    public string   $name; 
    public string   $cpf; 
    public string   $job_role; 
    public int      $birthday; 
    public string   $email; 
    public string   $registry; 
    public string   $phone; 

    public int $boss_user_id; 

    public int $created_at; 
    public int $updated_at; 
    public int $deleted_at;
}

class User extends Controller
{
    public function get(): View
    {
        return view('user');
    }

    public function login(): View
    {
        return view('login');
    }

    public function logout(): View
    {
        return view('logout');
    }
}
