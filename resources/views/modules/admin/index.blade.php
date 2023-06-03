@extends('../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">            
            <div class="col">
                <br><br><br>
                <h2 class="text-center">Lista de Estudiantes <i class="fa-solid fa-address-book"></i> </h2>
                <a href="{{ route('agregarEstudiante') }}" class="btn btn-outline-primary"> <i class="fa-solid fa-user-plus"></i></a>
                <table class="table table-sm display responsive nowrap mt-4" style="width: 100%" id="table">
                    <thead>
                        <th class="text-center">Nombre(s)</th>
                        <th class="text-center">Apellido Paterno</th>
                        <th class="text-center">Apellido Materno</th>
                        <th class="text-center">Número de control</th>
                        <th class="text-center">Teléfono celular</th>
                        <th class="text-center">Carrera</th>
                        <th class="text-center">Edad</th>
                        <th class="text-center">Escuela de procedencia</th>
                        <th class="text-center">Fecha de ingreso</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td class="text-center">{{ $item->nombreAlumno }}</td>
                                <td class="text-center">{{ $item->apellidoPaterno }}</td>
                                <td class="text-center">{{ $item->apellidoMaterno }}</td>
                                <td class="text-center">{{ $item->numeroControl }}</td>
                                <td class="text-center">{{ $item->celular }}</td>
                                <td class="text-center">{{ $item->carrera }}</td>
                                <td class="text-center">{{ $item->fechaNac }}</td>
                                <td class="text-center">{{ $item->procedencia }}</td>
                                <td class="text-center">{{ $item->ingreso }}</td>
                                <td class="text-center">
                                    <a href="{{route('edit', $item->id)}}" class="btn btn-outline-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="{{route('show', $item->id)}}" class="btn btn-outline-danger">
                                        <i class="fa-solid fa-trash"></i>
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