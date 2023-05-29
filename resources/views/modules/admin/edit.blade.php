@extends('../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <h2 class="text-center">Editar estudiante <i class="fa-solid fa-user-pen"></i></h2>
                <form action="{{ route('update', $items->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="">Nombre completo</label>
                    <input type="text" class="form-control" name="nombre" value="{{$items->nombre}}" required>
                    <label for="">Número de control</label>
                    <input type="tel" maxlength="9" class="form-control" name="control" value="{{$items->control}}" required>
                    <label for="">Telefono celular</label>
                    <input type="tel" maxlength="10" class="form-control" name="celular" value="{{$items->celular}}" required>
                    <label for="">Elige tu carrera</label>
                    <select class="form-select" name="carrera" required>
                        <option selected>Selecciona tu carrera</option>
                        <option value="Ing. en Sistemas Computacionales">
                            Ing. en Sistemas Computacionales
                        </option>
                        <option value="Ing. en Gestion Empresarial">
                            Ing. en Gestion Empresarial
                        </option>
                        <option value="Ing. Industrial">
                            Ing. Industrial
                        </option>
                    </select>
                    <label for="">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nac" value="{{$items->fecha_nac}}" required>
                    <label for="">Escuela de procedencia</label>
                    <input type="text" class="form-control" name="procedencia" value="{{$items->procedencia}}" required>
                    <label for="">Fecha de ingreso</label>
                    <input type="date" class="form-control" name="fecha_ingreso" value="{{$items->fecha_ingreso}}" required>
                    <button class="btn btn-warning mt-3"> Actualizar <i class="fa-solid fa-pen-to-square"></i> </button>
                    <a href="{{ route('lista') }}" class="btn btn-info mt-3">Regresar <i class="fa-solid fa-rotate-left"></i> </a>
                </form>
            </div>
        </div>
    </div>
@endsection