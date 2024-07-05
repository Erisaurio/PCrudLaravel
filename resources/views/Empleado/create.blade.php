<form action="{{ url('/empleado') }}" method="POST" enctype="multipart/form-data">
@csrf
    
   @include('Empleado.form')

</form>