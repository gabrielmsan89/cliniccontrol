<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class patientData
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
//session_destroy();
if (!isset($_SESSION["patients"])) {
    $_SESSION["patients"] = [
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

class patient extends Controller
{
    public function get(): View
    {
        $viewData = [
            "patients" => $_SESSION["patients"]
        ];
        return view('patient', $viewData);
    }

    public function create(): View
    {
        return view('create_patient');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','min:10', 'max:40'],
            'cpf' => ['required', 'cpf'],
            'rg' => ['max:10','min:6'],
            'pai' => ['min:10', 'max:40'],
            'mae' => ['min:10', 'max:40'],
            'father_cpf' => ['cpf'],
            'mother_cpf' => ['cpf'],
            'phone' => ['celular_com_ddd'],
            'email' => ['max:5'],
            'address' => ['max:50','min:1'],
            'birthday' => ['date_format:d/m/Y']
        ]);
        $_SESSION["patients"][] = [
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

