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
                    <label for="">Nombre(s)</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingresa tú nombre" required>
                    <label for="">Apellido Paterno</label>
                    <input type="text" class="form-control" name="paterno" placeholder="Ingresa tú apellido paterno" required>
                    <label for="">Apellido Materno</label>
                    <input type="text" class="form-control" name="materno" placeholder="Ingresa tú apellido materno" required>
                    <label for="">Número de control</label>
                    <input type="tel" maxlength="9" onkeypress="return valideKey(event);" class="form-control" name="control" placeholder="Ingresa el número de control" required>
                    <label for="">Telefono celular</label>
                    <input type="tel" maxlength="10" onkeypress="return valideKey(event);" class="form-control" name="celular" placeholder="Ingresa el número telefonico" required>
                    <label for="">Carrera</label>
                    <select name="carrera" id="carrera" class="form-control">
                        <option value="">Selecciona la carrera</option>
                        @foreach ($items as $item)
                            <option value="{{$item->id}}">
                                {{$item->nombre}}
                            </option>
                        @endforeach
                    </select>
                    <label for="">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nac" required>
                    <label for="">Escuela de procedencia</label>
                    <input type="text" class="form-control" name="procedencia" placeholder="Ingresa la escuela de procedencia" required>
                    <label for="">Fecha de ingreso</label>
                    <input type="date" class="form-control" name="fecha_ingreso" required>
                    <button class="btn btn-outline-primary mt-3"> <i class="fa-solid fa-user-plus"></i> Agregar</button>
                    <a href="{{ route('lista') }}" class="btn btn-outline-info mt-3"> <i class="fa-solid fa-rotate-left"></i> Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection