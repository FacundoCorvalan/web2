<?php
    function calcularIMC($peso, $altura){
        //(IMC = peso [kg] / altura [m]2)
        return $peso/pow($altura,2);//divido por 100 para obtenerlo de tipo float
    }