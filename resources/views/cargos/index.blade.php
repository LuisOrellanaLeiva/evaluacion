@extends('layouts.app')
@section('content')
<div class="container">

    <h4 class="text-center">Lista de cargos</h4>
    <br/>

    <table class="table table-striped table-bordered mt-4" style="width:100%" id="cargos">

        <thead class="thead">
            <tr>
                <th>Nº</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargos as $cargo)
                <tr>
                    <td>{{ $cargo->id }}</td>
                    <td>{{ $cargo->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@section('javascript')
<script type="text/javascript">
$(document).ready(function () {
    $('#cargos').DataTable();
});
</script>
@endsection

@endsection
