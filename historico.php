<?php
include_once('db/conn.php');
$id = $_GET['id'];


$QUERY = "Select * from valores where idPozo = $id ORDER BY fecha";
$rsQUERY = mysqli_query($conn, $QUERY) or die('Error: ' . mysqli_error($con));
$countQUERY = mysqli_num_rows($rsQUERY);

$QUERYNAME = "SELECT * FROM `pozo` WHERE id = $id";
$rsQUERYNAME = mysqli_query($conn, $QUERYNAME) or die('Error: ' . mysqli_error($con));

$nombre = '';
foreach ($rsQUERYNAME as $value) {
    $nombre = $value['nombre'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Historico de Valores</title>
</head>        

<body class="text-center">
    <div class="container">
        <h3>Historial de medidas de el pozo   <?php echo $nombre?>  </h3>
        <h3>Se encontraron  <?php echo $countQUERY?> registros </h3>
        <div>
            <canvas id="grafico"></canvas>
        </div>
    </div>

    <a class="text-decoration-none text-white" href="Menu.php">
        <button class="mx-auto d-block btn btn-lg boton-verde"> Volver al menu </button>
    </a>
</body>

<script>
    let valores = [];
    let fechas = [];
    
    <?php
    foreach ($rsQUERY as $value) {
    ?>
        valores.push('<?php echo $value['valor'] ?>')
        fechas.push('<?php echo $value['fecha'] ?>')

    <?php
    }
    ?>
  
    let ctx = document.getElementById("grafico").getContext("2d");
    let grafico = new Chart(ctx, {
        type: "line",
        data: {
            labels: fechas,
            datasets: [{
                    label: "Medida (m)",
                    data: valores,
                    backgroundColor: "rgba(0,205,1,0.6)",
                },

            ],
        },
    });
</script>

</html>