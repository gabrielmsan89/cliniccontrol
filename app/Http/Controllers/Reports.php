<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Reports extends Controller
{
    public function Dashboard(): View
    {
        $viewData = [
            "name" => "Gabigol",
            "consultas" => [
                [
                    "nomeMedico" => "Dr1",
                    "paciente" => "fulano 1",
                    "horario" => "09:00"
                ],
                [
                    "nomeMedico" => "Dr2",
                    "paciente" => "fulano 2",
                    "horario" => "09:00"
                ],
                [
                    "nomeMedico" => "Dr3",
                    "paciente" => "fulano 3",
                    "horario" => "09:00"
                ],
            ],
            "aniversariantes" => [
                [
                    "paciente" => "fulano x",
                    "idade" => "33 anos"
                ]
            ],
            "filaDeEspera" => [
                [
                    "nomeMedico" => "Dr1",
                    "paciente" => "fulano 1",
                ],
                [
                    "nomeMedico" => "Dr2",
                    "paciente" => "fulano 2",
                ],
                [
                    "nomeMedico" => "Dr3",
                    "paciente" => "fulano 3",
                ],
            ],

        ];
        return view('dashboard', $viewData);
    }
}
