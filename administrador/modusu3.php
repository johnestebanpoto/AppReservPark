    <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Clientes</title>
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
                $cedadmin3=$_POST['txtcedusu3'];
                $TipoDoc=$_POST['lstTipoDoc'];
                $DescTipoDoc= $_POST['lstDescTipoDoc'];
                $nomadmin3= $_POST['txtnomusu3'];
                $apeadmin3= $_POST['txtapeusu3'];
		$teladmin3= $_POST['txttelusu3'];
                $emailadmin3= $_POST['txtemailusu3'];
                $diradmin3= $_POST['txtdirusu3'];
                $roladmin3= $_POST['lstrolusu3'];
                $victima = $_POST['victima'];
                
		include("../conexion.php");
		$sql = "update usuarios set num_doc_usu='$cedadmin3', tipo_doc_usu='$TipoDoc', descripcion_tipo_doc='$DescTipoDoc', nom_usu='$nomadmin3', apellido_usu='$apeadmin3',tel_usu='$teladmin3', email_usu='$emailadmin3', dir_usu='$diradmin3',id_roles='$roladmin3' where num_doc_usu='$victima'";
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