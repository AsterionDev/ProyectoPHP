<?php
include('../DB/conexion_db.php');
if (isset($_POST['bt_agregar_autor'])) {
    $nombre = $_POST['nombreAutor'];
    $nacionalidad = $_POST['nacionalidadAutor'];


    $query = "INSERT INTO authors (Name, Country) VALUES ('$nombre', '$nacionalidad')";

    $resultado = mysqli_query($conn, $query);
    if (!$resultado) {
        header("Location: gestionAutores.php?status=Fallo");
    } else {
        header("Location: gestionAutores.php?status=Exito");
    };
}
