<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
    <link rel="stylesheet" type="text/css" href="styles3.css">
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
            $sql = "INSERT INTO `ciudades` (Continente, Pais, Ciudad, Latitud, Longitud, Habitantes) VALUES ('$continente', '$pais', '$ciudad', '$latitud', '$longitud', '$habitantes')";
            $resultado = mysqli_query($conexion, $sql);

            if ($resultado) {
                echo "<script language='JavaScript'>
                        alert('Los datos fueron ingresados correctamente a la BD.');
                        location.assign('index.php');
                      </script>";
            } else {
                echo "<script language='JavaScript'>
                        alert('ERROR: Los datos no pudieron ser ingresados correctamente.');
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
    }
    ?>
    <h1>Agregar nueva ciudad</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="cont"> Continente: </label>
        <input type="text" id="cont" name="cont" required> <br> <br>
        <label for="pais"> Pais: </label>
        <input type="text" id="pais" name="pais" required> <br> <br>
        <label for="ciud"> Ciudad: </label>
        <input type="text" id="ciud" name="ciud" required> <br> <br>
        <label for="lati"> Latitud: </label>
        <input type="text" id="lati" name="lati" required> <br> <br>
        <label for="long"> Longitud: </label>
        <input type="text" id="long" name="long" required> <br> <br>
        <label for="habi"> Habitantes: </label>
        <input type="text" id="habi" name="habi" required> <br> <br>
        <input type="submit" name="enviar" value="Agregar">
        <a href="index.php">Regresar</a>
    </form>
</body>
</html>
