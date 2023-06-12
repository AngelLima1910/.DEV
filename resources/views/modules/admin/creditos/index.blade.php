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
                        <tr>
                            <th class="text-center">Crédito</th>
                            <th class="text-center">Mooc</th>
                            <th class="text-center">Evidencia o constancia</th>
                            <th class="text-center">Número de control</th>
                            <th class="text-center">Periodo escolar</th>
                            <th class="text-center">Estatus</th>
                            <th class="text-center">Carpeta física</th>
                            <th class="text-center">Fecha de registro</th>
                            <th class="text-center">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items3 as $item3)
                        <tr>
                            <td class="text-center">{{$item3->credito}}</td>
                            <td class="text-center"><a href="pdf/{{ $item3->mooc }}" target="blank_" class="btn btn-outline-primary"> <i class="fa-solid fa-eye"></i> </a></td>
                            <td class="text-center"><a href="pdf/{{ $item3->evidencia }}" target="blank_" class="btn btn-outline-primary"> <i class="fa-solid fa-eye"></i> </a></td>
                            <td class="text-center">{{$item3->estudiante}}</td>
                            <td class="text-center">{{$item3->periodo}}</td>
                            <td class="text-center">
                                <form action="{{ route('actualizarStatus', $item3->id) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input name="estatus" value="{{$item3->estatus}}" hidden>
                                    @if ($item3->estatus == 'En trámite')
                                        <button class="btn btn-outline-warning"> 
                                            {{ $item3->estatus }}
                                            <i class="fa-solid fa-folder-open"></i> 
                                        </button>
                                    @endif
                                    @if ($item3->estatus == 'Liberado')
                                        <button class="btn btn-outline-success" disabled data-bs-toggle="button" autocomplete="off"> 
                                            {{$item3->estatus }}
                                            <i class="fa-solid fa-folder"></i> 
                                        </button>
                                    @endif
                                </form>
                            </td>
                            <td class="text-center">{{$item3->carpeta}}</td>
                            <td class="text-center">{{$item3->fechaReg}}</td>
                            <td class="text-center"><a href="{{ route('editarArchivos', $item3->id) }}" class="btn btn-outline-warning"> <i class="fa-solid fa-pen-to-square"></i> </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection