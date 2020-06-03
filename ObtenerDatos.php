<?php
header('Access-Control-Allow-Origin: *');

require_once 'conexion.php';


$consulta=$conexion->query("SELECT * FROM `tablapuntajes` ORDER BY `Puntos` DESC ");
$total = mysqli_num_rows($consulta);

//CargaDatos
for($i=0; $i < $total; $i++){

    $datos = mysqli_fetch_object($consulta);
    $DatosBase = $datos->Nombre."|".$datos->Puntos."|";
    echo $DatosBase;

}



?>