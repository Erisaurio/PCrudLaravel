<form action="{{ url('/empleado/'.$empleado->id) }}" method="POST" enctype="multipart/form-data">
@csrf
    {{ method_field('PATCH') }}
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre" value="{{ $empleado->Nombre }}">
    <br>
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}">
    <br>
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno}}">
    <br>
    <label for="Email">Correo</label>
    <input type="text" name="Email" id="Email" value="{{ $empleado->Email }}">
    <br>
    <label for="Password">Password</label>
    <input type="text" name="Password" id="Password" value="{{ $empleado->Password }}">
    <br>
    <input type="submit" value="Enviar">
    <br>

</form>