<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bicho;

use Illuminate\Support\Facades\Auth;

class BichoController extends Controller
{   


    public function index() {
        $jogos = Jogo::all();
        if (Auth::check()) {
            $nomeUsuario = Auth::user()->name;
            $saldoUsuario = Auth::user()->saldo; // Supondo que o saldo seja um atributo da tabela de usuários
    
            return view('jogos-index', [
                'nomeUsuario' => $nomeUsuario,
                'saldoUsuario' => $saldoUsuario
            ]);
        }
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

    public function roleta() {
        return view('bicho.roleta');
    }

    public function jogo()
    {
        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            $nomeUsuario = Auth::user()->name;
            $saldoUsuario = Auth::user()->saldo; // Supondo que o saldo seja um atributo da tabela de usuários
    
            return view('bicho.jogobicho', [
                'nomeUsuario' => $nomeUsuario,
                'saldoUsuario' => $saldoUsuario
            ]);
        }
    }
    
    public function diminuirSaldo(Request $request, $valorAposta)
    {

        $usuario = Auth::user();
        $usuario->saldo -= floatval($valorAposta);
        $usuario->save();
    
        return redirect()->back();
    }
    
    public function aumentarSaldo(Request $request, $valorAposta)
    {
        $valorAposta = $request->input('valor');
        $valorApostaMultiplicado = floatval($valorAposta) * 10;
        $usuario = Auth::user();
        $usuario->saldo += $valorApostaMultiplicado;
        $usuario->save();
    
        return redirect()->back();
    }

    public function depositarSaldo(Request $request, $valorAposta)
    {
        $valorAposta = $request->input('valor');
        $valorApostaMultiplicado = floatval($valorAposta);
        $usuario = Auth::user();
        $usuario->saldo += $valorApostaMultiplicado;
        $usuario->save();
    
        return redirect()->back();
    }
}

