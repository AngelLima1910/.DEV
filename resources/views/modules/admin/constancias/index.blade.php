@extends('../../layouts/main_admin');
@section('contenido')
    <div class="container">
        <div class="row">            
            <div class="col">
                <br><br><br>
                <h2 class="text-center">Constancias <i class="fa-solid fa-address-book"></i> </h2>
                <a href="{{ route('agregarConstancia') }}" class="btn btn-outline-primary"> <i class="fa-solid fa-user-plus"></i></a>
                <table class="table table-sm display responsive nowrap mt-4" style="width: 100%" id="table">
                    <thead>
                       <tr>
                            <th class="text-center">Nombre(s)</th>
                            <th class="text-center">Apellido Paterno</th>
                            <th class="text-center">Apellido Materno</th>
                            <th class="text-center">Número de control</th>
                            <th class="text-center">Actividad</th>
                            <th class="text-center">Grupo</th>
                            <th class="text-center">Periodo</th>
                            <th class="text-center">Horas acreditadas</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Generar constancia</th>
                            <th class="text-center">Editar</th>
                       </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->paterno}}</td>
                                <td>{{$item->materno}}</td>
                                <td>{{$item->control}}</td>
                                <td>{{$item->actividad}}</td>
                                <td>{{$item->grupo}}</td>
                                <td>{{$item->periodo}}</td>
                                <td>{{$item->horaAcreditada}}</td>
                                <td>{{$item->fecha}}</td>
                                <td><a href="{{ route('constancias.pdf', $item->id) }}" target="blank_" class="btn btn-outline-success"> <i class="fa-solid fa-print"></i> </a></td>
                                <td><a href="{{ route('editarConstancias', $item->id) }}" class="btn btn-outline-warning"> <i class="fa-solid fa-pen-to-square"></i> </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection