<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use function PHPUnit\Framework\isEmpty;

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

class Pacient extends Controller
{
    public function get(): View
    {
        $viewData = [
            "pacientes" => [
                [
                    "name" => "Gabriel",
                    "cpf" => "837894739",
                    "pai" => "Mario",
                    "mae" => "Zilda",
                    "phone" => "31989082098",
                    "email" => "gdfd@fdfdij.com",
                    "birthday" => "23/10/1989",
                ],
                [
                    "name" => "Deborah",
                    "cpf" => "464564",
                    "pai" => "Mario",
                    "mae" => "Zilda",
                    "phone" => "31989082098",
                    "email" => "gdfd@fdfdij.com",
                    "birthday" => "23/10/1989",
                ]
            ]
        ];
        return view('pacient', $viewData);
    }

    public function create(): View
    {
        return view('create_pacient');
    }

    public function store(Request $request):void
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:20'],
            'cpf' => ['required', 'max:20']
        ]);
        print_r($validatedData);
        die();
    }
}
