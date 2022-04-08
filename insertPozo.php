<?php
include_once('db/conn.php');

    if (!isset($_POST['localizacion']) || !isset($_POST['nombre'])){


        echo "no";
    }
    else{
        echo "si";

        echo  $localizacion=$_POST['localizacion'];
        echo  $nombre=$_POST['nombre'];
         
        $sql="INSERT INTO pozo (nombre, localizacion) 
        VALUES('$nombre', '$localizacion')";
        $query= mysqli_query($conn,$sql);


    if($query){
        Header("Location: dashboard.php");
        
    }
    }
