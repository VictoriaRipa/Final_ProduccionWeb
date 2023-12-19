<?php
include_once "header.php";
?>
<div class="central">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card p-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                    <input type="email" class="form-control" placeholder="Ingresa tu email" aria-label="Email"
                        aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Contraseña</span>
                    <input type="password" class="form-control" placeholder="Ingresa tu contraseña"
                        aria-label="Contraseña" aria-describedby="basic-addon2">
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="profile-pic" aria-label="Sube tu foto de perfil">
                    <label class="input-group-text" for="profile-pic">Sube tu foto de perfil</label>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Teléfono</span>
                    <input type="text" class="form-control" placeholder="Ingresa tu número de teléfono"
                        aria-label="Teléfono" aria-describedby="basic-addon3">
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="button">Cancelar</button>
                    <button class="btn btn-primary" type="button">Registrarte</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once "footer.php";
?>