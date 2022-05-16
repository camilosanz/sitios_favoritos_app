@extends('layouts.app')

@section('template_title')
    {{ $favorito->name ?? 'Show Favorito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Favorito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('favoritos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $favorito->url }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $favorito->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $favorito->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $favorito->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $favorito->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Visibilidad:</strong>
                            {{ $favorito->visibilidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
