Index Proyecto
<br>
<br>
<a href="{{url('empleado/create')}}">Registrar nuevo empleado</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fotografia</th>

            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Correo }}</td>

            <td>{{ $empleado->Fotografia }}</td>
            <td> 
            <td> <img src="{{ asset('storage').'/'.$empleado->Fotografia}}" alt="100" width="100"></td>
            <td>
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}"> Editar</a>

                <form action="{{url('/empleado/'.$empleado->id ) }}" method="post">
                 @csrf
                 {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Realmente desea borrar el registo?')" value="Borrar">     
            </form> 
         </td>

        </tr>
        @endforeach
    </tbody>
</table>


