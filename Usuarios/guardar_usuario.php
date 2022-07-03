<?php
include('../DB/conexion_db.php');
if (isset($_POST['btn_agregar_usuario'])) {
    $nombre = $_POST['nombreUsuario'];
    $email = $_POST['emailUsuario'];


    $query = "INSERT INTO Users (Name, Email) VALUES ('$nombre', '$email')";
    $resultado = mysqli_query($conn, $query);
    if (!$resultado) {
        header("Location: gestionUsuarios.php?status=Fallo");
    } else {
        header("Location: gestionUsuarios.php?status=Exito");
    };
}
