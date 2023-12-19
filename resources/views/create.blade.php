@extends('layouts.base')

@section('content')
<div class="row" style="width:80%;margin:2.5rem auto;">
    <div class="col-12">
        <div style="display: flex;align-items: center;">
            <h2 style="color:#2d343a;font-weight:bold;letter-spacing:1px;background-color:#F5F3F4DC;width:30%;padding:0.5rem 0.8rem;margin:1rem 0.2rem;border-radius:10px">Crear Tarea</h2>
  
            <a href="{{route('tasks.index')}}" class="btn btn-primary" style="margin:0rem 4rem;">Volver</a>
        </div>
    </div>
 

    @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <strong>Losentimos algo no funcionó bien</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{route('tasks.store')}}" method="POST">
        @csrf 
        <!--
            Cross-site Request Forgery, es una medida de seguridad utilizada para proteger las aplicaciones web de ataques
            maliciosos.
            El token es un valor unico y secreto que se genera para cada formulario de la aplicación.
            Al enviar un formulario, el token se envia junto con los datos,
            y en laravel verifica si coincidde el token almacenado con el servidor. Si no coinciden o falta el token, Laravel rechaza la peticion de solicitud,
            ya que podria ser un intento de falsificación de petición de petición en el sitio. Ayuda a garantizar que las peticiones sean seguras, legitimas y verificadas por la aplicación.
        -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2" >
                <div class="form-group">
                    <strong style="color:#2d343a;background-color:#F5F3F4DC;padding:0.2rem 0.5rem;margin:0rem 0rem 1rem 0rem;">Tarea:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Tarea" style="margin: 0.6rem 0rem 1rem 0rem;" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong style="color:#2d343a;background-color:#F5F3F4DC;padding:0.2rem 0.5rem;margin:0rem 0rem 1rem 0rem;">Descripción:</strong>
                    <textarea class="form-control" name="description" placeholder="Descripción..." style="margin: 0.6rem 0rem 1rem 0rem;"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong style="color:#2d343a;background-color:#F5F3F4DC;padding:0.2rem 0.5rem;margin:0rem 0rem 1rem 0rem;">Fecha límite:</strong>
                    <input type="date" name="due_date" class="form-control" id="" style="margin: 0.6rem 0rem 1rem 0rem;">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong style="color:#2d343a;background-color:#F5F3F4DC;padding:0.2rem 0.5rem;margin:0rem 0rem 1rem 0rem;">Estado (inicial):</strong>
                    <select name="status" class="form-select" id="" style="margin: 0.6rem 0rem 1rem 0rem;">
                        <option value="">-- Elige el status --</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="En progreso">En progreso</option>
                        <option value="Completada">Completada</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection