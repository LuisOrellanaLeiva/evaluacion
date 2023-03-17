@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="text-center mb-3">Colaboradores asociados</h3>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-striped table-bordered mt-4" style="width:100%" id="profiles">

        <thead class="thead">
            <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Estado</th>
                <th>Perfil</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evaluados as $profile)
                <tr>
                    <td>{{ $profile->rut }}</td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->user->email }}</td>
                    <td>{{ $profile->cargo->name }}</td>
                    <td>{{ $profile->estado ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $profile->user->getRoleNames()->first() ?? 'No aplica' }}</td>
                    <td>
                        <div class="btn-group">
                        <a href="{{ route('evaluacion.form',$profile->id) }}" class="btn btn-success m-2">Evaluar</a>
                        </div>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

</div>

@section('javascript')
<script type="text/javascript">
$(document).ready(function () {
    $('#profiles').DataTable({
        responsive:true,
        autoWidth:false
    });
});
</script>
@endsection

@endsection
