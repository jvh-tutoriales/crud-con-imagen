<?php 
#capturar los datos formulario
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$foto=$_FILES['foto'];
include "../config/bd.php";
if($foto['size']==0){
    $query=actualizarSinFoto($id,$nombre,$email);
}else{
    $foto=addslashes(file_get_contents($foto['tmp_name']));
    $query=actualizar($id,$nombre,$email,$foto);
}

header("location:../editar.php?id=$id");