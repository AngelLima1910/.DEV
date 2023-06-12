@extends('../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <h2 class="text-center">Agregar nueva constancia de horas de liberación <i class="fa-solid fa-user-plus"></i> </h2>
                <form action="{{ route('guardarConstancia') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <label for="">Estudiante</label>
                    <select name="estudiante" class="form-control" required>
                        <option value="">Selecciona el estudiante</option>
                        @foreach ($items2 as $item2)
                            <option value="{{$item2->id}}">
                                {{$item2->nombre}}
                                {{$item2->paterno}}
                                {{$item2->materno}}
                            </option>
                        @endforeach
                    </select>
                    <label for="">Número de control</label>
                    <select name="control" class="form-control" required>
                        <option value="">Selecciona el número de control</option>
                        @foreach ($items2 as $item2)
                            <option value="{{$item2->id}}">
                                {{$item2->control}}
                            </option>
                        @endforeach
                    </select>
                    <label for="">Periodo Escolar</label>
                    <select name="periodo" class="form-control" required>
                        <option value="">Selecciona el periodo escolar</option>
                        @foreach ($items4 as $item4)
                            <option value="{{$item4->id}}">
                                {{$item4->nombre}}
                            </option>
                        @endforeach
                    </select>
                    <label for="">Actividad</label>
                    <input type="text" name="actividad" class="form-control" required>
                    <label for="">Fecha</label>
                    <input type="date" name="fecha" class="form-control" required>
                    <label for="">Grupo</label>
                    <input type="text" name="grupo" class="form-control" required>
                    <label for="">Hrs. Acreditadas</label>
                    <input type="text" name="hrsAcreditadas" class="form-control" required>
                    <button class="btn btn-outline-primary mt-3">Guardar <i class="fa-solid fa-user-plus"></i> </button>
                    <a href="{{ route('constancia') }}" class="btn btn-outline-secondary mt-3"><i class="fa-solid fa-rotate-left"></i> Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection