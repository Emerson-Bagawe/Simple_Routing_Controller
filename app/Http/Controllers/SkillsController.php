<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        $data = [
            "greet"=>"Hello from Skills Controller"
            ];
        return view('Skills',['data'=>$data]);
    }
}
