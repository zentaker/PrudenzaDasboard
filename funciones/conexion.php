<?php


function fnconexion() {

        $cn = mysqli_connect('localhost','root','');

        $bd = mysqli_select_db($cn,'prudenzav1');

        return $cn;
      
        

}


?>