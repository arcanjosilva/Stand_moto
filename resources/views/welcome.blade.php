@extends('layouts.app')

@section('content')

    <body>
        <div class="titulo_paginas">
            <h1> STAND DE MOTOS - WELCOME </h1>
        </div>

        <div class="imagemwelcome" style="display: flex;justify-content: center; padding-top:40px;width: 100%;">
            <div class="img">
            <img src="/img/loja.jpg" alt="loja/img">
        </div>
        </div>
        <div class="botoeswelcome" style="display: flex;justify-content: space-around;">
            <a href="{{route('motas.index')}}"> Ver Motas </a>
            <a href="{{route('marcas.index')}}">Ver Marcas </a>
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
