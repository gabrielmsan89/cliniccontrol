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
                    "patient" => "fulano 1",
                    "horario" => "09:00"
                ],
                [
                    "nomeMedico" => "Dr2",
                    "patient" => "fulano 2",
                    "horario" => "09:00"
                ],
                [
                    "nomeMedico" => "Dr3",
                    "patient" => "fulano 3",
                    "horario" => "09:00"
                ],
            ],
            "aniversariantes" => [
                [
                    "patient" => "fulano x",
                    "idade" => "33 anos"
                ]
            ],
            "filaDeEspera" => [
                [
                    "nomeMedico" => "Dr1",
                    "patient" => "fulano 1",
                ],
                [
                    "nomeMedico" => "Dr2",
                    "patient" => "fulano 2",
                ],
                [
                    "nomeMedico" => "Dr3",
                    "patient" => "fulano 3",
                ],
            ],

        ];
        return view('dashboard', $viewData);
    }
}
