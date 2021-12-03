
  <label for="Nombre" text-align="center"> Nombre:</label>
    <br>
    <input  type="text"  name="Nombre" class ="form-control" id=Nombre placeholder="Pedro Lopez" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" > 
    
    <br>
    <br>
    <label for="Correo">  Correo electrónico</label>
    <br>
    <input  type="email"  name="Correo" id=Correo placeholder="pedrito@gmail.com" value="{{isset($empleado->Correo)?$empleado->Correo:''}}"> <br>
    <br>

    <label for="Telefono"> Teléfono</label>
    <br>
    <input  type="text" name="Telefono" id=Telefono value="{{isset($empleado->Telefono)?$empleado->Telefono:''}}"> <br>
    <br>

    <label for="Fotografia"> Fotografía</label>

    @if (isset($empleado->Fotografia))
    <img src="{{ asset('storage').'/'.$empleado->Fotografia}}" alt="100" width="100" >
    @endif
    <input  type="file" name="Fotografia" id=Fotografia value=""> <br>
    <br>
    
    <input type="submit"  value="Guardar" >
    <br>
    <br>
   <!-- <a href="{{url('empleado/create')}}">Regresar</a>
-->
<a href="{{url('empleado/create')}}">Regresar</a>
  </section>
  
