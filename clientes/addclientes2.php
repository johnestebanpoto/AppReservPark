<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Adicionar Clientes</title>
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
                $cedcli= $_POST['txtcedcli'];
		$nomcli= $_POST['txtnomcli'];
		$telcli= $_POST['txttelcli'];
		$emailcli= $_POST['txtemailcli'];		
		$parkcli= $_POST['lstparkcli'];		
		
		include("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
		$sql = "insert into clientes values ('$cedcli' ,'$nomcli','$telcli','$emailcli','$parkcli')";
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
