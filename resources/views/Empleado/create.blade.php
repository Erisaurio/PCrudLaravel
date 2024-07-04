<form action="{{ url('/empleado') }}" method="POST" enctype="multipart/form-data">
@csrf
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
    <br>
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno">
    <br>
    <label for="Email">Correo</label>
    <input type="text" name="Email" id="Email">
    <br>
    <label for="Password">Password</label>
    <input type="text" name="Password" id="Password">
    <br>
    <input type="submit" value="Enviar">
    <br>
</form>