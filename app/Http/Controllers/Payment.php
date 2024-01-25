<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class PaymentData
{

    public int $id;

    public int $amount_paid;
    public int $cancelled_amount;
    public int $paid_at;
    public int $cancelled_at;
    public int $cancelled_by_user_id;

    public int $appointment_id;

    public int $created_at;
    public int $updated_at;
    public int $deleted_at;
}
session_start();
//if (count($_SESSION) <= 0) {
    $_SESSION["pagamentos"] = [
        [
            "pacient" => "Gabriel",
            "amount" => "837894739",
            "paid_at" => "Mario",
            "paid_by" => "Zilda",
        ]
    ];
//}

class Payment extends Controller
{
    public function get($paciente): View
    {
        $position = array_search($paciente, array_column($_SESSION["pacientes"], "name"));
        $viewData = [

            "paciente" => $_SESSION["pacientes"][$position],
            "pagamentos" => $_SESSION["pagamentos"]
        ];
        return view('payments', $viewData);
    }

    public function create($paciente): View
    {
        $position = array_search($paciente, array_column($_SESSION["pacientes"], "name"));
        $viewData = [

            "paciente" => $_SESSION["pacientes"][$position]
        ];
        return view('new_payment', $viewData);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pacient' => ['required', 'max:20'],
        ]);
        $_SESSION["pacientes"][] = [
            "pacient" => $validatedData["pacient"],
            "amount" => $$request->amount,
            "paid_at" => $request->paid_at,
            "paid_by" => $request->paid_by,
        ];

        return redirect('/pagamentos');

        //print_r($validatedData);
        //die();
    }
}
