@extends('../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">            
            <div class="col">
                <br><br><br>
                <h2 class="text-center">Estudiantes</h2>
                <a href="{{ route('agregarEstudiante') }}" class="btn btn-primary">Agregar nuevo estudiante</a>
                <table class="table table-sm">
                    <thead>
                        <th>Nombre Completo</th>
                        <th>Número de control</th>
                        <th>Teléfono celular</th>
                        <th>Carrera</th>
                        <th>Fecha de nacimiento</th>
                        <th>Escuela de procedencia</th>
                        <th>Fecha de ingreso</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->control }}</td>
                                <td>{{ $item->celular }}</td>
                                <td>{{ $item->carrera }}</td>
                                <td>{{ $item->fecha_nac }}</td>
                                <td>{{ $item->procedencia }}</td>
                                <td>{{ $item->fecha_ingreso }}</td>
                                <td>
                                    <a href="{{route('edit', $item->id)}}" class="btn btn-outline-warning">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('show', $item->id)}}" class="btn btn-outline-danger">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection