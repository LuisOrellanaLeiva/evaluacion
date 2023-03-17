@extends('layouts.app')
@section('content')

<div class="container">

    <h4 class="text-center">Listado de evaluaciones</h4>

    <div>
    <a href="{{ route('evaluacion.export') }}" class="btn btn-outline-success ">Generar Reporte</a>
    </div>
    <br/>

    <table class="table table-striped table-bordered" style="width:100%" id="evaluados">

        <thead class="thead">
            <tr>
                <th>Nº</th>
                <th>Jefe</th>
                <th>Colaborador</th>
                <th>Nota Final</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evaluaciones as $ev)
                <tr>
                    <td>{{ $ev->id }}</td>
                    <td>{{ $ev->profile->jefes->first()->name }}</td>
                    <td>{{ $ev->profile->name }}</td>
                    <td>{{ $ev->nota_final }}</td>
                    <td>{{ date('d - m - Y' , strtotime($ev->created_at))  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



</div>

@section('javascript')
<script type="text/javascript">
$(document).ready(function(){
    $('#evaluados').DataTable({
        responsive:true,
        autoWidth:false
    })


});
</script>
@endsection
@endsection


