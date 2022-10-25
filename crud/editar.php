<?php 
$id=$_GET['id'];
include "config/bd.php";
$datos=ListarunAlumno($id);
$nombre=$datos['nombre'];
$email=$datos['email'];
$foto=$datos['foto'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="w-50 bg.light p-3 m-auto">
            <form action="acciones/actualizar.php" method="POST" enctype="multipart/form-data">
                <div class="bg-primary p-2">
                    <a class="btn btn-warning btn-sm" href="index.php">Inicio</a>
                    <a class="btn btn-info btn-sm" href="ver.php?id=<?php echo $id ?>">Ver</a>
                    <a class="btn btn-danger btn-sm" href="acciones/eliminar.php?id=<?php echo $id ?>">Eliminar</a>
                </div>
                <input type="hidden" name="id" value="<?=$id?>">
                    <h3 class="text-center"><?=$nombre ?></h3>
                    <label>Nombre del alumno</label>
                    <input class='form-control' type="text" name="nombre" value="<?=$nombre?>" >
                    <label>Correo del alumno</label>
                    <input class='form-control' type="email" name="email" value="<?=$email?>">
                    <label>Foto del alumno</label>
                    <input class='form-control' type="file" name="foto" >
                    <center><img class="mt-2" src="data:image/jpg;base64,<?=base64_encode($foto) ?>"></center>
                    <br>
                    <button class="btn btn-primary mt-2" type="submit">Actualizar</button>
            </form>
        </div>
    </div>
</body>
</html>