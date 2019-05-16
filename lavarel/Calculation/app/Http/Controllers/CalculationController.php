<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CalculationController extends Controller
{
    function index (){
        $result = null;
        return view('calculator', compact('result'));
    }
    public function calculate(Request $request) {
        $soA = $request->value1;
        $soB = $request->value2;
        $action = $request->action;

        switch ($action) {
            case 'ADDITION':
                $result = $soA + $soB;
                break;
            case 'SUBTRACTION':
                $result = $soA - $soB;
                break;
            case 'MULTIPLICATION':
                $result = $soA * $soB;
                break;
            case 'DIVISION':
                if ($soB != 0) {
                    $result = $soA / $soB;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
        return view('calculator', compact('result'));
    }
}
