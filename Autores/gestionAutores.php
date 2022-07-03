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

    <title>Gestión Autores</title>
</head>

<body class="container">
    <div class="d-flex justify-content-center flex-column  m-5">
        <h1 class="text-center">Gestión de autores</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark mb-4" data-toggle="modal" data-target="#autorModal">
            Agregar autor
        </button>

        <div class="table-responsive">
            <table border="1" cellpadding="2" class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Nombre del autor</th>
                        <th scope="col" class="text-center">Nacionalidad</th>
                        <th scope="col" class="text-center">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM Authors";
                    $resultado = mysqli_query($conn, $query);
                    while ($fila = mysqli_fetch_array($resultado)) { ?>
                        <tr>
                            <td scope="row" class="text-center"><?php echo $fila['Name'] ?></td>
                            <td class="text-center"><?php echo $fila['Country'] ?></td>
                            <td class="text-center">
                                <a href="editar_autor.php?id=<?php echo $fila['Id_A'] ?>" class="btn btn-primary">Editar</a>
                                <a href="eliminar_autor.php?id=<?php echo $fila['Id_A'] ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="autorModal" tabindex="-1" aria-labelledby="autorModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="autorModalLabel">Agregar autor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="guardar_autor.php" method="POST" class="mb-3">
                            <label for="lnombreAutor">Nombre:</label><br>
                            <input type="text" id="nombreAutor" name="nombreAutor" class="form-control"><br>
                            <label for="lnacionalidadAutor">Nacionalidad:</label><br>
                            <input type="text" id="nacionalidadAutor" name="nacionalidadAutor" class="form-control"><br>

                            <button name="bt_agregar_autor" type="submit" value="Agregar autor" class="btn btn-primary">Agregar autor</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <button type="button" class="btn btn-primary" id="liveToastBtn" onclick="funcion()">Show live toast</button>

        <!-- Toast E -->

        <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-header">
                    <img src="..." class="rounded mr-2" alt="...">
                    <strong class="mr-auto">Biblioteca</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Eliminando correctamente
                </div>
            </div>
        </div>
        <!-- End Toast E -->

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./script.js"></script>

</body>

</html>