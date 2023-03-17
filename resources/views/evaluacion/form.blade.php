@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row">

        <!-- Formulario evaluacion -->
        <div class="col-sm-8 ">
            <form action="{{ route('evaluacion.store') }}" class="needs-validation" novalidate method="POST" id="formEv">
                @csrf
                <h4 class="mt-4 text-center">Categoria 1</h4>
                <br />
                <input type="hidden" name="profile_id" id="profile_id" value="{{ $profile->id }}">

                <label for="pregunta1">Demostró proactividad en diversas actividades tanto dentro como fuera de su proyecto.</label>
                <select name="pregunta1" id="pregunta1" class="form-select" required selected="{{ $evaluacion?->pregunta1 }}">
                    <option selected disabled value="">Seleccione una opción</option>
                    <option value="1" @if ($evaluacion?->pregunta1 == 1) selected @endif>Por debajo de las expectativas</option>
                    <option value="2" @if ($evaluacion?->pregunta1 == 2) selected @endif>Raramente observada</option>
                    <option value="3" @if ($evaluacion?->pregunta1 == 3) selected @endif>Observada</option>
                    <option value="4" @if ($evaluacion?->pregunta1 == 4) selected @endif>Observada constantemente</option>
                    <option value="5" @if ($evaluacion?->pregunta1 == 5) selected @endif>Excede las expectativas</option>
                </select>

                <br>

                <label for="pregunta2">Comunica eficazmente su punto de vista y expectativas.</label>
                <select id="pregunta2" name="pregunta2" class="form-select" required selected="{{ $evaluacion?->pregunta2 }}">
                    <option selected disabled value="">Seleccione una opción</option>
                    <option value="1" @if ($evaluacion?->pregunta2 == 1) selected @endif>Por debajo de las expectativas</option>
                    <option value="2" @if ($evaluacion?->pregunta2 == 2) selected @endif>Raramente observada</option>
                    <option value="3" @if ($evaluacion?->pregunta2 == 3) selected @endif>Observada</option>
                    <option value="4" @if ($evaluacion?->pregunta2 == 4) selected @endif>Observada constantemente</option>
                    <option value="5" @if ($evaluacion?->pregunta2 == 5) selected @endif>Excede las expectativas</option>
                </select>

                <br>

                <label for="pregunta3">Mostró interés en escuchar y abordar problemas compartidos por sus compañeros.</label>
                <select id="pregunta3" name="pregunta3" class="form-select" aria-label="Default select example" required>
                    <option selected disabled value="">Seleccione una opción</option>
                    <option value="1" @if ($evaluacion?->pregunta3 == 1) selected @endif>Por debajo de las expectativas</option>
                    <option value="2" @if ($evaluacion?->pregunta3 == 2) selected @endif>Raramente observada</option>
                    <option value="3" @if ($evaluacion?->pregunta3 == 3) selected @endif>Observada</option>
                    <option value="4" @if ($evaluacion?->pregunta3 == 4) selected @endif>Observada constantemente</option>
                    <option value="5" @if ($evaluacion?->pregunta3 == 5) selected @endif>Excede las expectativas</option>
                </select>

                <br>

                <h4 class="text-center">Categoria 2</h4>
                <br />

                <label for="pregunta4">Se ofreció para proporcionar formación continua en el área de Informatica.</label>
                <select id="pregunta4" name="pregunta4" class="form-select" aria-label="Default select example" required selected="{{ $evaluacion?->pregunta4 }}">
                    <option selected disabled value="">Seleccione una opción</option>
                    <option value="1" @if ($evaluacion?->pregunta4 == 1) selected @endif>Por debajo de las expectativas</option>
                    <option value="2" @if ($evaluacion?->pregunta4 == 2) selected @endif>Raramente observada</option>
                    <option value="3" @if ($evaluacion?->pregunta4 == 3) selected @endif>Observada</option>
                    <option value="4" @if ($evaluacion?->pregunta4 == 4) selected @endif>Observada constantemente</option>
                    <option value="5" @if ($evaluacion?->pregunta4 == 5) selected @endif>Excede las expectativas</option>
                </select>

                <br>

                <label for="pregunta5">Desarrolló estrategias exitosas relacionadas con tareas administrativas como “X” que produjeron buenos resultados.</label>
                <select id="pregunta5" name="pregunta5" class="form-select" aria-label="Default select example" required selected="{{ $evaluacion?->pregunta5 }}">
                    <option selected disabled value="">Seleccione una opción</option>
                    <option value="1" @if ($evaluacion?->pregunta5 == 1) selected @endif>Por debajo de las expectativas</option>
                    <option value="2" @if ($evaluacion?->pregunta5 == 2) selected @endif>Raramente observada</option>
                    <option value="3" @if ($evaluacion?->pregunta5 == 3) selected @endif>Observada</option>
                    <option value="4" @if ($evaluacion?->pregunta5 == 4) selected @endif>Observada constantemente</option>
                    <option value="5" @if ($evaluacion?->pregunta5 == 5) selected @endif>Excede las expectativas</option>
                </select>

                <br>

                <label for="pregunta6">Trata de innovar incluso en condiciones adversas.</label>
                <select id="pregunta6" name="pregunta6" class="form-select" aria-label="Default select example" required selected="{{ $evaluacion?->pregunta6 }}">
                    <option selected disabled value="">Seleccione una opción</option>
                    <option value="1" @if ($evaluacion?->pregunta6 == 1) selected @endif>Por debajo de las expectativas</option>
                    <option value="2" @if ($evaluacion?->pregunta6 == 2) selected @endif>Raramente observada</option>
                    <option value="3" @if ($evaluacion?->pregunta6 == 3) selected @endif>Observada</option>
                    <option value="4" @if ($evaluacion?->pregunta6 == 4) selected @endif>Observada constantemente</option>
                    <option value="5" @if ($evaluacion?->pregunta6 == 5) selected @endif>Excede las expectativas</option>
                </select>
                <br>
                @include('evaluacion.modal')

                <button disabled id="submitBtn" class="btn btn-success mb-3 mt-3" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Revisar</button>

                {{-- <button type="button" class="btn btn-primary" >
                    Guardar
                </button> --}}

            </form>
        </div>
        <!-- END Formulario evaluacion -->

        <!-- Carta presentacion evaluado -->
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $profile->name }}</h5>
                    Rut: {{ $profile->rut }}
                </div>
            </div>
            <!-- End Carta presentacion evaluado -->


        </div>
    </div>
