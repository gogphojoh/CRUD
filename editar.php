<!DOCTYPE html>
<?php
    include("conexion.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (isset($_POST['enviar'])) {
        $continente = isset($_POST['cont']) ? $_POST['cont'] : null;
        $pais = isset($_POST['pais']) ? $_POST['pais'] : null;
        $ciudad = isset($_POST['ciud']) ? $_POST['ciud'] : null;
        $latitud = isset($_POST['lati']) ? $_POST['lati'] : null;
        $longitud = isset($_POST['long']) ? $_POST['long'] : null;
        $habitantes = isset($_POST['habi']) ? $_POST['habi'] : null;

        include("conexion.php");

        if ($continente && $pais && $ciudad && $latitud && $longitud && $habitantes) {
            $sql = "UPDATE `ciudades` SET Continente='$continente', Pais='$pais', Ciudad='$ciudad', Latitud='$latitud', Longitud='$longitud', Habitantes='$habitantes' WHERE Ciudad='$ciudad'";
            $resultado = mysqli_query($conexion, $sql);

            if ($resultado) {
                echo "<script language='JavaScript'>
                        alert('Los datos fueron actualizados correctamente a la BD.');
                        location.assign('index.php');
                      </script>";
            } else {
                echo "<script language='JavaScript'>
                        alert('ERROR: Los datos no pudieron ser actualizados correctamente.');
                        location.assign('index.php');
                      </script>";
            }
            mysqli_close($conexion);
        } else {
            echo "<script language='JavaScript'>
                    alert('ERROR: Todos los campos son obligatorios.');
                    location.assign('index.php');
                  </script>";
        }
    } else {
        if (isset($_GET['Ciudad'])) {
            $ciudad = $_GET['Ciudad'];
            $sql = "SELECT * FROM ciudades WHERE Ciudad='$ciudad'";
            $resultado = mysqli_query($conexion, $sql);
            if ($resultado && mysqli_num_rows($resultado) > 0) {
                $fila = mysqli_fetch_assoc($resultado);
                $continente = $fila["Continente"];
                $pais = $fila["Pais"];
                $latitud = $fila["Latitud"];
                $longitud = $fila["Longitud"];
                $habitantes = $fila["Habitantes"];
            } else {
                echo "<script language='JavaScript'>
                        alert('ERROR: No se encontró la ciudad especificada.');
                        location.assign('index.php');
                      </script>";
                exit();
            }
            mysqli_close($conexion);
        } else {
            echo "<script language='JavaScript'>
                    alert('ERROR: No se especificó ninguna ciudad.');
                    location.assign('index.php');
                  </script>";
            exit();
        }
    }
?>
    <h1>Editar Ciudad: " <?php echo htmlspecialchars($ciudad);?> "</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="cont"> Continente: </label>
        <input type="text" id="cont" name="cont" value="<?php echo htmlspecialchars($continente); ?>" required> <br> <br>
        <label for="pais"> Pais: </label>
        <input type="text" id="pais" name="pais" value="<?php echo htmlspecialchars($pais); ?>" required> <br> <br>
        <input type="hidden" id="ciud" name="ciud" value="<?php echo htmlspecialchars($ciudad); ?>" required>
        <label for="lati"> Latitud: </label>
        <input type="text" id="lati" name="lati" value="<?php echo htmlspecialchars($latitud); ?>" required> <br> <br>
        <label for="long"> Longitud: </label>
        <input type="text" id="long" name="long" value="<?php echo htmlspecialchars($longitud); ?>" required> <br> <br>
        <label for="habi"> Habitantes: </label>
        <input type="text" id="habi" name="habi" value="<?php echo htmlspecialchars($habitantes); ?>" required> <br> <br>
        <input type="submit" name="enviar" value="Actualizar">
        <a href="index.php">Regresar</a>
    </form>
</body>
</html>
