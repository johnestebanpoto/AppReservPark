<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cancelar reserva</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
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
        <?php include '../menus/dibujaMenuAdmin.php';?>
        <div class="container">
             
            <?php
                $victima = $_POST["victima"];
                //se obtiene todos los datos de ese empleado
		include("../conexion.php");
		$sql = "select * from reservas where id='$victima'";
		$res = pg_query($con,$sql);
		$mat = pg_fetch_array($res);
                
		//$newDate = date("Y/m/d", strtotime($fecharesreg));
				
		
                $sqlupdatereservas="update reservas set estado=0 where id_parqueaderos='$mat[4]' and num_doc_usu='$mat[3]' and nom_cupo='$mat[8]';";
                $sqlupdatecupos="update cupos set estado_cupo=0, desc_estado_cupo='Disponible' where id_parqueaderos='$mat[4]' and nom_cupo='$mat[8]';";
		$resupdatereservas = pg_query($con,$sqlupdatereservas);
		$resupdatecupos = pg_query($con,$sqlupdatecupos);
                if ($resupdatecupos && $resupdatereservas) {
                   echo "<div class='container'><div class='alert alert-success' role='alert'><strong>Atención</strong> Reserva cancelada</div></div>";
                   echo "<a class='navbar-brand' href='admin.php' id='btningrevehi'>Inicio</a>";
                }
                else {
                    echo "<div class='container'><div class='alert alert-danger' role='alert'><strong>Error</strong> Reserva no cancelada";
                    echo " - " .  pg_error($con)  . "</div></div>";
                }
		pg_close($con);
            ?>
            
        </div>
    </body>
</html>
