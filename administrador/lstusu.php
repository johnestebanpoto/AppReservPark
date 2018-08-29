<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Listar Usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <div class="container">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <img src="../images/faviconReservParkw2.png" alt="" class="img-responsive " />
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">   
                        <br>
                        <h1 class="text-center "><i>ReservPark</i></h1>
                    </div>
            
        </header> 
        <?php
            include '../sesion/verificar_sesion.php';
            if(verificar()==1){
                include ("../menus/dibujaMenuAdmin.php"); 
                include '../sesion/modalCerrarSesion.php';
        ?>
        <div class="container">
            
            <h2>Lista de Clientes</h2>
            <hr>
            <?php
		include ("../conexion.php");
		$sql = "select num_doc_usu, tipo_doc_usu, nom_usu,apellido_usu,tel_usu,email_usu,dir_usu from usuarios where id_roles=3 order by apellido_usu;";
		echo "<table class='table table-striped'>";
		echo "<tr><th>Cedula</th> <th>Tipo documento</th> <th>Nombres</th> <th>Apellidos</th> <th>Telefono</th> <th>Email</th> <th> Dirección </th></tr>";
		$res = pg_query($con,$sql);
		while($mat = pg_fetch_array($res)){
				echo "<tr>";
				echo "<td> $mat[0] </td>" ;
				echo "<td> $mat[1] </td>" ;
				echo "<td> $mat[2] </td>";                                
				echo "<td> $mat[3] </td>" ;                                
				echo "<td> $mat[4] </td>" ;                                
				echo "<td> $mat[5] </td>" ;                                
				echo "<td> $mat[6] </td></tr>" ;                                
		}
		pg_close($con);
		echo "</table>";
	?>
            <?php } ?>    
        </div>
    </body>
</html>
