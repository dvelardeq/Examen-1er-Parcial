<?php
    session_start();
    include "../cabeza.inc.php";
    include "../cabecera.inc.php";
    if($_SESSION['personaje'] == 'est'){
        include "cuerpoest.inc.php";
    }else{
        include "cuerpodoc.inc.php";
    }
    include "../pie.inc.php";
?>