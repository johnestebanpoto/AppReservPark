<!DOCTYPE html>
<html>
    <head>
        <title>Modificar Park</title>
        <meta charset="UTF-8">
        <title>Ejemplo basico BD</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/estilo.css" rel="stylesheet">
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>        
    </head>
    <body>
        <?php include ("../dibujaMenuSuperAdmin.php");?>
        <div class="container">
            <?php
                $nompark3= $_POST['txtnompark3'];
		$dirpark3 = $_POST['txtdirpark3'];
		$telpark3= $_POST['txttelpark3'];
		$cuposcar3= $_POST['txtcuposcar3'];
		$cuposmot3= $_POST['txtcuposmot3'];
		$lstbar3= $_POST['lstbar3'];
		$cedpropark3= $_POST['txtccpropark3'];
		$lsthorario3= $_POST['lsthorario3'];
		$lat3= $_POST['txtlatpark3'];
		$lng3= $_POST['txtlngpark3'];
                $victima = $_POST['victima'];
                
		include("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
		$sql = "update parqueaderos set nombre_park='$nompark3', direccion_park='$dirpark3', telefono_park='$telpark3', cuposcarros_park='$cuposcar3', cuposmotos_park='$cuposmot3', cod_barrio='$lstbar3', ced_propietario='$cedpropark3', horarios_park='$lsthorario3',latitud_park='$lat3',longitud_park='$lng3' where id_parqueadero='$victima'";
		$res = mysqli_query($bd,$sql);
                if ($res) {
                   echo "<div class='alert alert-success' role='alert'><strong>Atención</strong> Registro Modificado con éxito</div>";
                }
                else {
                    echo "<div class='alert alert-danger' role='alert'><strong>Error</strong> Registro NO Modificado";
                    echo " - " .  mysqli_error($bd)  . "</div>";
                }
		mysqli_close($bd);
            ?>
        </div>
    </body>
</html>