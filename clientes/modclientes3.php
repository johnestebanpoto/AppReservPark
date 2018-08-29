<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificar Clientes</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/estilo.css" rel="stylesheet">
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>        
    </head>
    <body>
        <?php include ("../dibujaMenuSuperAdmin.php");?>
        <div class="container">
            <?php
                $cedcli3=$_POST['txtcedcli3'];
                $nomcli3= $_POST['txtnomcli3'];
		$telcli3= $_POST['txttelcli3'];
		$emailcli3= $_POST['txtemailcli3'];
                $lstparkcli3= $_POST['lstparkcli3'];
                $victima = $_POST['victima'];
                
		include("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
		$sql = "update clientes set cc_cliente='$cedcli3', nombre_cliente='$nomcli3', telefono_cliente='$telcli3', email_cliente='$emailcli3', parqueadero='$lstparkcli3' where cc_cliente='$victima'";
		$res = mysqli_query($bd,$sql);
                if ($res) {
                   echo "<div class='alert alert-success' role='alert'><strong>Atención</strong> Registro Modificado con éxito</div>";
                }
                else {
                    echo "<div class='alert alert-danger' role='alert'><strong>Error</strong> Registro NO Modificado";
                    echo " - " .  mysqli_error($bd)  . "</div>";
                }
		mysqli_close($bd);
            ?>
        </div>
    </body>
</html>