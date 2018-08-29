<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Listar Admin</title>
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
            
            <h1>Lista de Administradores</h1>
            <hr>
            <?php
		include ("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
		$sql = "select cc_admin,nombre_admin, usuario_admin, password_admin,telefono_admin,email_admin,tipo_admin,parqueadero from administradores order by nombre_admin";
		echo "<table class='table table-striped'>";
		echo "<tr><th>Cedula</th> <th>Nombre</th> <th>Usuario</th> <th>Password</th> <th>Telefono</th> <th>Email</th> <th>Tipo Administrador</th> <th>Parqueadero</th> </tr>";
		$res = mysqli_query($bd,$sql);
		while($mat = mysqli_fetch_array($res)){
				echo "<tr>";
				echo "<td> $mat[0] </td>" ;
				echo "<td> $mat[1] </td>" ;
				echo "<td> $mat[2] </td>";                                
				echo "<td> $mat[3] </td>" ;                                
				echo "<td> $mat[4] </td>" ;                                
				echo "<td> $mat[5] </td>" ;                                
				echo "<td> $mat[6] </td>" ;                                
				echo "<td> $mat[7] </td></tr>" ;                                
		}
		mysqli_close($bd);
		echo "</table>";
	?>
        </div>
    </body>
</html>
