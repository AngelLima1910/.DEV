<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Constancia</title>
</head>
<body>
    <table border="1">
        <thead>
            <th class="text-center">NO DE CONTROL</th>
            <th class="text-center">NOMBRE</th>
            <th class="text-center">ACTIVIDAD</th>
            <th class="text-center">GRUPO</th>
            <th class="text-center">PERIODO ESCOLAR</th>
            <th class="text-center">HRS ACREDITADAS</th>
            <th class="text-center">FECHA</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$recogerData->control}}</td>
                <td>{{$recogerData->paterno}} {{$recogerData->materno}} {{$recogerData->nombre}}</td>
                <td>{{$recogerData->actividad}}</td>
                <td>{{$recogerData->grupo}}</td>
                <td>{{$recogerData->periodo}}</td>
                <td>{{$recogerData->horaAcreditada}}</td>
                <td>{{$recogerData->fecha}}</td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>