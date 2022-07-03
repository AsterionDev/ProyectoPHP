<?php
include('../DB/conexion_db.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  //echo 'Eliminando el autor con id '. $id;
  $query = "DELETE FROM books WHERE id_b = $id";

  $resultado = mysqli_query($conn, $query);
  if (!$resultado) {
    header("Location: gestionLibros.php?status=Fallo");
  } else {
    header("Location: gestionLibros.php?status=Exito");
  };
}
