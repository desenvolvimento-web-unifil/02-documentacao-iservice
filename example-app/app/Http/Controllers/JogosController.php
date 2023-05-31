<?php

namespace App\Http\Controllers;

//Routes -> Controller -> View
use Illuminate\Http\Request;

use App\Models\Jogo;

class JogosController extends Controller
{
    public function index(){

        //  dd('Olá Mundo');  //dd = representação mais tecnica
        $jogos = Jogo::all();
        //dd($jogos);
        return view('bicho.index', ['jogos'=>$jogos]);
    }
    
    public function create(){

        return view('bicho.create');
    }

    public function store(Request $request){

      //dd($request);  

      Jogo::create($request->all());

      return view('bicho.create');


    }
}
