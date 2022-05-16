@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a class="btn btn-primary" href="{{ route('favoritos.index') }}">Mis Favoritos</a>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Favoritos Publicos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Encuentra aquí los ultimos sitios favoritos') }}
                    <div class="card">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Url</th>
										<th>Titulo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($favoritos as $favorito)
                                    @if($favorito->visibilidad === 'Publico')
                                        <tr>                                            
											<td>{{ $favorito->url }}</td>
											<td>{{ $favorito->titulo }}</td>
                                        </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
