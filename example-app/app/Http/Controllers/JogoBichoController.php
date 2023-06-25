<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogoBichoController extends Controller
{
    public function index(){

        return view('JogoBicho\index');
    }
}
