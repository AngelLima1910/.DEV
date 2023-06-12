<!doctype html>
<html lang="es-MX">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Constancia de participación</title>
    <style>
        /* Estilos para el PDF */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        .nota-info {
            margin-bottom: 20px;
        }
        .nota-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="text-start">
                    <div class="position-absolute top-0 start-0"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Tecnologico_Nacional_de_Mexico.svg/1920px-Tecnologico_Nacional_de_Mexico.svg.png" style="width: 150px"></div> <div class="position-absolute top-0 end-0"><img src="https://milpaalta2.tecnm.mx/img/history/itma2.png" style="width: 80px"></div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br><br><br>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <div>
                    <h3>
                        <b>INSTITUTO TECNOLÓGICO DE MILPA ALTA II
                        </b>
                    </h3>
                </div>
            </div>
            <div class="col text-center">
                <div>
                    <h3>
                        <b>DEPARTAMENTO DE ACTIVIDADES <br> EXTRAESCOLARES
                    </b>
                </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <table class="table border border-dark text-center">
                    <thead>
                        <tr>
                            <th class="border border-dark">No. DE CONTROL:</th>
                            <th class="border border-dark">PERIODO:</th>
                            <th class="border border-dark">NOMBRE:</th>           
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td class="border border-dark">{{ $recogerData->control }}</td>
                            <td class="border border-dark">{{ $recogerData->periodo }}</td>
                            <td class="border border-dark">{{ $recogerData->paterno }} {{ $recogerData->materno }} {{ $recogerData->nombre }}</td>
                            
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col">
                <table class="table border border-dark text-center">
                    <thead>
                        <tr>
                            <th class="border border-dark">ACTIVIDAD:</th>
                            <th class="border border-dark">FECHA:</th>
                            <th class="border border-dark">GRUPO:</th>
                            <th class="border border-dark">HRS. ACREDITADAS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-dark">{{ $recogerData->actividad }}</td>
                            <td class="border border-dark">{{ $recogerData->fecha }}</td>
                            <td class="border border-dark">{{ $recogerData->grupo }}</td>
                            <td class="border border-dark">{{ $recogerData->horaAcreditada }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <p style="text-align: justify"><b>NOTA: </b>EL ALUMNO DEBE DE CONSERVAR ESTE DOCUMENTO Y ENTREGARLO AL DEPARTAMENTO DE
                    EXTRAESCOLARES AL COMPLETAR UN CREDITO EQUIVALENTE A 20 HRS.
                    <br><br>
                    ESTE DOCUMENTO SERÁ JUSTIFICACIÓN PARA SUS ACTIVIDADES EXTRAESCOLARES EN CADA UNA DE SUS
                    ASIGNATURAS.
                    <br><br>
                    PARA QUE TENGA VALIDEZ ESTE DOCUMENTO DEBE TENER FIRMA Y SELLO DEL JEFE DE DEPARTAMENTO
                    QUE PROPORCIONO EL APOYO.
                    <br><br>
                    SI EXISTIERA ALGÚN ERROR EN CUALQUIER DATO PRESENTADO, FAVOR DE AVISAR DE INMEDIATO PARA CORREGIRLO.
                </p>
            </div>
        </div>
        <div class="row mt-4 text-center">
            <p style="text-align: center"><b>ING. ROLDAN AQUINO SEGURA</b>
                <br>JEFE DEL DEPARTAMENTO DE ACTIVIDADES EXTRAESCOLARES
                <br><br>
                ___________________________
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>
</html>