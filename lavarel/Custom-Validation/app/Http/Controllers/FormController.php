<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function checkValidation(FormExampleRequest $request)
    {
//        echo 'Name:' . $request->name . '. Age: ' . $request->age;
        $success = "Database is successfully vertified";
        return view('welcome', compact('success'));
    }
}
