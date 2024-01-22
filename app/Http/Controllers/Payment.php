<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentData {
       
    public int $id; 
 
    public int $amount_paid; 
    public int $cancelled_amount; 
    public int $paid_at; 
    public int $cancelled_at; 
    public int $cancelled_by_user_id ; 

    public int $appointment_id;

    public int $created_at; 
    public int $updated_at; 
    public int $deleted_at;
}

class Payment extends Controller
{
    public function get(string $id): string
    {
        return 'pagamento';
    }
}
