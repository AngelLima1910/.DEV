<?php

use Carbon\Carbon;

    function calcularEdad($fecha_nac)
    {
        // Convertir la fecha de nacimiento en un objeto Carbon
        $fecha_nac = Carbon::createFromFormat('Y-m-d', $fecha_nac);
        // Calcular la edad usando el método diffInYears()    
        $edad = $fecha_nac->diffInYears(Carbon::now());
        echo $edad;
    }