</div>
@endsection

@section('javascript')

<script type="text/javascript">
    $(document).on('change', '#formEv', function(event) {
        event.preventDefault();

        let profile_id = $('#profile_id').val();

        // Transformamos a formato numerico los valores del select
        let pregunta1 = parseInt($('#pregunta1').val()) ? parseInt($('#pregunta1').val()) : 0;
        let pregunta2 = parseInt($('#pregunta2').val()) ? parseInt($('#pregunta2').val()) : 0;
        let pregunta3 = parseInt($('#pregunta3').val()) ? parseInt($('#pregunta3').val()) : 0;
        let pregunta4 = parseInt($('#pregunta4').val()) ? parseInt($('#pregunta4').val()) : 0;
        let pregunta5 = parseInt($('#pregunta5').val()) ? parseInt($('#pregunta5').val()) : 0;
        let pregunta6 = parseInt($('#pregunta6').val()) ? parseInt($('#pregunta6').val()) : 0;

        //Calculamos el promedio
        let suma = pregunta1 + pregunta2 + pregunta3 + pregunta4 + pregunta5 + pregunta6;
        let promedio = (suma / 6).toFixed(1);

        let data = {
            'profile_id': profile_id,
            'pregunta1': pregunta1,
            'pregunta2': pregunta2,
            'pregunta3': pregunta3,
            'pregunta4': pregunta4,
            'pregunta5': pregunta5,
            'pregunta6': pregunta6,
            'nota_final': promedio
        }


        let r1 = $('select[name="pregunta1"] option:selected').text()
        let r2 = $('select[name="pregunta2"] option:selected').text()
        let r3 = $('select[name="pregunta3"] option:selected').text()
        let r4 = $('select[name="pregunta4"] option:selected').text()
        let r5 = $('select[name="pregunta5"] option:selected').text()
        let r6 = $('select[name="pregunta6"] option:selected').text()
        console.log(r1)

        // If valida que formulario este completado para activar boton Revisar
        if(pregunta1 && pregunta2 && pregunta3 && pregunta4 && pregunta5 && pregunta6)
        {
            $('#submitBtn').attr('disabled',false);

        }else{
            $('#submitBtn').attr('disabled',true);
        }

            $("#p1").val(r1);
            $('#p2').val(r2);
            $('#p3').val(r3);
            $('#p4').val(r4);
            $('#p5').val(r5);
            $('#p6').val(r6);
            $('#prom').val(promedio);


        // Metodo encargado de guardar respuestas en tiempo real por parte del front end
        $.ajax({
            type: "POST",
            url: "{{ route('evaluacion.realtimeStore') }}",
            data: data,
            dataType: "json",
            success: function(response) {
                console.log(response)
            }

        })

    });
</script>

<script type="text/javascript">
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection
