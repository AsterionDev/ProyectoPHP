<?php
//Antes que todo hay que incluir la conexión para que esté disponible en la página
include '../DB/conexion_db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Gestión Prestamos</title>
</head>

<body class="container">
    <div class="d-flex justify-content-center flex-column  m-5">
        <h1 class="text-center">Gestión de Prestamos</h1>
        <!-- Button trigger modal -->
         <a href=".agregar_prestamo.php" class="btn btn-dark mb-4">  Prestar Libro</a>

        <a href="./../" class="btn btn-outline-dark mb-4"> Volver al Menu Principal</a>

        <div class="table-responsive">
            <table border="1" cellpadding="2" class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Libro</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Fecha Prestamo</th>
                        <th scope="col" class="text-center">Fecha Limite Para Devolucion</th>
                        <th scope="col" class="text-center">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query =
                        'SELECT b.Title, u.Email, ub.LoanDate, ub.ExDate FROM Books b, Users u, UserBooks ub WHERE b.Id_B=ub.BookId AND u.Id_U=ub.UserID';
                    $resultado = mysqli_query($conn, $query);
                    while ($fila = mysqli_fetch_array($resultado)) { ?>
                        <tr>
                            <td scope="row" class="text-center"><?php echo $fila[
                                'Title'
                            ]; ?></td>
                            <td class="text-center"><?php echo $fila[
                                'Email'
                            ]; ?></td>
                            <td class="text-center"><?php echo $fila[
                                'LoanDate'
                            ]; ?></td>
                             <td class="text-center"><?php echo $fila[
                                 'ExDate'
                             ]; ?></td>
                            <!-- <td class="text-center">
                                <a href="editar_usuario.php?id=<?php echo $fila[
                                    'Id_U'
                                ]; ?>" class="btn  btn-outline-primary">Editar</a>
                                <a href="eliminar_usuario.php?id=<?php echo $fila[
                                    'Id_U'
                                ]; ?>" class="btn btn-outline-danger">Eliminar</a>
                            </td> -->
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="usuarioModal" tabindex="-1" aria-labelledby="usuarioModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="usuarioModalLabel">Agregar usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="guardar_usuario.php" method="POST" class="mb-3">
                            <label for="lnombreUsuario">Nombre:</label><br>
                            <input type="text" id="nombreUsuario" name="nombreUsuario" class="form-control"><br>
                            <label for="lemailUsuario">Email:</label><br>
                            <input type="email" id="emailUsuario" name="emailUsuario" class="form-control"><br>

                            <button name="btn_agregar_usuario" type="submit" value="Agregar usuario" class="btn btn-primary">Agregar usuario</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>