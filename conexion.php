<?php
// Configuración de la conexión a la base de datos
//conexion.php
$host = 'localhost';
$dbname = 'transporte';
$username = 'root';
$password = '';

try {
    // Crear una nueva conexión PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configurar el modo de error
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage()); // Manejo de errores
}
?>