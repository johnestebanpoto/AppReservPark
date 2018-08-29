<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Ver vehiculos</title>
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
            
            <h2>Lista de vehiculos</h2>
            <hr>
            <?php
		include ("../conexion.php");
		$sql = "select v.id, v.marca_vehiculo, v.color_vehiculo,v.estado_vehiculo,t.nom_tipo_vehiculo from vehiculos v inner join tipo_vehiculo t on v.id_tipo_vehiculo=t.id;";
		echo "<table class='table table-striped'>";
		echo "<tr><th>Placa</th> <th>Marca</th> <th>Color</th> <th>Estado</th> <th>Tipo</th></tr>";
		$res = pg_query($con,$sql);
		while($mat = pg_fetch_array($res)){
				echo "<tr>";
				echo "<td> $mat[0] </td>" ;
				echo "<td> $mat[1] </td>" ;
				echo "<td> $mat[2] </td>";                                                             
				echo "<td> $mat[3] </td>";                                                             
				echo "<td> $mat[4] </td></tr>" ;                                
		}
		pg_close($con);
		echo "</table>";
	?>
            <?php } ?>    
        </div>
    </body>
</html>
