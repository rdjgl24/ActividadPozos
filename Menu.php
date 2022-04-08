<?php
include_once('db/conn.php');

$QUERY = "Select * from pozo";
$rsQUERY = mysqli_query($conn, $QUERY) or die('Error: ' . mysqli_error($con));
$countQUERY = mysqli_num_rows($rsQUERY);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Menu Principal</title>
</head>

<body class="bg-dark text-light">    
    <table  class="mx-auto table table-primary">
        <thead>
            <tr>
                <th class="ps-4 pt-3" scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Localizacion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
        foreach ($rsQUERY as $value) {
            ?>
            <tr>                
                <td class="ps-4"> <?php echo $value['id']; ?> </td>
                <td> <?php echo $value['nombre']; ?> </td>
                <td> <?php echo $value['localizacion']; ?> </td>
                <th><a href="historico.php?id=<?php echo $value['id'] ?>" class="btn btn-success">Ver historial</a>
                <a href="addValor.php?id=<?php echo $value['id'] ?>" class="btn btn-primary">Agregar medida</a>
                <a href="deletePozo.php?id=<?php echo $value['id'] ?>" class="btn btn-danger">Eliminar</a>
            </th>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<a class="text-decoration-none text-white" href="addPozo.php">    
    <button class="mx-auto d-block btn btn-lg boton-azul"> Agregar Pozo </button>    
</a>

</body>
</html>