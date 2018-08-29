<!DOCTYPE html>
<html>
    <head>
        <title>Modificar Park</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
    </head>
    <body>
        
            <?php
                include ("../dibujaMenuSuperAdmin.php");
            ?>
        <div class="container">
            <h1>Modificar Parqueaderos</h1>
            <hr>
            <div class="col-sm-5">
                <form action="../park/modpark2.php" method="post">
            <?php
		include ("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
		$sql = "select id_parqueadero,nombre_park,direccion_park,telefono_park,cuposcarros_park,cuposmotos_park,cod_barrio,ced_propietario,horarios_park,latitud_park,longitud_park from parqueaderos order by nombre_park";
		echo "<table class='table table-striped'>";
		echo "<tr><th>Seleccione un parqueadero</th> <th>Nombre del parqueadero</th> </tr>";
		$res = mysqli_query($bd,$sql);
		while($mat = mysqli_fetch_array($res)){
				echo "<tr>";
                                echo "<td> <input type='radio' name='victima' value='$mat[0]'> </td>";
				echo "<td> $mat[1] </td>" ;
				echo "</tr>" ;
		}
		mysqli_close($bd);
		echo "</table>";
            ?>
                <hr>
                <input type="submit" class="btn-primary btn-sm" value="Modificar">
            </form>
            </div>
        </div>
        
    </body>
</html>