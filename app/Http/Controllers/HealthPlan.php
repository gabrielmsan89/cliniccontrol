<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HealthPlanData {   //criei pra salvar quais os planos de saúde e quais as operadoras. Não preciso de uma tabela de operadoras.
    
    public int $id;

    public string $name; 
    public string $company;

    public int $created_at; 
    public int $updated_at; 
    public int $deleted_at;
}


class HealthPlan extends Controller
{
    public function get(string $id): View
    {
        return view('health_plan',['name'=>$id]);
    }
}
