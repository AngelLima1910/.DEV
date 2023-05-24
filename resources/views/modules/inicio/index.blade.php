@extends('../../layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <h2>Inicio</h2>
            <div class="col">
                <a style="color:red" class="dropdown-item" href="{{ route('logout')}}"> <i class="fa-solid fa-arrow-right-from-bracket"></i> 
                    Salir
                </a>
            </div>
        </div>
    </div>
@endsection