<?php
include_once('db/conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Agregar Pozo</title>
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
    <div class="container text-center mt-5">
        <h1 class="">Agregar pozo </h1>
        <p>Ingresa los datos</p>
    </div>
    <div class="container mt-5 mb-5">
        <form class="w-50" action="insertPozo.php" method="post">
            <label for="price"> Nombre </label>
            <input type="text" id="nombre" class="form-control mb-3" name="nombre" placeholder="nombre">
            <label for="price"> Localizacion </label>
            <input type="text" id="localizacion" class="form-control mb-3" name="localizacion" placeholder="localizacion">
            <input type="submit" class="btn btn-outline-light btn-block" value="Agregar">
        </form>

    </div>

    <a class="text-decoration-none text-white" href="Menu.php">
        <button class="mx-auto d-block btn btn-lg boton "> Volver al menu </button>
    </a>
</body>

</html>