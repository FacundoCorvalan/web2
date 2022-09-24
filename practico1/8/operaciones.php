<?php
    function calcular($nro1,$op,$nro2){
        switch($op){
            case 'suma':return $nro1 + $nro2;
                break;
            case 'resta':return $nro1 - $nro2;
                break;
            case 'mult':return $nro1 * $nro2;
                break;
            case 'division': return $nro1 / $nro2;
                break;
            default:return "Operacion Incorrecta";
                break;
        }
    }