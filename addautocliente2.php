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
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/micodigo.js" type="text/javascript"></script>
        <script src="js/moduloadmin.js" type="text/javascript"></script>
    </head>
    <body>
        
        <div class="container">
            
            <?php
                $placa= $_POST['txtplacav'];
                $marca= $_POST['txtmarca'];
		$color= $_POST['txtcolor'];
		$estado= $_POST['txtestado'];
		$tipo= $_POST['lsttipo'];		
		
                include("./conexion.php");                
		$query = "insert into vehiculos (id,marca_vehiculo,color_vehiculo,estado_vehiculo,id_tipo_vehiculo) values('$placa','$marca','$color','$estado',$tipo);";
		$res = pg_query($con,$query);
                if ($res) {
                   echo "<div class='container'><div class='alert alert-success' role='alert'><strong>Atención</strong> Registro adicionado con éxito</div></div>";
                   echo "<h2 class='alingcenter'>Ahora ya puedes reservar tu cupo</h2>";
                   echo "<br><a class='btn btn-success' href='index.php'> Volver</a>";
                   
                }
                else {
                    echo "<div class='container'><div class='alert alert-danger' role='alert'><strong>Error</strong> Registro NO adicionado";
                    echo " - " . pg_last_error($con)  . "</div></div>";
                    echo "<br><a class='btn btn-success' href='index.php'> Volver</a>";
                }
		pg_close();
                
                
            ?>
            
        </div>
    </body>
</html>
