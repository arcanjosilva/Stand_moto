@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('INICIOU SESSÃO - ESCOLHA O QUE QUER FAZER:') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('marcas.create')}}"> Criar Marca </a>
                    <br>
                    <a href="{{route('motas.create')}}">Criar Produto </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
