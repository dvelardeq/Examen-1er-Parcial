<?php 
    include "conexion.inc.php";
    session_start();
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $res = mysqli_query($con, "SELECT p.ci, p.nombre as nombre, u.usuario, u.contrasena, p.personaje FROM usuario u, persona p WHERE usuario='".$usuario."' AND contrasena='".$contraseña."' AND u.ci=p.ci");
    $fila = mysqli_fetch_array($res);
    if(isset($fila)){
        $_SESSION['ci'] = $fila["ci"];
        $_SESSION['nombre'] = $fila["nombre"];
        $_SESSION['personaje'] = $fila["personaje"];
        header("Location: ../VistaUsuario/");
    }else{
        include "../cabeza.inc.php";
        include "../cabecera.inc.php";
        include "cuerpo.inc.php";
        include "../pie.inc.php";
    }
?>