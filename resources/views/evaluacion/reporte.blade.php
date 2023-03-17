<table class="table table-striped table-bordered" style="width:100%">
    <thead class="thead">
        <tr>
            <th>Jefe</th>
            <th>Colaborador</th>
            <th>Pregunta1</th>
            <th>Pregunta2</th>
            <th>Pregunta3</th>
            <th>Pregunta4</th>
            <th>Pregunta5</th>
            <th>Pregunta6</th>
            <th>Nota Final</th>
            <th>Fecha</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($evaluations as $ev)
            <tr>
                <td>{{ $ev->profile->jefes->first()->name }}</td>
                <td>{{ $ev->profile->name }}</td>
                <td>{{ $ev->pregunta1 }}</td>
                <td>{{ $ev->pregunta2 }}</td>
                <td>{{ $ev->pregunta3 }}</td>
                <td>{{ $ev->pregunta4 }}</td>
                <td>{{ $ev->pregunta5 }}</td>
                <td>{{ $ev->pregunta6 }}</td>
                <td>{{ $ev->nota_final }}</td>
                <td>{{ date('d - m - Y' , strtotime($ev->created_at))  }}</td>
            </tr>

        @endforeach
    </tbody>
</table>
