<?php
include('../DB/conexion_db.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  //echo 'Eliminando el autor con id '. $id;
  $query = "DELETE FROM authors WHERE id_a = $id";

  $resultado = mysqli_query($conn, $query);
  if (!$resultado) {
    header("Location: gestionAutores.php?status=Fallo");
  } else {
    header("Location: gestionAutores.php?status=Exito");
  };
}
