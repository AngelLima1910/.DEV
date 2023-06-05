@extends('../layouts/main_admin')
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
                        <li>Nombre: {{$items->nombre}}</li>
                        <li>Apellido Paterno: {{$items->paterno}}</li>
                        <li>Apellido Materno: {{$items->materno}}</li>
                        <li>Número de control: {{$items->control}}</li>
                        <li>Teléfono Celular: {{$items->celular}}</li>
                        <li>Carrera: {{$items->carrera}}</li>
                        <li>Fecha de nacimiento: {{$items->fecha_nac}}</li>
                        <li>Escuela: {{$items->procedencia}}</li>
                        <li>Fecha de ingreso: {{$items->fecha_ingreso}}</li>
                    </ul>
                    <form action="{{route('destroy', $items->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/lista" class="btn btn-outline-secondary mt-3">Regresar <i class="fa-solid fa-rotate-left"></i> </a>
                        <button class="btn btn-outline-danger mt-3">Eliminar <i class="fa-solid fa-trash"></i> </button>
                    </form>
                </h2>
            </div>
        </div>
    </div>
@endsection