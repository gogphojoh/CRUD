<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudades</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
        include("conexion.php");
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Set default order by parameters
        $order_by = isset($_GET['order_by']) ? $_GET['order_by'] : 'Ciudad';
        $order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

        // Toggle the order direction
        $new_order = ($order === 'ASC') ? 'DESC' : 'ASC';

        // Form the SQL query based on the order by parameters
        $sql = "SELECT * FROM ciudades ORDER BY $order_by $order";
        $resultado = mysqli_query($conexion, $sql);

        if (isset($_POST['envio'])) {
            $ciudad = isset($_POST['busqueda']) ? $_POST['busqueda'] : null;
            $sql = "SELECT * FROM ciudades WHERE Ciudad LIKE '%$ciudad%'";
            $resultado = mysqli_query($conexion, $sql);
            switch ($resultado)
            {
                case (mysqli_num_rows($resultado) > 0) && $resultado!=null:
                echo "<script language='JavaScript'>
                alert('La ciudad fue encontrada');
                </script>";
                break;
                default:
                    echo "<script language='JavaScript'>
                    alert('ERROR: No se ha encontrado ninguna ciudad con ese nombre');
                    </script>";
                    $sql = "SELECT * FROM ciudades ORDER BY $order_by $order";
                    $resultado = mysqli_query($conexion, $sql);
                break;
            }
        }
    ?>
    <h1>CRUD ciudades</h1>
    <a href="agregar.php">Nueva Ciudad</a> <br><br>
    <section>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" id="busqueda" name="busqueda" placeholder="Buscar una ciudad" >
            <input type="submit" id="envio" name="envio" value="Buscar">
            <button href="index.php">Reiniciar búsquedas</button>
        </form>
    </section>
    <table>
        <thead>
            <tr>
                <th><a href="?order_by=Ciudad&order=<?php echo $new_order; ?>">Ciudad</a></th>
                <th><a href="?order_by=Pais&order=<?php echo $new_order; ?>">Pais</a></th>
                <th><a href="?order_by=Continente&order=<?php echo $new_order; ?>">Continente</a></th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th><a href="?order_by=Habitantes&order=<?php echo $new_order; ?>">Habitantes</a></th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
                while ($filas = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
                <td><?php echo $filas['Ciudad'] ?></td>
                <td><?php echo $filas['Pais'] ?></td>
                <td><?php echo $filas['Continente'] ?></td>
                <td><?php echo $filas['Latitud'] ?></td>
                <td><?php echo $filas['Longitud'] ?></td>
                <td><?php echo $filas['Habitantes'] ?></td>
                <td>
                    <?php echo "<a href='editar.php?Ciudad=" . $filas['Ciudad'] . "'>Editar</a>"; ?>
                    -
                    <?php echo "<a href='eliminar.php?Ciudad=" . $filas['Ciudad'] . "'>Eliminar</a>"; ?>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <?php 
        mysqli_close($conexion);
    ?>
</body>
</html>
