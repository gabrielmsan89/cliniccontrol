<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class UserData{
    public int $id; 

    public string   $name; 
    public string   $cpf;
    public string   $rg;  
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



session_start();

if (!isset($_SESSION["usuarios"])) {
    $_SESSION["usuarios"] = [
        [
            "name" => "Jose",
            "cpf" => "464576664",
            "rg" => "mg3423342",
            "phone" => "319777082098",
            "email" => "gdfd@fdfdij.com",
            "birthday" => "23/10/1989",
            "especialidade" => "Medico",
            "registro" => "crm8473",
            "chefe" => "Ferreira"
        ],
        [
            "name" => "Jose2222",
            "cpf" => "464576664222",
            "rg" => "mg34233422222",
            "phone" => "319777082098222",
            "email" => "gdfd@fdfddsdij.com",
            "birthday" => "20/10/1989",
            "especialidade" => "Medico",
            "registro" => "crm84734893",
            "chefe" => "Gabriel"
        ]
    ];
}


class User extends Controller
{
    public function get(): View
    {
        $viewData = [
            "usuarios" => $_SESSION["usuarios"]
        ];
        return view('user', $viewData);
    }

    public function create(): View
    {
        return view('create_user');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:20'],
            'cpf' => ['required', 'max:20'],
            'rg' => ['required', 'max:20']
        ]);
        $_SESSION["usuarios"][] = [
            "name" => $validatedData["name"],
            "cpf" => $validatedData["cpf"],
            "rg" => $validatedData["rg"],
            "phone" => $request->input("phone"),
            "email" => $request->input("email"),
            "birthday" => $request->input("birthday"),
            "especialidade" => $request->input("job_role"),
            "registro" => $request->registry,
            "chefe" => $request->boss,
        ];

        return redirect('/usuarios');
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
