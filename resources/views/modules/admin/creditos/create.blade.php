@extends('../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <h2 class="text-center">Agregar crédito nuevo <i class="fa-solid fa-user-plus"></i> </h2>
                <form action="{{ route('guardarArchivos') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('POST')
                    <label for="">Crédito</label>
                    <select name="credito" id="credito" class="form-control" required>
                        <option value="">Selecciona el crédito</option>
                        @foreach ($items as $item)
                            <option value="{{$item->nombre}}">
                                {{$item->nombre}}
                            </option>
                        @endforeach
                    </select>
                    <label for="mooc"><b>Mooc: </b></label><br>
                    <input type="file" name="mooc" required><br>
                    <input class="btn btn-success" type="submit" value="Enviar"><br>
                    <label for="evidencia"><b>Evidencia o constancia: </b></label><br>
                    <input type="file" name="evidencia" required><br>
                    <input class="btn btn-success" type="submit" value="Enviar"><br>
                    <label for="">Estudiante</label>
                    <select name="estudiante" class="form-control" required>
                        <option value="">Selecciona el estudiante</option>
                        @foreach ($items2 as $item2)
                            <option value="{{$item2->nombre}}">
                                {{$item2->nombre}}
                            </option>
                        @endforeach
                    </select>
                    <label for="">Estatus</label>
                    <select name="estatus" id="estatus" class="form-control" required>
                        <option value="">Selecciona una opción</option>
                        <option value="En trámite">En trámite</option>
                        <option value="Liberado">Liberado</option>
                    </select>
                    <label for="">Carpeta</label>
                    <input type="text" class="form-control" name="carpeta" required>
                    <label for="">Fecha de registro</label>
                    <input type="date" class="form-control" name="fecha_registro" required>
                    <button class="btn btn-primary mt-3"> <i class="fa-solid fa-user-plus"></i> Agregar</button>
                    <a href="{{ route('creditos') }}" class="btn btn-info mt-3"> <i class="fa-solid fa-rotate-left"></i> Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection