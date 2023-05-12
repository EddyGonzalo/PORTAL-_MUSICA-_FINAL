<?php

$servername = "sql209.epizy.com";
$username = "epiz_34166968";
$password = "y34rwdN92v";
$dbname = "epiz_34166968_database1";


// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


?>