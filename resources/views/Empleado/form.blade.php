
    <h1></h1>

    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">
            <ul>

             @foreach( $errors->all() as $error)
              <li> {{$error}} </li>
             @endforeach
            </ul>
        </div>
        
    @endif
    
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
