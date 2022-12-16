@extends('layouts.app')

@section('content')

    <body class="bodymotas" style="text-align: center">
        <div class="titulo_paginas">
            <h1> Detalhes sobre a {{ $mota['nome'] }} </h1>
        </div>

        <div class="boxmotasdetalhesgeral" style="justify-content: space-around;">
            @if (isset($mota))
                <div class="boxmotaindividualgeral"style="padding-top: 20px;">
                    <div class="boxmotaindividualgeralImg">
                        <img src="{{ $mota['img'] }}" alt="mota/img" style="width: 400px">
                    </div>
                </div>
                <div class="nomemotasdetalhes" style="padding-top: 20px">
                <h2>{{ $mota['nome'] }}</h2>
                </div>
                <p>{{ $mota['desc'] }}</p>
                <b>PREÇO: </b><b class="motapreco" style="color: red;">{{ $mota['preco'] }}</b>
            @else
                <h1> O Mota nao existe </h1>
            @endif

            @auth
                @if ($mota->created_by == auth()->user()->id || auth()->user()->isAdmin)
                    <form action="{{ route('motas.destroy', $mota->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button> Eliminar MOTA </button>
                    </form>
                    <form action="{{ route('motas.edit', $mota->id) }}" method="GET">
                        @csrf
                        <button> Editar MOTA </button>
                    </form>
                @endif
            @endauth
            <br>
            <div class="voltarmmotas" style="padding: 10px">
            <a href="/motas"> Voltar as motas </a>
            </div>
        </div>

    </body>

    <footer class="finalcompleto"
        style=" background-color: dimgrey;
    display: flex;
    justify-content: space-around;
    padding: 25px;">
        <div class="contactos" style="color: white;">
            <p class="textonaoimportante" style="color: white;"><b> Contatos </b></p>
            <p class="textonaoimportante" style="color: white;">
                Rua de Santa Maria, nº 253 <br />
                <br />
                291 202020 <br />
                arcanjosilva131@gmail.com
            </p>
        </div>
        <div class="redessocias" style="color: white;">
            <p class="textonaoimportante" style="color: white;"><b> Redes Sociais</b></p>
            <a class="instagram" style="color: white;" href="https://www.instagram.com/arcanjosilvaa/?hl=en">Instagram</a>
            <br />
            <a class="instagram" style="color: white;" href="https://www.tiktok.com/@arcanjosilvaa?lang=en">Tik Tok</a>
        </div>
    </footer>
@endsection
