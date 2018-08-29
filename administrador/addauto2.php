<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Adicionar Vehiculo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/moduloadmin.js" type="text/javascript"></script>
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
        <?php include ("../menus/dibujaMenuAdmin.php");?>
        <div class="container">
            
            <?php
                include '../sesion/modalCerrarSesion.php';
                $placa= $_POST['txtplacav'];
                $marca= $_POST['txtmarca'];
		$color= $_POST['txtcolor'];
		$estado= $_POST['txtestado'];
		$tipo= $_POST['lsttipo'];		
		
                include("../conexion.php");                
		$query = "insert into vehiculos (id,marca_vehiculo,color_vehiculo,estado_vehiculo,id_tipo_vehiculo) values('$placa','$marca','$color','$estado',$tipo);";
		$res = pg_query($con,$query);
                if ($res) {
                   echo "<div class='container'><div class='alert alert-success' role='alert'><strong>Atención</strong> Registro adicionado con éxito</div></div>";
                }
                else {
                    echo "<div class='container'><div class='alert alert-danger' role='alert'><strong>Error</strong> Registro NO adicionado";
                    echo " - " . pg_last_error($con)  . "</div></div>";
                }
		pg_close();
                
                
            ?>
            
        </div>
    </body>
</html>
