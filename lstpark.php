<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Listar Propietarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/miestilo.css" rel="stylesheet" type="text/css"/>        
        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>   
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/micodigo.js" type="text/javascript"></script>
    </head>
    <body><header>
            <div class="container">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <img src="images/faviconReservParkw2.png" alt="" class="img-responsive " />
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">   
                        <br>
                        <h1 class="text-center "><i>ReservPark</i></h1>
                    </div>
            
        </header> 
        <!--fin cabecera logo - titulo -->
        <!--modal para login de administrador-->
        <?php include '../AppWebPark/sesion/modalInicioSesion.php';?>
        <?php
            include ("./menus/menuPrincipal.php");
        ?>
        <div class="container">
            
            <h1>Lista de Propietarios</h1>
            <hr>
            <?php
		include ("./conexion.php");
		$sql = "select nom_park,dir_park,tel_park,desc_park from parqueaderos order by nom_park";
		echo "<table class='table table-striped'>";
		echo "<tr><th>Nombre</th> <th>Dirección</th> <th>Telefono</th> <th>Descripción</th> </tr>";
		$res = pg_query($con,$sql);
		while($mat = pg_fetch_array($res)){
				echo "<tr>";
				echo "<td> $mat[0] </td>" ;
				echo "<td> $mat[1] </td>" ;
				echo "<td> $mat[2] </td>" ;
				echo "<td> $mat[3] </td></tr>" ;                                
		}
		pg_close($con);
		echo "</table>";
	?>
        </div>
    </body>
</html>
