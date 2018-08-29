<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cargar contratos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="./css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="./js/jquery.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./js/micodigo.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include './dibujaMenuSuperAdmin.php';?>
        <div class="container">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <?php

                    $nom=$_POST["txtnom"];
                    $tmp=$_FILES["archivo"]["tmp_name"];/*se guarda el nombre temporal del archivo*/
                    $arc=$_FILES["archivo"]["name"];
                    $tam=$_FILES["archivo"]["size"];
                    $err=$_FILES["archivo"]["error"];/*bandera que indentifica si el archivo llega con exito o no*/

                    if($err==0){
                        echo "<ul>";
                        echo "<h2>El contrato se cargo correctamente</h2>";
                        echo "<li>Nombre del archivo: $arc</li>";
                        echo "<li>Tamaño (bytes): $tam</li>";
                        echo "</ul>";
                        move_uploaded_file($tmp, "./contratos/$arc");
                        echo "<h2>$nom</h2>";
                        echo "<img src='contratos/$arc' border=2>";
                    }
                    else{
                        echo "<h3>error</h3>";
                        echo "No se pudo cargar el contrato";
                    }
                ?>
                <hr>
                <a href="cargarcontratos.php">Volver</a>
            </div>
        <div class="col-sm-3"></div>
        </div>
    </body>
</html>
