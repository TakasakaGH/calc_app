<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function calculate($num1, $variable, $num2) 
    {
        if ($variable == 'addition') {
            $result = $num1 + $num2;

        } elsif ($variable == 'subtraction') {
            $result = $num1 - $num2;

        } elsif ($variable == 'multiplication') {
            $result = $num1 * $num2;

        } elsif ($variable == 'division') {
            $result = $num1 / $num2;
        }
        
        return view('message.calcs', ['msg' => $msg]);
        
    }

};
