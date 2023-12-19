@extends('layouts.base') <!--Hereda todo el codigo base-->
@section('content')<!--Toma Lugar en Yield de base-->
    <div class="row" style="margin:1rem 0rem;">
        <div class="col-12">
            <div>
                <h2 class="text-white" style="background-color:#adb5bd;width:25%;padding:0.7rem 0.7rem;text-shadow:1px 1px 1px #000;border-radius:10px;margin-bottom:2rem">Lista de Tareas</h2>
            </div>
            <div>
                <a href="{{ route('tasks.create') }}" style="background-color:#2c7da0; text-decoration:none;color:#fff;padding:0.2rem 1rem;border-radius:10px;text-shadow:1px 1px 1px #000;">Crear tarea</a>
            </div>
        </div>
        @if (Session::get('success'))
            <div class="alert alert-success mt-2">
                <strong>{{ Session::get('success') }}</strong><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div style="background-color:#F5F3F4DC;padding:1.5rem 3rem;border-radius:20px;"class="col-12 mt-4">
            <table class="table table-bordered border border-dark text-black">
                <tr class="text-black">
                    <th style="letter-spacing: 1px;">Tarea</th>
                    <th style="letter-spacing: 1px;">Descripción</th>
                    <th style="letter-spacing: 1px;">Fecha</th>
                    <th style="letter-spacing: 1px;">Estado</th>
                    <th style="letter-spacing: 1px;">Acción</th>
                </tr>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="fw-bold">{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            {{ $task->due_date }}
                        </td>
                        <td>
                            @if ($task->status == 'Pendiente')
                                <span style="background-color:#6c757d;color:#fff;padding:0.2rem 1rem;border-radius:10px;text-shadow:1px 1px 1px #000">Pendiente</span>
                            @elseif($task->status == 'En Progreso')
                                <span style="background-color:#ffc812;color:#fff;padding:0.2rem 1rem;border-radius:10px;text-shadow:1px 1px 1px #000">En Progreso</span>
                            @elseif($task->status == 'Completada')
                                <span style="background-color:#38b000;color:#fff;padding:0.2rem 1rem;border-radius:10px;text-shadow:1px 1px 1px #000" >Completada</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('tasks.edit', ['task' => $task]) }}" class="btn btn-warning">Editar</a>

                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $tasks->links() }}
        </div>
    </div>
@endsection
