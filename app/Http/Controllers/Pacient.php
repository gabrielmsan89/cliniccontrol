<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PacientData
{
    public int $id;

    public string   $name;
    public string   $cpf;
    public string   $pai;
    public string   $mae;
    public string   $phone;
    public string   $email;
    public int      $birthday;

    public int $created_at;
    public int $updated_at;
    public int $deleted_at;
}

session_start();
if (count($_SESSION) <= 0) {
    $_SESSION["pacientes"] = [
        [
            "name" => "Gabriel",
            "cpf" => "837894739",
            "pai" => "Mario",
            "mae" => "Zilda",
            "phone" => "31989082098",
            "email" => "gdfd@fdfdij.com",
            "birthday" => "23/10/1989"
        ],
        [
            "name" => "Deborah",
            "cpf" => "464564",
            "pai" => "Mario",
            "mae" => "Zilda",
            "phone" => "31989082098",
            "email" => "gdfd@fdfdij.com",
            "birthday" => "23/10/1989"
        ]
    ];
}

class Pacient extends Controller
{
    public function get(): View
    {
        $viewData = [
            "pacientes" => $_SESSION["pacientes"]
        ];
        return view('pacient', $viewData);
    }

    public function create(): View
    {
        return view('create_pacient');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:20'],
            'cpf' => ['required', 'max:20']
        ]);
        $_SESSION["pacientes"][] = [
            "name" => $validatedData["name"],
            "cpf" => $request->cpf,
            "rg" => $request->rg,
            "pai" => $request->father_name,
            "mae" => $request->mother_name,
            "father_cpf" => $request->father_cpf,
            "mother_cpf" => $request->mother_cpf,
            "phone" => $request->phone,
            "email" => $request->email,
            "adress" => $request->adress,
            "birthday" => $request->birthday
        ];

        return redirect('/pacientes');

        //print_r($validatedData);
        //die();
    }
}

