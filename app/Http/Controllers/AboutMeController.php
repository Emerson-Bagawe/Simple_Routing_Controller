<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index(){
        $data = [
        'greet' => 'Hello from About Me Controller'
        ];
        return view('About_Me',['data'=>$data]);
    }
}
