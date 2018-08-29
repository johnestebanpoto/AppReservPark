<!DOCTYPE html>
<html>
    <head>
        <title>Modificar Clientes</title>
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
            <h1>Modificar Clientes</h1>
            <hr>
            <div class="col-sm-5">
                <form action="../clientes/modclientes2.php" method="post">
            <?php
		include ("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
		$sql = "select cc_cliente, nombre_cliente, telefono_cliente,email_cliente,parqueadero from clientes order by nombre_cliente";
		echo "<table class='table table-striped'>";
		echo "<tr><th>Seleccione una cédula</th> <th>Nombre del Cliente</th> </tr>";
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