<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Borrar Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include ("../dibujaMenuSuperAdmin.php") ?>
        <div class="container">
            <?php
                
                $cod = $_POST['victima'];
		include("../conexion.php");
		$sql = "delete from usuarios where num_doc_usu='$cod'";
		$res = pg_query($con,$sql);
                if ($res) {
                   echo "<div class='alert alert-success' role='alert'><strong>Atención</strong> Registro Eliminado con éxito</div>";
                }
                else {
                    echo "<div class='alert alert-danger' role='alert'><strong>Error</strong> Registro NO Eliminado";
                    echo " - " . pg_last_error($con)  . "</div>";
                }
		pg_close($con);
            ?>
        </div>
    </body>
</html>
