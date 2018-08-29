<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Adicionar Park</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <?php
                include ("../dibujaMenuSuperAdmin.php");
                $nompak = $_POST['txtnompark'];
		$dirpark = $_POST['txtdirpark'];
		$telpark = $_POST['txttelpark'];		
		$cuposcar = $_POST['txtcuposcarros'];		
		$cuposmot = $_POST['txtcuposmotos'];		
		$barrios = $_POST['lstbar'];		
		$cedpropark= $_POST['txtccpropark'];		
		$horario= $_POST['lsthorario'];		
		$lat= $_POST['txtlatpark'];		
		$lng= $_POST['txtlngpark'];		
		
		include("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
		$sql = "insert into parqueaderos values ('null' ,'$nompak','$dirpark','$telpark','$cuposcar','$cuposmot','$barrios','$cedpropark','$horario','$lat','$lng')";
		$res = mysqli_query($bd,$sql);
                if ($res) {
                   echo "<div class='container'><div class='alert alert-success' role='alert'><strong>Atención</strong> Registro adicionado con éxito</div></div>";
                }
                else {
                    echo "<div class='container'><div class='alert alert-danger' role='alert'><strong>Error</strong> Registro NO adicionado";
                    echo " - " .  mysqli_error($bd)  . "</div></div>";
                }
		mysqli_close($bd);
            ?>
            
        </div>
    </body>
</html>
