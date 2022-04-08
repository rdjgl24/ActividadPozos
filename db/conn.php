<?php
$conn = mysqli_connect("localhost", "root", "", "actividad_pozos");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>