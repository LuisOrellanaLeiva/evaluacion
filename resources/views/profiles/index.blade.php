@extends('layouts.app')
@section('content')
<div class="container">
    <h4 class="text-center">Lista de usuarios</h4>
    <br/>
    <table class="table table-striped table-bordered mt-4" style="width:100%" id="profiles">
        <thead class="thead">
            <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Estado</th>
                <th>Perfil</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profiles as $profile)
                <tr>
                    <td>{{ $profile->rut }}</td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->user->email }}</td>
                    <td>{{ $profile->cargo->name }}</td>
                    <td>{{ $profile->estado ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $profile->user->getRoleNames()->first() ?? 'No aplica' }}</td>
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
