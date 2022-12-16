@extends('layouts.app')

@section('content')

    <body>
        <div class="titulo_paginas">
            <h1> Marcas -
                @if (isset($marca))
                    Editar Marca
                @else
                    Criar Marca
                @endif
            </h1>
        </div>

        <div class="detalhes">
            <p class="message">{{ session('mssg') }} </p>
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <form method="POST" enctype="multipart/form-data"
                @if (isset($marca)) action="{{ route('motas.update', $marca->id) }}"
                @else
            action="{{ route('marcas.store') }}" @endif>
                @csrf
                @if (isset($marca))
                    @method('PUT')
                @endif
                @csrf
                <label for="nome"> Nome da Marca:</label>
                <input type="text" id="nome" name="nome"
                @if (isset($marca)) value="{{ $marca->nome }}" @endif>
                <br>
                <label for="bio"> Biografia da Marca:</label>
                <input type="text" id="bio" name="bio"
                    @if (isset($marca)) value="{{ $marca->bio }}" @endif>
                <br>
                <input type="hidden" id="changed" name="changed" value="false">
                <label for="img"> Imagem da Marca:</label>
                <input type="file" id="img" name="img"
                    onchange="document.getElementById('changed').value='true';">
                @if (isset($marca))
                @endisset
                <br>
                <label for="ranking"> Ranking da Marca:</label>
                <input type="text" id="ranking" name="ranking"
                @if (isset($marca)) value="{{ $marca->ranking }}">
                <br>

                @endif>

                <input type="submit" value="Criar Marca"
                    @if (isset($marca)) value="Editar Marca"
                @else
                value="Criar Marca" @endif>
        </form>
        <a href="/marcas"> Voltar às marcas </a>

        <footer class="finalcompleto" style=" background-color: dimgrey;
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
              <a class="instagram" style="color: white;" href="https://www.instagram.com/arcanjosilvaa/?hl=en"
                >Instagram</a
              >
              <br />
              <a class="instagram" style="color: white;" href="https://www.tiktok.com/@arcanjosilvaa?lang=en"
                >Tik Tok</a
              >
            </div>
          </footer>
    </div>



</body>
@endsection
