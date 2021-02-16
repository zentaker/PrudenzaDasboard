<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor</title>
    <link rel="stylesheet" href="style.css">

<body>

<?php



  $cn=mysqli_connect('localhost','u472085672_prudenza','Palomino12345');

  $bd=mysqli_select_db($cn,'u472085672_prudenzav1');
  
  if(($cn==true) && ($bd==true)){
  
      echo "Conexión Satisfactoria";
  
  }else{
  
      echo "error de conexión";
  
      mysqli_close($cn);
  
  }
  

  echo "<br>";

 $sqlselect="select * from admins";
  $rs = mysqli_query($cn,  $sqlselect);

  echo "<b>". "id " . " usuario " . " nombre " . " password " . "<br>" . "</b>";

  while ($row = mysqli_fetch_row($rs)) {
      echo $row[0]. "    ". $row[1]." " .$row[2]." " . $row[3] . " <br> ";
  }





?>
