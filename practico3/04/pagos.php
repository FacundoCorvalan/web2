<!-- Usando la tabla pagos de la base de datos del punto 3, desde PHP:

-Liste todos los registros (filas) de la tabla en una tabla HTML. 
-Ingrese algunos valores de ejemplo directamente desde un script php (sin formulario)
-Cree un formulario para ingresar pagos a la base de datos.
-Como podria hacer para evitar que el sistema no permita registrar dos veces el mismo pago?
 -->
<?php
require_once 'db.php';
function showPayments(){
    include './templates/header.php';
    $payments = getAllPayments();

    echo '<table class="table table-bordered">';
    echo '<thead>
            <tr>
                <th scope="col">Nombre Deudor</th>
                <th scope="col">Numero de cuota</th>
                <th scope="col">Valor de cuota</th>
                <th scope="col">Fecha de pago</th>
            </tr>
        </thead>';

    foreach($payments as $payment){
        echo '<tr>';
            echo '<td>';
            echo $payment->deudor;
            echo '</td>';
            echo '<td>';
            echo $payment->cuota;
            echo '</td>';
            echo '<td>';
            echo $payment->cuota_capital;
            echo '</td>';
            echo '<td>';
            echo $payment->fecha_pago;
            echo '</td>';
        echo '</tr>';
    }

    echo '</table>';

    include './templates/footer.php';    
}

function insertHardcode(){
    $id = insertPaymentDefault();
    header("Location: " . BASE_URL); 
}

function insertPaymentByForm(){
    $deudor = $_GET['debtor'];
    $nro_cuota = $_GET['cant'];
    $monto_capital = $_GET['amount'];
    $fecha =  $_GET['date'];

    $payments = getAllPayments();
    foreach($payments as $payment){
        $deudor_anterior = $payment->deudor;
    }

    if(!$deudor == $deudor_anterior){
        $id = insertPayment($deudor, $nro_cuota, $monto_capital, $fecha);
        header("Location: " . BASE_URL); 

    }else{
        echo 'no se puede repetir dos veces el mismo pago';
    }
    


}