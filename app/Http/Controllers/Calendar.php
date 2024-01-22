<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CalendarData {   //para salvar qual a jornada de trabalho do profissional em cada dia da semana. Se ele for ficar fora um dia, lançará uma consulta do tipo "Indisponível"
    public int $id; 
 
    public int $day_of_week; 
    public int $start_journey; 
    public int $end_journey;

    public int $doctor_user_id;

    public int $created_at; 
    public int $updated_at; 
    public int $deleted_at;
}



class Calendar extends Controller
{
    public function display(): View
    {
        $id = "Médico";
        return view('doctor_work_journey',['name'=>$id]);
    }
}
