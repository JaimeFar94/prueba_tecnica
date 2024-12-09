<?php 
include("db.php");
session_start();

if(isset($_POST['save_task'])){
    
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $direction = mysqli_real_escape_string($conn, trim($_POST['direction']));
    $city = mysqli_real_escape_string($conn, trim($_POST['city']));
    $nit = mysqli_real_escape_string($conn, trim($_POST['nit']));
    $n_room = intval($_POST['n_room']);
    $type_room = mysqli_real_escape_string($conn, trim($_POST['type_room']));
    $acomodacion = mysqli_real_escape_string($conn, trim($_POST['acomodacion']));

    // Validaciones de negocio
    $validaciones = [
        'Estándar' => ['Sencilla', 'Doble'],
        'Junior' => ['Triple', 'Cuádruple'],
        'Suite' => ['Sencilla', 'Doble', 'Triple']
    ];

    if (!in_array($acomodacion, $validaciones[$type_room])) {
        die("Error: Acomodación no válida para el tipo de habitación.");
    }

    // Consulta para insertar hotel
    $query = "INSERT INTO task (name, direction, city, nit, n_room, type_room, acomodacion) 
              VALUES ('$name', '$direction', '$city', '$nit', $n_room, '$type_room', '$acomodacion')";
    
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Error al guardar: " . mysqli_error($conn));
    }

    $_SESSION['message'] = "Hotel guardado exitosamente";
    $_SESSION['message_type'] = "success";

    header('Location: index.php');
    exit();
}
?>