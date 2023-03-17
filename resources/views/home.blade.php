@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h4>Bienvenido : {{ Auth::user()->profile->name }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center">
                    @if (Auth::user()->hasRole('Admin'))
                        <p>Como administrador podras: </p>
                        <p> - Ver cargos del sistema</p>
                        <p> - Ver usuarios del sistema </p>
                        <p> - Ver evaluaciones realizadas y generar un reporte completo de estas</p>
                    @endif


                    @if (Auth::user()->hasRole('Evaluador'))
                        <p>Como evaluador podras:</p>
                        <p> - Visualizar colaboradores asignados</p>
                        <p> - Evaluar colaboradores </p>
                    @endif
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
