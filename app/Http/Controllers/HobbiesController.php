<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){
        $data = [
        "greet"=>"Hello from Hobbies Controller"
        ];

        return view('Hobbies', ['data'=>$data]);
    }
}
