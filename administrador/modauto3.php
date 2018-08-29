    <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Vehiculos</title>
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
        <?php
            include '../sesion/verificar_sesion.php';
            if(verificar()==1){
                include ("../menus/dibujaMenuAdmin.php"); 
                include '../sesion/modalCerrarSesion.php';
        ?>
        <div class="container">
            <?php
                $placa3=$_POST['txtplaca3'];
                $marca3=$_POST['txtmarca3'];
                $color3= $_POST['txtcolor3'];
                $estado3= $_POST['txtestado3'];
                $tipo3= $_POST['lsttipoauto3'];
                $victima = $_POST['victima'];
                
		include("../conexion.php");
		$sql = "update vehiculos set id='$placa3', marca_vehiculo='$marca3', color_vehiculo='$color3', estado_vehiculo='$estado3',id_tipo_vehiculo='$tipo3' where id='$victima'";
		$res = pg_query($con,$sql);
                if ($res) {
                   echo "<div class='alert alert-success' role='alert'><strong>Atención</strong> Registro Modificado con éxito</div>";
                }
                else {
                    echo "<div class='alert alert-danger' role='alert'><strong>Error</strong> Registro NO Modificado";
                    echo " - " .  mysqli_error($bd)  . "</div>";
                }
		pg_close($con);
            ?>
        </div>
            <?php }?>
    </body>
</html>