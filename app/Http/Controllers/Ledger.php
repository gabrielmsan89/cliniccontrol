<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class LedgerData
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
//session_destroy();
if (!isset($_SESSION["ledger_entries"])) {
    $_SESSION["ledger_entries"] = [
        [
            "patient" => "Gabriel",
            "amount" => "837894739",
            "paid_at" => now(),
            "paid_by" => "Zilda",
        ]
    ];
}

class Ledger extends Controller
{
    public function get($patient): View
    {
        $position = array_search($patient, array_column($_SESSION["patients"], "name"));
        $viewData = [

            "patient" => $_SESSION["patients"][$position],
            "ledger_entries" => $_SESSION["ledger_entries"]
        ];
        return view('ledger_by_patient', $viewData);
    }

    public function getBypatient($patient): View
    {
        $position = array_search($patient, array_column($_SESSION["patients"], "name"));
        $viewData = [

            "patient" => $_SESSION["patients"][$position],
            "ledger_entries" => $_SESSION["ledger_entries"]
        ];
        return view('ledger_by_patient', $viewData);
    }


    public function create($patient): View
    {
        $position = array_search($patient, array_column($_SESSION["patients"], "name"));
        $viewData = [

            "patient" => $_SESSION["patients"][$position]
        ];
        return view('new_payment', $viewData);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'patient' => ['required','min:5', 'max:40'],
            'amount' => ['required'],
            'paid_by' => ['required','min:10', 'max:40'],
            'paid_by_cpf' => ['required','cpf_ou_cnpj']

        ]);
        
        $_SESSION["ledger_entries"][] = [
            "patient" => $validatedData["patient"],
            "amount" => preg_replace( '/\D+/', '', $request->amount ),
            "paid_by_cpf" => preg_replace( '/\D+/', '', $request->paid_by_cpf),
            "paid_by" => $request->paid_by,
            "paid_at" => now()
        ];

        return redirect('/extratos/getbypatient/'.$validatedData['patient']);

        //print_r($validatedData);
        //die();
    }
}
