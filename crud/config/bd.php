<?php 

function conexion(){
    $conexion=mysqli_connect('localhost','root','','crud');
    return $conexion;
}
function listar(){
    $sql="SELECT * FROM alumno";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}
function insertar($nombre,$email,$foto){
    $sql="INSERT INTO alumno(nombre,email,foto) VAlues('$nombre','$email','$foto')";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}
function eliminar($id){
    $sql="DELETE from alumno WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function ListarunAlumno($id){
    $sql="SELECT * FROM alumno WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return mysqli_fetch_assoc($query);
}
function actualizar($id,$nombre,$email,$foto){
    $sql="UPDATE  alumno set nombre='$nombre',email='$email',foto='$foto' WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function actualizarSinFoto($id,$nombre,$email){
    $sql="UPDATE  alumno set nombre='$nombre',email='$email' WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}