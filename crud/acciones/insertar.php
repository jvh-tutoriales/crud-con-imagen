<?php 
include "../config/bd.php";

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$foto=$_FILES['foto'];

$foto=addslashes(file_get_contents($foto['tmp_name']));

$query=insertar($nombre,$email,$foto);

header('location:../index.php');
