<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $ciudad=$_GET['Ciudad'];
    include("conexion.php");
    $sql="DELETE FROM ciudades WHERE Ciudad='$ciudad'";
    $resultado=mysqli_query($conexion,$sql);

    if ($resultado) {
        echo "<script language='JavaScript'>
                alert('Los datos fueron eliminados correctamente a la BD.');
                location.assign('index.php');
              </script>";
    } else {
        echo "<script language='JavaScript'>
                alert('ERROR: Los datos no pudieron ser eliminados correctamente.');
                location.assign('index.php');
              </script>";
    }
    mysqli_close($conexion);
?>
