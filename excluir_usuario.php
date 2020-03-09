<?php
    require_once 'classes/Usuarios.php';

    $usuario = new Usuarios();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $usuario->delete($id);
        header('location: lista_usuarios.php');
    }
    else {
        header('location: lista_usuarios.php');
    }
