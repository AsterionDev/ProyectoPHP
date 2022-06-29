<?php
include('conexion_db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Gestión biblioteca</title>
</head>

<body class="container">
    <form action="guardar_tarea.php" method="POST" class="mb-3">
        <label for="ltitulo">Titulo:</label><br>
        <input type="text" id="titulo" name="titulo" class="form-control"><br>
        <label for="ldescripcion">Descripcion:</label><br>
        <textarea name="descripcion" cols="30" rows="2" class="form-control"></textarea><br>
        <button name="bt_guardar_tarea" type="submit" value="Guardar Tarea" class="btn btn-primary">Guardar Tarea</button>
    </form>
    <table border="1" cellpadding="2" class="table">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha Creación</th>
                <th scope="col">Opcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM tarea";
            $resultado = mysqli_query($conn, $query);
            while ($fila = mysqli_fetch_array($resultado)) { ?>
                <tr>
                    <td scope="row"><?php echo $fila['titulo'] ?></td>
                    <td><?php echo $fila['descripcion'] ?></td>
                    <td><?php echo $fila['fecha'] ?></td>
                    <td>
                        <a href="editar_tarea.php?id=<?php echo $fila['id_tarea'] ?>" class="btn btn-primary">Editar</a>
                        <a href="eliminar_tarea.php?id=<?php echo $fila['id_tarea'] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>