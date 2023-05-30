@extends('../../../layouts/main_admin')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <br>
                <br>
                <h2 class="text-center">Creditos <i class="fa-solid fa-address-book"></i> </h2>
                <a href="{{ route('creditoNuevo') }}" class="btn btn-primary"> <i class="fa-solid fa-user-plus"></i> Agregar nuevo credito</a>
                <table class="table table-sm display responsive nowrap mt-4" style="width: 100%" id="table">
                    <thead>
                        <th class="text-center">Credito</th>
                        <th class="text-center">Mooc</th>
                        <th class="text-center">Evidencia o constancia</th>
                        <th class="text-center">Estudiante</th>
                        <th class="text-center">Estatus</th>
                        <th class="text-center">Carpeta física</th>
                        <th class="text-center">Fecha de registro</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Eliminar</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection