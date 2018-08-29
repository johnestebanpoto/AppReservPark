<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Borrar Admin</title>
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
            
            <h1>Eliminar Adminstradores</h1>
            <hr>
            <div class="col-sm-5">
                <form action="../administrador/eliadmin2.php" method="post">
            <?php
		include ("../conexion.php");
		$sql = "select * from usuarios order by apellido_usu;";
		echo "<table class='table table-striped'>";
		echo "<tr><th>Seleccione una cedula</th> <th>Nombre del Administrador</th> </tr>";
		$res = pg_query($con,$sql);
		while($mat = pg_fetch_array($res)){
				echo "<tr>";
                                echo "<td> <input type='radio' name='victima' value='$mat[0]'> </td>";
				echo "<td> $mat[3] </td>" ;
				echo "</tr>" ;
		}
		pg_close($con);
		echo "</table>";
            ?>
                <hr>
                <input type="submit" class="btn-danger btn-sm" value="Eliminar!">
            </form>
            </div>
        </div>
    </body>
</html>
