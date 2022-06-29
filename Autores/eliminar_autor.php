<?php
include('../DB/conexion_db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo "Eliminando la tarea con id ". $id;
    $query = "DELETE FROM authors WHERE id_a = $id";

    $resultado = mysqli_query($conn, $query);
    if (!$resultado) {
        die("Fallo eliminando el autor");
    }
    header("Location: gestionAutores.php");
}
?> z