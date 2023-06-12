@extends('../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <h2 class="text-center">Actualizar constancia de horas de liberación <i class="fa-solid fa-user-plus"></i> </h2>
                <form action="{{ route('actualizarConstancias', $items->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="">Estudiante</label>
                    <select name="estudiante" class="form-control" required>
                        <option value="">Selecciona el estudiante</option>
                        @foreach ($items2 as $estudiante)
                            @if ($estudiante->id == $items->id_alumnos)
                            <option value="{{$estudiante->id}}" selected>
                                {{$estudiante->nombre}}
                                {{$estudiante->paterno}}
                                {{$estudiante->materno}}
                            </option>
                            @else
                            <option value="{{$estudiante->id}}">
                                {{$estudiante->nombre}}
                                {{$estudiante->paterno}}
                                {{$estudiante->materno}}
                            </option>
                            @endif
                        @endforeach
                    </select>
                    <label for="">Número de control</label>
                    <select name="control" class="form-control" required>
                        <option value="">Selecciona el número de control</option>
                        @foreach ($items2 as $control)
                            @if ($control->id == $items->id_alumnos)
                            <option value="{{$control->id}}" selected>
                                {{$control->control}}
                            </option>
                            @else
                            <option value="{{$control->id}}">
                                {{$control->control}}
                            </option>
                            @endif
                        @endforeach
                    </select>
                    <label for="">Periodo Escolar</label>
                    <select name="periodo" class="form-control" required>
                        <option value="">Selecciona el periodo escolar</option>
                        @foreach ($items4 as $periodo)
                            @if ($periodo->id == $items->id_periodos)
                                <option value="{{$periodo->id}}" selected>
                                    {{$periodo->nombre}}
                                </option>
                            @else
                            <option value="{{$periodo->id}}">
                                {{$periodo->nombre}}
                            </option>
                            @endif
                        @endforeach
                    </select>
                    <label for="">Actividad</label>
                    <input type="text" name="actividad" class="form-control" required value="{{ $items->actividad }}">
                    <label for="">Fecha</label>
                    <input type="date" name="fecha" class="form-control" required value="{{ $items->fecha }}">
                    <label for="">Grupo</label>
                    <input type="text" name="grupo" class="form-control" required value="{{ $items->grupo }}">
                    <label for="">Hrs. Acreditadas</label>
                    <input type="text" name="hrsAcreditadas" class="form-control" required value="{{ $items->hrsAcreditadas }}">
                    <button class="btn btn-outline-warning mt-3">Actualizar <i class="fa-solid fa-pen-to-square"></i></button>
                    <a href="{{ route('constancia') }}" class="btn btn-outline-secondary mt-3"> <i class="fa-solid fa-rotate-left"></i> Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection