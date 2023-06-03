@extends('../../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <br>
                <br>
                <h2 class="text-center">Créditos <i class="fa-solid fa-address-book"></i> </h2>
                <a href="{{ route('creditoNuevo') }}" class="btn btn-outline-primary"> <i class="fa-solid fa-user-plus"></i> </a>
                <table class="table table-sm display responsive nowrap mt-4" style="width: 100%" id="table">
                    <thead>
                        <th class="text-center">Crédito</th>
                        <th class="text-center">Mooc</th>
                        <th class="text-center">Evidencia o constancia</th>
                        <th class="text-center">Estudiante</th>
                        <th class="text-center">Periodo escolar</th>
                        <th class="text-center">Estatus</th>
                        <th class="text-center">Carpeta física</th>
                        <th class="text-center">Fecha de registro</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($items3 as $item3)
                        <tr>
                            <td class="text-center">{{$item3->credito}}</td>
                            <td class="text-center"><a href="{{ Storage::url("$item3->mooc") }}" class="btn btn-outline-primary"> <i class="fa-solid fa-eye"></i> </a></td>
                            <td class="text-center"><a href="{{ Storage::url("$item3->evidencia") }}" class="btn btn-outline-primary"> <i class="fa-solid fa-eye"></i> </a></td>
                            <td class="text-center">{{$item3->estudiante}}</td>
                            <td class="text-center">{{$item3->periodo}}</td>
                            <td class="text-center"><a href="" class="btn btn-outline-warning"> <i class="fa-solid fa-folder-open"></i> </a></td>
                            <td class="text-center">{{$item3->carpeta}}</td>
                            <td class="text-center">{{$item3->fecha_registro}}</td>
                            <td class="text-center"><a href="{{ route('editarArchivos', $item3->id) }}" class="btn btn-outline-warning"> <i class="fa-solid fa-pen-to-square"></i> </a></td>
                            <td class="text-center"><a href="" class="btn btn-outline-danger"> <i class="fa-solid fa-trash-can"></i> </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection