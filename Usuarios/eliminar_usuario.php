<?php
include('../DB/conexion_db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo 'Eliminando el autor con id '. $id;
    $query = "DELETE FROM Users WHERE id_U = $id";

    $resultado = mysqli_query($conn, $query);
    if (!$resultado) {
        echo $query;
        die('Fallo eliminando el usuario');
    }
    header('Location: gestionUsuarios.php');
}
