<?php
function connOpen() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $nameDB = "atvtraking";
    try {
        $conn = new mysqli($host, $user, $pass, $nameDB);
        return $conn;
    } catch (Exception $e) {
        echo "Error al conectar".$e;
    }
}

function connClose($conn1){
    mysqli_close($conn1);
}