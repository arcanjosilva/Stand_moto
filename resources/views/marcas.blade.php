@extends('layouts.app')

@section('content')

    <body>
        <div class="titulo_paginas">
            <h1> MARCAS DE MOTOS </h1>
        </div>
        <div class="melhoramentocontainer" style="padding-top: 20px">
            <div class="container"style="display: flex;overflow-x:scroll;box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(0, 0, 0),0.3em 1em 2em rgb(0, 0, 0);">
                @foreach ($marcas as $marca)
                <div class="boxmotaindividual" style="padding-right: 20px;">
                    <a href="{{ route('marcas.show', $marca->id) }}" style="flex-wrap:wrap-reverse">
                        <img src="{{ $marca['img'] }}" alt="img/marca" style="width: 300px;height:70%;">
                        <h2> {{ $marca['nome'] }}</h2>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </body>
    <div class="experiencia" style="padding-top: 20px">
        <footer class="finalcompleto"
            style=" background-color: dimgrey;display: flex;justify-content: space-around;padding: 25px;">
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
                <a class="instagram" style="color: white;"
                    href="https://www.instagram.com/arcanjosilvaa/?hl=en">Instagram</a>
                <br />
                <a class="instagram" style="color: white;" href="https://www.tiktok.com/@arcanjosilvaa?lang=en">Tik Tok</a>
            </div>
        </footer>
    </div>
@endsection
