<?php

$host ="localhost";
$basedatos ="scores";
$usuario ="root";
$contraseña =""; 

$conexion = new mysqli($host,$usuario,$contraseña,$basedatos);

if($conexion->connect_errno){

    echo "No Conectado";

}else{

    echo"Conectado";
    
}



?>