<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Adicionar Admin</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/micodigo.js" type="text/javascript"></script>
        <script src="js/codigo2.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <div class="container">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <img src="images/faviconReservParkw2.png" alt="" class="img-responsive " />
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">   
                        <br>
                        <h1 class="text-center "><i>ReservPark</i></h1>
                    </div>
            
            </header>
        <?php include './menus/menuPrincipal.php';?>
        <div class="container">
             
            <?php
                
                ini_set('date.timezone', 'America/Mexico_City');
                $fechaactual= date('Y-m-d', time());
                $horaactual= date('H:i:s', time());
                $cedcliente= $_POST['cedula2'];
		$placavehi= $_POST['placa2'];
		$parkid= $_POST['lstparkreg'];
		$tipovehi= $_POST['lsttipovehi'];
		$cupores= $_POST['lstcupos'];
                
		//$newDate = date("Y/m/d", strtotime($fecharesreg));
				
		
		include("./conexion.php");
                $sql="update cupos set estado_cupo=1,desc_estado_cupo='Reservado' where nom_cupo='$cupores' and id_parqueaderos='$parkid';";
		$sql2 = "insert into reservas (fecha_reserva,hora_reserva,num_doc_usu,id_parqueaderos,id_tipo_vehiculo,estado,id_parks,nom_cupo) values ('$fechaactual','$horaactual','$cedcliente','$parkid','$tipovehi',1,'$parkid','$cupores');";
		$res = pg_query($con,$sql);
		$res2 = pg_query($con,$sql2);
                if ($res && $res2) {
                   echo "<div class='container'><div class='alert alert-success' role='alert'><strong>Atención</strong> Registro adicionado con éxito</div></div>";
                   echo "<a class='navbar-brand' href='index.php' id='btningrevehi'>Inicio</a>";
                }
                else {
                    echo "<div class='container'><div class='alert alert-danger' role='alert'><strong>Error</strong> Registro NO adicionado";
                    echo " - " .  pg_error($con)  . "</div></div>";
                }
		pg_close($con);
            ?>
            
        </div>
    </body>
</html>
