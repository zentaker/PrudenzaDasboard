<?php

error_reporting(0);


  include("conexion.php");
        $cn = fnconexion();
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $nivel = $_POST['nivel'];
    $id_registro = $_POST['id_registro'];






if($_POST['registro'] == 'nuevo') {

    $opciones = array(
        'cost' => 12
    );

    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones );

    try {

      
        $stmt = $cn->prepare("INSERT INTO admins (usuario, nombre, password) VALUES (?, ?, ? )");
        $stmt->bind_param("sss", $usuario, $nombre, $password_hashed  );
        $stmt->execute();
        //$id_registro = $stmt->insert_id;
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_actualizado' => $stmt->insert_id

            ); 

        } else{
            $respuesta = array(
                'respuesta' => 'error',
                

            ); 

        }
        $stmt->close();
        $cn->close();
        

    } catch(Exception $e) {
        echo "Error: ". $e->getMessage();

    }
    die(json_encode($respuesta));

   
};

if($_POST['registro'] == 'actualizar') {

    
    try {   
        if(empty($_POST['password']) ) {
            $stmt = $cn->prepare("UPDATE admins SET usuario=?, nombre=?, editado=NOW(), nivel=? WHERE id_admin=?");
            $stmt->bind_param("sssi", $usuario, $nombre, $nivel, $id_registro);


        } else {
            $opciones = array(
                'cost' => 12
            );

            $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones );
            $stmt = $cn->prepare('UPDATE admins SET usuario=?, nombre=?, password=?, editado=NOW(), nivel=? WHERE id_admin=?');
            $stmt->bind_param("ssssi", $usuario, $nombre, $hash_password, $nivel, $id_registro);

        }
        
        



        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_actualizado' => $stmt->insert_id

            ); 

        } else{
            $respuesta = array(
                'respuesta' => 'error',
                

            ); 

        }
        $stmt->close();
        $cn->close();


    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
            

        ); 

    }
    die(json_encode($respuesta));
    

};

if($_POST['registro'] == 'eliminar') {
    $id_borrar = $_POST['id'];

    try {
        $stmt = $cn->prepare('DELETE FROM admins WHERE id_admin=?');
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array (
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar
            );

        } else {
            $respuesta = array (
                'respuesta' => 'error'
            
            );


        }


    } catch (Exception $e) {
        $respuesta = array (
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta)); // se envia devuelta al admin-ajax.js


}










?>