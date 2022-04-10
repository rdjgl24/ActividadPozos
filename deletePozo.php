<?php

include_once('db/conn.php');

$id=$_GET['id'];
$sql_aux="DELETE FROM valores  WHERE idPozo='$id'";
$query?aux=mysqli_query($conn,$sql_aux);

$sql="DELETE FROM pozo  WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: menu.php");
    }
    mysqli_close($conn);
?>
