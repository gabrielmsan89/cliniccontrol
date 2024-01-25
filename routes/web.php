<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Appointment;
use App\Http\Controllers\Calendar;
use App\Http\Controllers\Pacient;
use App\Http\Controllers\Payment;
use App\Http\Controllers\Reports;
use App\Http\Controllers\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 
//Route::get('/{id}', [Pacient::class,'get']);

Route::get('/', [Reports::class,'Dashboard']);

Route::get('/login', [User::class, 'login']);

Route::get('/logout', [User::class,'logout']);

Route::get('/usuarios', [User::class,'get']);
Route::get('/usuarios/cadastrar', [User::class,'create']);
Route::post('/usuarios', [User::class,'store']);

Route::get('/pacientes', [Pacient::class,'get']);
Route::get('/pacientes/cadastrar', [Pacient::class,'create']);
Route::post('/pacientes', [Pacient::class,'store']);

Route::get('/pagamentos/{paciente}', [Payment::class,'get']);
Route::get('/pagamentos/{paciente}/novo', [Payment::class,'create']);
Route::post('/pagamentos/{paciente}', [Payment::class,'store']);

Route::get('/consultas', [Appointment::class,'get']);

Route::get('/agenda', [Calendar::class, 'display']);

Route::get('/configuracoes', function(){
    return 'dashboard';
});