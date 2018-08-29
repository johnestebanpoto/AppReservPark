<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Modificar Propietarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include ("../dibujaMenuSuperAdmin.php");?>
        <div class="container">
            <?php
                
                $ced3 = $_POST['txtcedprop3'];
		$nom3 = $_POST['txtnomprop3'];
		$tel3 = $_POST['txttelprop3'];
                $victima = $_POST['victima'];
                
		include("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
		$sql = "update propietarios set cc_propietarios='$ced3', nom_propietario='$nom3', tel_propietario='$tel3' where cc_propietarios='$victima'";
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
