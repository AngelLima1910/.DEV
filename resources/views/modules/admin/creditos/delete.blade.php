@extends('../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <br>
                <br>
                <h2>
                    El registro a eliminar es
                    <ul>
                        <li>Crédito: {{$items->credito}}</li>
                        <li>Mooc: {{$items->mooc}}</li>
                        <li>Evidencia o constancia: {{$items->evidencia}}</li>
                        <li>Estudiante: {{$items->estudiante}}</li>
                        <li>Periodo escolar: {{$items->periodo}}</li>
                        <li>Estatus: {{$items->estatus}}</li>
                        <li>Carpeta física: {{$items->carpeta}}</li>
                        <li>Fecha de registro: {{$items->fecha_registro}}</li>
                    </ul>
                    <form action="{{route('eliminarCreditos', $items->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/creditos" class="btn btn-outline-secondary mt-3">Regresar <i class="fa-solid fa-rotate-left"></i> </a>
                        <button class="btn btn-outline-danger mt-3">Eliminar <i class="fa-solid fa-trash"></i> </button>
                    </form>
                </h2>
            </div>
        </div>
    </div>
@endsection