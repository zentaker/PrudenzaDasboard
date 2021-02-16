<?php



include("conexion.php");
$cn = fnconexion();
$bd = mysqli_select_db($cn,'prudenzav1');
    

    $id_seguro = $_POST['codigo-seguro'];
    $nombre = $_POST['nombre-seguro'];
    $ramo = $_POST['ramo-seguro'];
    $id_compania = $_POST['compania-seguro'];
    $valorAsegurado = $_POST['valor-asegurado'];
   
    //obtener la fecha del evento
    $fechaLanzamiento = $_POST['fecha-lanzamiento'];
   
    $comentario = $_POST['comentarios-seguro'];
    $estado = $_POST['estado-seguro'];

    

if(($cn==true) && ($bd==true)){

    echo "Conexión Satisfactoria";

}else{

    echo "error de conexión";

    mysqli_close($cn);

}

   


    $sqlinsert = "INSERT into seguros (id_seguro, nombre, ramo, id_compania, valorAsegurado, fechaLanzamiento, comentario ) VALUES ('$id_seguro ','$nombre','$ramo', $id_compania, $valorAsegurado, '$fechaLanzamiento', '$comentario')";

    $rs = mysqli_query($cn, $sqlinsert);
    
    echo "<br>";
    mysqli_query($cn, "commit");
  


    
  


?>