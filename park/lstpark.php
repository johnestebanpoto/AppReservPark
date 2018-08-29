<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Listar Park</title>
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
            
            <h1>Lista de Parqueaderos</h1>
            <hr>
            <?php
		include ("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
		$sql = "select id_parqueadero,nombre_park,direccion_park,telefono_park,cuposcarros_park,cuposmotos_park,cod_barrio,ced_propietario,horarios_park,latitud_park,longitud_park from parqueaderos order by nombre_park";
                echo "<table class='table table-striped'>";
		echo "<tr><th>id_parqueadero</th><th>Nombre</th> <th>Direccion</th> <th>Telefono</th> <th>Cupos carros</th> <th>Cupos motos</th> <th>Codigo barrio</th> <th>Cedula propietario</th> <th>Horarios</th> <th>Latitud</th> <th>Longitud</th></tr>";
		$res = mysqli_query($bd,$sql);
		while($mat = mysqli_fetch_array($res)){
				echo "<tr>";
				echo "<td> $mat[0] </td>" ;
				echo "<td> $mat[1] </td>" ;
				echo "<td> $mat[2] </td>" ;
				echo "<td> $mat[3] </td>" ;
				echo "<td> $mat[4] </td>" ;
				echo "<td> $mat[5] </td>" ;
				echo "<td> $mat[6] </td>" ;
				echo "<td> $mat[7] </td>" ;
				echo "<td> $mat[8] </td>" ;
				echo "<td> $mat[9] </td>" ;
				echo "<td> $mat[10] </td></tr>" ;                                
		}
		mysqli_close($bd);
		echo "</table>";
	?>
        </div>
    </body>
</html>
