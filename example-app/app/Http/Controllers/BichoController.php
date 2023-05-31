<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bicho;

class BichoController extends Controller
{   


    public function index() {
        $bicho = bicho::all();
    }
    
    public function create() {
        return view('bicho.create');
    }

    public function store(Request $request) {

        $bicho = new bicho;
        
        $bicho->name = $request->name;
        $bicho->number = $request->number;
        $bicho->save();
        
        return redirect('welcomeb');
    }
}

