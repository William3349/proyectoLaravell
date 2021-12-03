

<H2>Crear Empleado</H2>
VISTA EMPLEADO
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf
@include('empleado.form');



</form>


