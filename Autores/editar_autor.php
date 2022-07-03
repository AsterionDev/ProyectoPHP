<?php
include("../DB/conexion_db.php");
//CAPTURA LOS VALORES QUE TIENE EL ARREGLO GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM authors WHERE id_a=$id";
    $resultado = mysqli_query($conn, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_array($resultado);
        $name = $fila['Name'];
        $country = $fila['Country'];
    }
}
//CAPTURA LOS VALORES QUE TIENE EL ARREGLO POST
if (isset($_POST['bt_actualizar'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $country = $_POST['country'];
    $query = "UPDATE authors SET Name = '$name',Country = '$country'
WHERE id_a = $id";

    mysqli_query($conn, $query);
    header("Location: gestionAutores.php");
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

    <title>Gestión Autores</title>
</head>

<body class="container">
    <div class="d-flex justify-content-center flex-column m-5 p-5">
        <div class="text-center">
            <h1>Editar autor <?php echo $id ?></h1>
        </div>


        <form action="editar_autor.php?id=<?php echo $_GET['id'] ?>" method="POST">
            <label for="lname">Nombre:</label><br>
            <input type="text" id="name" name="name" value="<?php echo $name ?>" class="form-control" required><br>
            <label for="lcountry">Pais:</label><br>
            <input type="text" id="country" name="country" value="<?php echo $country ?>" class="form-control" required><br>
            <button name="bt_actualizar" type="submit" class="btn btn-primary">Actualizar Autor</button>
        </form>
    </div>
</body>

</html>