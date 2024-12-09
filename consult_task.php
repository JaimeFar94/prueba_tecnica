<?php
include("db.php");

$query = "SELECT * FROM task";
$result_task = mysqli_query($conn, $query);

if (!$result_task) {
    die("Error en la consulta: " . mysqli_error($conn));
}
?>
