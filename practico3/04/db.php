<?php 
function getDB() {
    $db = new PDO('mysql:host=localhost;'.'dbname=practica;charset=utf8', 'root', '');
    return $db;
}


function getAllPayments() {
    // 1. abro conexión a la DB
    $db = getDB();

    // 2. ejecuto la sentencia (2 subpasos)
    $query = $db->prepare("SELECT * FROM pagos");
    $query->execute();

    // 3. obtengo los resultados
    $payments = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $payments;


}

function insertPaymentDefault(){
    $db = getDB();
    $query = $db->prepare("INSERT INTO pagos (deudor, cuota, cuota_capital, fecha_pago) VALUES (?, ?, ?, ?)");
    $query->execute(array('Deudor Hardcodeado', 12, 333.333, '1992-04-12'));

    return $db->lastInsertId();
}


function insertPayment($debtor,$cant,$amount,$date){
    $db = getDB();
    $query = $db->prepare("INSERT INTO pagos (deudor, cuota, cuota_capital, fecha_pago) VALUES (?, ?, ?, ?)");
    
    $query->execute([$debtor, $cant, $amount, $date]);
    //NO FUNCIONA. REVISAR!!
    return $db -> lastInsertId();
}