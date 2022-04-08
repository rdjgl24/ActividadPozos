<?php
include_once('db/conn.php');

    if (!isset($_POST['medida']) || !isset($_POST['fecha'])){
        echo "Error";
    }
    else{

        echo $id=$_POST['id'];
        echo  $medida=$_POST['medida'];
        echo  $fecha=$_POST['fecha'];
         
        $sql="INSERT INTO valores (fecha, valor, idPozo) 
        VALUES('$fecha', '$medida', '$id')";
        $query= mysqli_query($conn,$sql);

    if($query){
        Header("Location: menu.php");        
    }
    }
