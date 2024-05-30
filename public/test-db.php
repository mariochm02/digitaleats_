<?php
$host = '127.0.0.1';
$db = 'digitaleats';
$user = 'admindigital';
$pass = 'g887sj$hv72_51';
$port = '5432';
$connection = "pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$pass";

try {
    $dbh = new PDO($connection);
    echo "Conexión exitosa a la base de datos PostgreSQL!";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
