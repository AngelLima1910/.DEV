@extends('../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <h2 class="text-center">Agregar nuevo estudiante <i class="fa-solid fa-user-plus"></i> </h2>
                <form action="{{ route('registroNuevo') }}" method="POST">
                    @csrf
                    @method('POST')
                    <label for="">Nombre completo</label>
                    <input type="text" class="form-control" name="nombre" required>
                    <label for="">Número de control</label>
                    <input type="tel" maxlength="9" class="form-control" name="control" required>
                    <label for="">Telefono celular</label>
                    <input type="tel" maxlength="10" class="form-control" name="celular" required>
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
                    <input type="date" class="form-control" name="fecha_nac" required>
                    <label for="">Escuela de procedencia</label>
                    <input type="text" class="form-control" name="procedencia" required>
                    <label for="">Fecha de ingreso</label>
                    <input type="date" class="form-control" name="fecha_ingreso" required>
                    <button class="btn btn-primary mt-3"> <i class="fa-solid fa-user-plus"></i> Agregar</button>
                    <a href="{{ route('lista') }}" class="btn btn-info mt-3"> <i class="fa-solid fa-rotate-left"></i> Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection