@extends('../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <h2 class="text-center">Editar estudiante <i class="fa-solid fa-user-pen"></i> </h2>
                <form action="{{ route('update', $items->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="">Nombre(s)</label>
                    <input type="text" class="form-control" name="nombre" required value="{{ $items->nombre }}">
                    <label for="">Apellido Paterno</label>
                    <input type="text" class="form-control" name="paterno" required value="{{ $items->paterno }}">
                    <label for="">Apellido Materno</label>
                    <input type="text" class="form-control" name="materno" required value="{{ $items->materno }}">
                    <label for="">Número de control</label>
                    <input type="tel" maxlength="9" onkeypress="return valideKey(event);" class="form-control" name="control" value="{{$items->control}}" required>
                    <label for="">Telefono celular</label>
                    <input type="tel" maxlength="10" onkeypress="return valideKey(event);" class="form-control" name="celular" value="{{$items->celular}}" required>
                    <label for="">Elige tu carrera</label>
                    <label for="">Carrera</label>
                    <select name="carrera" id="carrera" class="form-control">
                        <option value="">Selecciona la carrera</option>
                        @foreach ($items2 as $carrera)
                            @if ($carrera->id == $items->id_carrera)
                                <option value="{{$carrera->id}}" selected>
                                    {{$carrera->nombre}}
                                </option>
                            @else
                            <option value="{{$carrera->id}}">
                                {{$carrera->nombre}}
                            </option>
                            @endif
                        @endforeach
                    </select>
                    <label for="">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nac" value="{{$items->fecha_nac}}" required>
                    <label for="">Escuela de procedencia</label>
                    <input type="text" class="form-control" name="procedencia" value="{{$items->procedencia}}" required>
                    <label for="">Fecha de ingreso</label>
                    <input type="date" class="form-control" name="fecha_ingreso" value="{{$items->fecha_ingreso}}" required>
                    <button class="btn btn-outline-warning mt-3"> Actualizar <i class="fa-solid fa-pen-to-square"></i> </button>
                    <a href="{{ route('lista') }}" class="btn btn-outline-info mt-3">Regresar <i class="fa-solid fa-rotate-left"></i> </a>
                </form>
            </div>
        </div>
    </div>
@endsection