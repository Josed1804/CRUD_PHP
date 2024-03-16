<?php

include("connection.php");
$con = conexion();

$id = $_GET["id"];

$sql = "DELETE FROM  users WHERE  id= '$id'";
$query = mysqli_query($con,$sql);
if ($query){
    header ("location: index.php");
};