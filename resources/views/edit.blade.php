@extends('layouts.base')

@section('content')
<div class="row" style="width:80%;margin:2.5rem auto;">
    <div class="col-12">
        <div style="display: flex;align-items: center;">
            <h2 style="color:#2d343a;font-weight:bold;letter-spacing:1px;background-color:#F5F3F4DC;width:35%;padding:0.5rem 0.8rem;margin:1rem 0.2rem;border-radius:10px">Editar Tarea</h2>
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
    <form action="{{route('tasks.update',$task)}}" method="POST">
        @csrf 
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong style="color:#2d343a;background-color:#F5F3F4DC;padding:0.2rem 0.5rem;margin:0rem 0rem 1rem 0rem;">Tarea:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Tarea" value="{{$task->title}}" style="margin: 0.6rem 0rem 1rem 0rem;">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong style="color:#2d343a;background-color:#F5F3F4DC;padding:0.2rem 0.5rem;margin:0rem 0rem 1rem 0rem;">Descripción:</strong>
                    <textarea class="form-control" name="description" placeholder="Descripción"style="margin: 0.6rem 0rem 1rem 0rem;">{{$task->description}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong style="color:#2d343a;background-color:#F5F3F4DC;padding:0.2rem 0.5rem;margin:0rem 0rem 1rem 0rem;">Fecha límite:</strong>
                    <input type="date" name="due_date" value="{{$task->due_date}}" class="form-control" style="margin: 0.6rem 0rem 1rem 0rem;">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong style="color:#2d343a;background-color:#F5F3F4DC;padding:0.2rem 0.5rem;margin:0rem 0rem 1rem 0rem;">Estado (inicial):</strong>
                    <select name="status" class="form-select" style="margin: 0.6rem 0rem 1rem 0rem;">
                        <option value="">-- Elige el status --</option>
                        <option value="Pendiente" @selected("Pendiente" == $task->status)>Pendiente</option>
                        <option value="En progreso" @selected("En Progreso" == $task->status)>En progreso</option>
                        <option value="Completada" @selected("Completada" == $task->status)>Completada</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection