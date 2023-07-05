<?php

namespace App\Http\Controllers;

//Routes -> Controller -> View
use Illuminate\Http\Request;

use App\Models\Jogo;
use App\Models\bicho;

use Illuminate\Support\Facades\Auth;

class JogosController extends Controller
{
    public function index(){

        $jogos = Jogo::all();
        if (Auth::check()) {
            $nomeUsuario = Auth::user()->name;
            $saldoUsuario = Auth::user()->saldo; // Supondo que o saldo seja um atributo da tabela de usuários
    
            return view('bicho.index', [
                'nomeUsuario' => $nomeUsuario,
                'saldoUsuario' => $saldoUsuario
            ]);
        }
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
