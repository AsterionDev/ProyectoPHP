<?php
//Antes que todo hay que incluir la conexión para que esté disponible en la página
include('../DB/conexion_db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Gestión Libros</title>
</head>

<body class="container">
    <div class="d-flex justify-content-center flex-column  m-5">
        <h1 class="text-center">Gestión de libros</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark mb-2" data-toggle="modal" data-target="#libroModal">
            Agregar libro
        </button>
        <a href="./../" class="btn btn-outline-dark mb-4"> Volver al Menu Principal</a>

        <div class="table-responsive">
            <table border="1" cellpadding="2" class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Nombre del libro</th>
                        <th scope="col" class="text-center">Autor</th>
                        <th scope="col" class="text-center">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT Id_B, Title, Name FROM books b left join booksauthors ba on b.Id_B = ba.BookId left join authors a on ba.AuthorId = a.Id_A";
                    $resultado = mysqli_query($conn, $query);
                    while ($fila = mysqli_fetch_array($resultado)) { ?>
                        <tr>
                            <td scope="row" class="text-center"><?php echo $fila['Title'] ?></td>
                            <td class="text-center"><?php echo $fila['Name'] ?></td>
                            <td class="text-center">
                                <a href="editar_libro.php?id=<?php echo $fila['Id_B'] ?>" class="btn btn-primary">Editar</a>
                                <a href="agregar_autores.php?id=<?php echo $fila['Id_B'] ?>" class="btn btn-warning">Agregar Autor</a>
                                <a href="eliminar_libro.php?id=<?php echo $fila['Id_B'] ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="libroModal" tabindex="-1" aria-labelledby="libroModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="libroModalLabel">Agregar libro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="guardar_libro.php" method="POST" class="mb-3">
                            <label for="lnombrelibro">Titulo:</label><br>
                            <input type="text" id="nombrelibro" name="nombrelibro" class="form-control" required><br>
                            <button name="bt_agregar_libro" type="submit" value="Agregar libro" class="btn btn-primary">Agregar libro</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./script.js"></script>

</body>

</html>