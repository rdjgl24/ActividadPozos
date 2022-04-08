<?php
include_once('db/conn.php');
$id = $_GET['id'];

$QUERYNAME = "SELECT * FROM `pozo` WHERE id = $id";
$rsQUERYNAME = mysqli_query($conn, $QUERYNAME) or die('Error: ' . mysqli_error($conn));

$nombre = '';
foreach ($rsQUERYNAME as $value) {
    $nombre = $value['nombre'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Agregar Medidas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Agregar Pozo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

</head>

<body class="bg-dark text-light">
    <div class="container mt-5 text-center">
        <h1>Agregando medidas al pozo <?php echo $nombre ?> </h1>
    </div>
    <div class="container mt-5 mb-5">
        <form class="w-50" action="insertValor.php" method="post">
            <label for="price"> Fecha</label>
            <input hidden type="text" id="id" class="form-control mb-3" name="id" placeholder="id" value=<?php echo $id ?>>
            <input type="datetime-local" id="fecha" class="form-control mb-3" name="fecha" placeholder="fecha"> <label for="price"> Medida (m)</label>
            <input type="number" id="medida" class="form-control mb-3" name="medida" placeholder="medida">
            <input type="submit" class="btn btn-outline-light btn-block" value="Agregar">
        </form>

    </div>

    <a class="text-decoration-none text-white" href="Menu.php">
        <button class="mx-auto d-block btn btn-lg boton"> Volver al menu </button>
    </a>

    
</body>

</html>