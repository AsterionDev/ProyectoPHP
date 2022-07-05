<?php
include '../DB/conexion_db.php';

//CAPTURA LOS VALORES QUE TIENE EL ARREGLO POST
if (isset($_POST['bt_agregarPrestamo'])) {
    $book = $_POST['selectedBook'];
    $user = $_POST['selectedUser'];
    $month = $_POST['selectTime'];
    $date = date('Y-m-d');
    $dateExp = date('Y-m-d', strtotime($date . '+ ' . $month . ' month'));
    $query = "INSERT INTO UserBooks (UserId, BookId, LoanDate, ExDate) VALUES ('$user','$book','$date','$dateExp');";
    $resultado = mysqli_query($conn, $query);
    if (!$resultado) {
        header('Location: gestionPrestamos.php?status=Fallo');
    } else {
        header('Location: gestionPrestamos.php?status=Exito');
    }
}
?>
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
    <div class="d-flex justify-content-center flex-column m-5 p-5">
        <div class="text-center">
            <h1>Agregar un Nuevo Prestamo</h1>
        </div>

        <form action="agregar_prestamo.php" method="POST">
            <label for="lselectedBook">Libro:</label><br>
            <select name="selectedBook" class="form-control mb-3">
                <?php
                $query = 'SELECT * FROM Books';
                $resultado = mysqli_query($conn, $query);
                while ($fila = mysqli_fetch_array($resultado)) { ?>

                    <option value="<?php echo $fila[
                        'Id_B'
                    ]; ?>"><?php echo $fila['Title']; ?></option>

                <?php }
                ?>
            </select>
            <label for="lselectedUser">Usuario:</label><br>
            <select name="selectedUser" class="form-control mb-3">
                <?php
                $query = 'SELECT * FROM Users';
                $resultado = mysqli_query($conn, $query);
                while ($fila = mysqli_fetch_array($resultado)) { ?>

                    <option value="<?php echo $fila[
                        'Id_U'
                    ]; ?>"><?php echo $fila['Email']; ?></option>
                <?php }
                ?>
            </select>
            <label for="lselectedTime">Tiempo de Prestamo:</label><br>
            <select name="selectTime" class="form-control mb-3">
                <option value="1">1 Mes</option>
                <option value="2">2 Meseses</option>
                <option value="3">3 Meseses</option>
            </select>

            <button name="bt_agregarPrestamo" type="submit" class="btn btn-primary">Agregar Nuevo Prestamo</button>
        </form>
    </div>
</body>

</html>