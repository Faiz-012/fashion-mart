<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentDataModel;

class WelcomeController extends Controller
{
    public function controller_function(){
        return view('hello');
    }

    public function secondpage(){
        return view('second_page');
    }
}
