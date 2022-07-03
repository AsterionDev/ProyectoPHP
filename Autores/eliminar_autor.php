<?php
include('../DB/conexion_db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo 'Eliminando la tarea con id '. $id;
    $query = 'DELETE FROM authors WHERE id_a = $id';

    $resultado = mysqli_query($conn, $query);
    if (!$resultado) {
        die('Fallo eliminando el autor');
        echo "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-header'>
          <img src='...' class='rounded mr-2' alt='...'>
          <strong class='mr-auto'>Bootstrap</strong>
          <small class='text-muted'>11 mins ago</small>
          <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>
        <div class='toast-body'>
          Hello, world! This is a toast message.
        </div>
      </div>";
    }
    header('Location: gestionAutores.php');
}
?>