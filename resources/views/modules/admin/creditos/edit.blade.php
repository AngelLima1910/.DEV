@extends('../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <h2 class="text-center">Actualizar crédito <i class="fa-solid fa-user-pen"></i> </h2>
                <form action="{{ route('actualizarArchivos', $items->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
                    <label for="">Crédito</label>
                    <select name="credito" id="credito" class="form-control" required>
                        <option value="">Selecciona el crédito</option>
                        @foreach ($items2 as $credito)
                            @if ($credito->id == $items->id_creditos)
                                <option value="{{$credito->id}}" selected>
                                    {{$credito->nombre}}
                                </option>
                            @else
                            <option value="{{$credito->id}}">
                                {{$credito->nombre}}
                            </option>
                            @endif
                        @endforeach
                    </select>
                    <label for="mooc"><b>Mooc: </b></label><br>
                    <input type="file" name="mooc" required value="/storage/{{ $items->mooc }}"><br>
                    <input class="btn btn-success" type="submit" value="Enviar"><br>
                    <label for="evidencia"><b>Evidencia o constancia: </b></label><br>
                    <input type="file" name="evidencia" required value="/storage/{{ $items->mooc }}"><br>
                    <input class="btn btn-success" type="submit" value="Enviar"><br>
                    <label for="">Estudiante</label>
                    <select name="estudiante" id="estudiante" class="form-control" required>
                        <option value="">Selecciona el estudiante</option>
                        @foreach ($items4 as $estudiante)
                            @if ($estudiante->id == $items->id_alumnos)
                            <option value="{{$estudiante->id}}" selected>
                                {{$estudiante->nombre}}
                            </option>
                            @else
                            <option value="{{$estudiante->id}}">
                                {{$estudiante->nombre}}
                            </option>
                            @endif
                        @endforeach
                    </select>
                    <label for="">Periodo Escolar</label>
                    <select name="periodo" id="periodo" class="form-control" required>
                        <option value="">Selecciona el periodo escolar</option>
                        @foreach ($items5 as $periodo)
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
                    <label for="">Estatus</label>
                    <select name="estatus" class="form-control" required>
                        <option value="">Selecciona una opción</option>
                        <option value="En trámite">En trámite</option>
                        <option value="Liberado">Liberado</option>
                    </select>
                    <label for="">Carpeta</label>
                    <input type="text" class="form-control" name="carpeta" required value="{{ $items->carpeta }}">
                    <label for="">Fecha de registro</label>
                    <input type="date" class="form-control" name="fecha_registro" required value="{{ $items->fecha_registro }}">
                    <button class="btn btn-outline-warning mt-3"> Actualizar <i class="fa-solid fa-pen-to-square"></i> </button>
                    <a href="{{ route('creditos') }}" class="btn btn-outline-info mt-3"> <i class="fa-solid fa-rotate-left"></i> Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection