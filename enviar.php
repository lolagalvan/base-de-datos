<?php
	$diagnostico= $_POST["descargarse"];
	$email = $_POST["email"];
    $servername = "127.0.0.1";
    $database = "mydb";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
       //

         $resultado=mysqli_query($conexion,"insert into ayuda values(null, '$email', '$diagnostico', now());");
         echo "se ha enviado";
    
    }