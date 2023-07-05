@extends('admin.layout')
@section('titulo', 'Dashboard')

@section('conteudo')

<navbar id="navbar">
    <div class="navbar-container">
        <img src="/img/logo-BRAZSINO.png" alt="" class="logo">
        <ul class="navbar-intems">
            <li class="nav-item">Ajuda</li>
            <a href="/bicho/create" class="a-item">Criar Jogo</li>
            <a href="{{ route('login.logout')}}" class="a-item">Sair</li>
        </ul>
    </div>
</navbar>


@endsection