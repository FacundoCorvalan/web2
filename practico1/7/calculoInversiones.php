<?php
    function calcularInversion($dineroInvertido){
        $ganancia =0;
        $porcentajeInteres = 3;

        $ganancia = $porcentajeInteres * $dineroInvertido / 100;
        return number_format($ganancia,2) ;
    }