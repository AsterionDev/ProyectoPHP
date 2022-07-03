<?php
include('../DB/conexion_db.php');
if (isset($_POST['bt_agregar_libro'])) {
    $nombre = $_POST['nombrelibro'];


    $query = "INSERT INTO books (Title) VALUES ('$nombre')";

    $resultado = mysqli_query($conn, $query);
    if (!$resultado) {
        header("Location: gestionLibros.php?status=Fallo");
    } else {
        header("Location: gestionLibros.php?status=Exito");
    };
}
