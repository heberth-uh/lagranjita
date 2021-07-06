<div class="field">
    <label class="label">Nombre:</label>
    <div class="control">
        <input class="input" value="{{isset( $empleado->Nombre)?$empleado->Nombre:"" }}" "type="text" placeholder="Ingrese el nombre del empleado" name="nombre">
    </div>
</div>
<div class="field">
    <label class="label">Apellido Paterno:</label>
    <div class="control">
        <input class="input" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:""}}" type="text" placeholder="Ingrese los Apellido Paterno del empleado" name="apellidoPaterno">
    </div>
</div>
<div class="field">
    <label class="label">Apellido Materno:</label>
    <div class="control">
        <input class="input" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:""}}"type="text" placeholder="Ingrese los Apellido Materno del empleado" name="apellidoMaterno">
    </div>
</div>
<div class="field">
    <label class="label">Correo</label>
    <div class="control">
        <input class="input" value="{{isset($empleado->Email)?($empleado->Email):""}}" type="email" placeholder="Ingrese el correo del empleado" name="correo">
    </div>
</div>
<div class="field">
    <label class="label">Teléfono:</label>
    <div class="control">
        <input class="input" value="{{isset( $empleado->Correo)?$empleado->Correo:""}}" type="text" placeholder="Ingrese el telefono del empleado" name="telefono">
    </div>
</div>
<div class="field">
    <label class="label">Turno</label>
    <div class="control">
        <div class="select">
            <select class="form-control" name="turno">
                <option value="Matutino" {{ $empleado->Turno == "Matutino" ? "selected" : "" }}>Matutino</option>
                <option value="Vespertino" {{ $empleado->Turno == "Vespertino" ? "selected" : "" }}>Vespertino</option>
            </select>
        </div>
    </div>
</div>       
<div class="field">
    <label class="label">Imagen del producto (opcional)</label>
    <div class="file has-name">
        <label class="file-label">
            <input class="file-input" value="" type="file" name="Imagen"
                accept="image/png, image/jpeg, image/jpg">
            <span class="file-cta">
                <span class="file-icon">
                    <i class="fas fa-upload"></i>
                </span>
                < <span class="file-label">
                    Choose a file…
            </span>
            <span class="file-name">
                <img  class="is-rounded" src="{{asset('storage').'/'. $empleado->Imagen}}" alt="Ilustración del empleado"> 
            </span>
            </span>
        </label>
    </div>
</div>

<div class="field is-grouped">
    <div class="control">
        <button class="button is-link">Guardar</button>
    </div>
    <div class="control">
        <button class="button is-link is-light">Cancelar</button>
    </div>
</div>