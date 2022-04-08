<?php

include_once('db/conn.php');

$id=$_GET['id'];
$sql0="DELETE FROM valores  WHERE idPozo='$id'";
$query0=mysqli_query($conn,$sql0);

$sql="DELETE FROM pozo  WHERE id='$id'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: menu.php");
    }
    mysqli_close($con);
?>
