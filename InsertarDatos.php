<?php

    header('Acces-Control-Allow-Origin: *');

    require_once 'conexion.php';

    $NombreJugador = $_GET['Nombre'];
    $Puntaje = $_GET['Puntos'];
    

    $Insertar = $conexion->query("INSERT INTO `tablapuntajes`(`Nombre`, `Puntos`) VALUES ('$NombreJugador','$Puntaje')");


    echo $NombreJugador ;
    echo $Puntaje;



?>