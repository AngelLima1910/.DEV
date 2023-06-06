<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Constancia</title>
</head>
<body>
    <table class="table table-sm display responsive nowrap mt-4" style="width: 100%" id="table">
        <thead>
            <th class="text-center">Nombre(s)</th>
            <th class="text-center">Apellido Paterno</th>
            <th class="text-center">Apellido Materno</th>
            <th class="text-center">Número de control</th>
            <th class="text-center">Actividad</th>
            <th class="text-center">Grupo</th>
            <th class="text-center">Periodo</th>
            <th class="text-center">Horas acreditadas</th>
            <th class="text-center">Fecha</th>
        </thead>
        <tbody>
            @foreach ($recogerData as $item)
                <tr>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->paterno}}</td>
                    <td>{{$item->materno}}</td>
                    <td>{{$item->control}}</td>
                    <td>{{$item->actividad}}</td>
                    <td>{{$item->grupo}}</td>
                    <td>{{$item->periodo}}</td>
                    <td>{{$item->horaAcreditada}}</td>
                    <td>{{$item->fecha}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>