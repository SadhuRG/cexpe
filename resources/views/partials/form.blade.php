@csrf

<div style="border: 3px solid #ccc; padding: 20px; width: 33%; margin-top: 20px; box-sizing: border-box; text-align: center;">

    <ul style="list-style-position: inside; padding: 0; text-align: left;">

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="cPerNombre" style="margin-right: 10px;">Nombres</label>
            <input type="text" name="cPerNombre" value="{{ old('cPerNombre',$persona->cPerNombre) }}" style="flex-grow: 1;">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="cPerApellido" style="margin-right: 10px;">Apellidos</label>
            <input type="text" name="cPerApellido" value="{{ old('cPerApellido',$persona->cPerApellido) }}" style="flex-grow: 1;">
        </li>


        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="cPerDireccion" style="margin-right: 10px;">Direccion</label>
            <input type="text" name="cPerDireccion" value="{{ old('cPerDireccion',$persona->cPerDireccion) }}" style="flex-grow: 1;">
        </li>


        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="cPerFecNac" style="margin-right: 10px;">Fecha de Nacimiento</label>
            <input type="text" name="cPerFecNac" value="{{ old('cPerFecNac',$persona->cPerFecNac) }}" style="flex-grow: 1;">
        </li>


        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="nPerEdad" style="margin-right: 10px;">Edad</label>
            <input type="text" name="nPerEdad" value="{{ old('nPerEdad',$persona->nPerEdad) }}" style="flex-grow: 1;">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="cPerSexo" style="margin-right: 10px;">Sexo</label>
            <input type="text" name="cPerSexo" value="{{ old('cPerSexo',$persona->cPerSexo) }}" style="flex-grow: 1;">
        </li>

        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="nPerSueldo" style="margin-right: 10px;">Sueldo</label>
            <input type="text" name="nPerSueldo" value="{{ old('nPerSueldo',$persona->nPerSueldo) }}" style="flex-grow: 1;">
        </li>


        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="cPerRnd" style="margin-right: 10px;">RND</label>
            <input type="text" name="cPerRnd" value="{{ old('cPerRnd',$persona->cPerRnd) }}" style="flex-grow: 1;">
        </li>


        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="cPerEstado" style="margin-right: 10px;">Estado</label>
            <input type="text" name="cPerEstado" value="{{ old('cPerEstado',$persona->cPerEstado) }}" style="flex-grow: 1;">
        </li>


        <li style="display: flex; justify-content: center; margin-top: 20px;">
            <button type="submit" style="padding: 10px 20px;">{{ $btnText}}</button>
        </li>
    </ul>
</div>