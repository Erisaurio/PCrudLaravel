<form action="{{ url('/empleado/login') }}" method="POST" enctype="multipart/form-data">
@csrf
    


    <label for="Email">Correo</label>
    <input type="text" name="Email" id="Email">
    <br>
    <label for="Password">Password</label>
    <input type="text" name="Password" id="Password">
    <br>
    <input type="submit" value="Enviar">
    <br>


</form>