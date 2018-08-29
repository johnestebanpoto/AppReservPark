<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registrar usuario</title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/micodigo.js" type="text/javascript"></script>
        <script src="js/micodigo2.js" type="text/javascript"></script>
    </head>
    <body>
        
        <div class="container">
            <?php
                
                $cedAdmin= $_POST['txtCedAdmin'];
		$tipoDoc= $_POST['lstTipoDoc'];
		$desc= $_POST['lstDescTipoDoc'];
		$nomAdmin= $_POST['txtNomAdmin'];		
		$apeAdmin= $_POST['txtApeAdmin'];	
		$telAdmin= $_POST['txtTelAdmin'];	
		$emailAdmin= $_POST['txtEmailAdmin'];	
		$dirAdmin= $_POST['txtDirAdmin'];	
		$rolAdmin= $_POST['lstRolAdmin'];	
                
		
		include("./conexion.php");                
		//$sql = "insert into clientes values ('$cedcli' ,'$nomcli','$telcli','$emailcli','$parkcli')";
		$sql = "insert into usuarios (num_doc_usu,tipo_doc_usu,descripcion_tipo_doc,nom_usu,apellido_usu,tel_usu,email_usu,dir_usu,id_roles,usu,pwd) values('$cedAdmin','$tipoDoc','$desc','$nomAdmin','$apeAdmin','$telAdmin','$emailAdmin','$dirAdmin',$rolAdmin,'','');";
		$res = pg_query($con,$sql);
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
            <hr>
            <a href="index.php" class="alingcenter">Volver</a>
        </div>
            
                   
    </body>
</html>
