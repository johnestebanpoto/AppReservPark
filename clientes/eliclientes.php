<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Borrar Clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
    </head>
    <body>
        
        <?php include ("../dibujaMenuSuperAdmin.php") ?>    
        <div class="container">
            
            <h1>Eliminar Clientes</h1>
            <hr>
            <div class="col-sm-5">
                <form action="../clientes/eliclientes2.php" method="post">
            <?php
		include ("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
		$sql = "select cc_cliente, nombre_cliente, telefono_cliente,email_cliente,parqueadero from clientes order by nombre_cliente";
		echo "<table class='table table-striped'>";
		echo "<tr><th>Seleccione una cedula</th> <th>Nombre del cliente</th> </tr>";
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
                <input type="submit" class="btn-danger btn-sm" value="Eliminar!">
            </form>
            </div>
        </div>
    </body>
</html>
