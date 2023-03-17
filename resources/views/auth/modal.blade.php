<!-- Modal -->
<div class="modal fade" id="recuperarContraseña" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Recuperar Contraseña</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="" method="POST" id="recuperarContraseña">
                @csrf
                <label for="email" class="form-label">Ingresa Email</label>
                <input type="email" name="email" id="email" class="form-control">
                <br>
                <button type="submit" class="btn btn-primary" id="btnRecuperar" >Buscar</button>
            </form>

            <p id="contraseñaRecuperada"></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="buscar_contraseña" class="btn btn-primary">Buscar</button>
        </div>
      </div>
    </div>
  </div>
