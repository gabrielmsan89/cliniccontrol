<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AppointmentData {
    public int $id;

    public int      $date_time;
    public string   $status;

    public int $price;
    public int $appointment_type_price_id;

    public int  $doctor_user_id;
    public int  $patient_id;            //aqui tem que poder ser vazio caso o tipo de atendimento seja "Ausente/indisponível"
    public int  $creator_user_id; 
    public bool $created_by_patient;    //caso o agendamento tenha sido feito pelo próprio patient

    public int $created_at;
    public int $updated_at; 
    public int $deleted_at;
}

class AppointmentTypeData {
    
    public int $id; 

    public string   $title; 
    public int      $time_range;   //duração do tipo de consulta

    public int $created_at; 
    public int $updated_at; 
    public int $deleted_at;
}

class AppointmentTypePriceData {
    
    public int $id;

    public int $price;

    public int $appointment_type_id;
    public int $health_plan_id;

    public int $created_at;
    public int $updated_at;
    public int $deleted_at;
}

class Appointment extends Controller
{
    public function get(): View
    {
        return view('appointment',['name'=>'Gabriel']);
    }

    public function create(): View
    {
        return view('appointment',['name'=>'Gabriel']);
    }

    public function createType(): View
    {
        return view('appointment',['name'=>'Gabriel']);
    }

    public function CreateTypePrice(): View
    {
        return view('appointment',['name'=>'Gabriel']);
    }

    public function getAllByUser(int $idUser): View
    {
        return view('appointment',['name'=>'Gabriel']);
    }
}


