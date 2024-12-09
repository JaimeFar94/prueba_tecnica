<?php 
$conn= mysqli_connect(
    'localhost',
    'root',
    '',
    'prueba_tecnica'
);

if ((!$conn)){
    die("Error de conexión: " . mysqli_connect_error());
}


?>