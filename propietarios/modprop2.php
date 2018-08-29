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
        
            <?php
                include ("../dibujaMenuSuperAdmin.php");
            ?>
            <div class="container">
            <h1>Modificar Propietarios</h1>
            <hr>
            <div class="col-sm-5">
                <form action="../propietarios/modprop3.php" method="post">
            <?php
		include ("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
                //se recupera la cedula del empleado a modificar
                $victima = $_POST["victima"];
                //se obtiene todos los datos de ese empleado
		$sql = "select * from propietarios where cc_propietarios='$victima'";
		$res = mysqli_query($bd,$sql);
		$mat = mysqli_fetch_array($res);
                //dibujo los datos del empleado en el formulario 
                //puede existir mas de un script PHP
            ?>
                <label>Cedula</label>
                <!--Se debe pasar la cedula a la siguiente pagina para determianr el empleado que se quiere modificar, esto es un campo oculto-->
                <input type="hidden" id="victima" name="victima" value ="<?php echo $victima ?>">  
                <input type="number" id="txtcedprop3" name="txtcedprop3" required min="1" class="form-control" value ="<?php echo $mat[0] ?>">  
		<label>Nombre</label>
		<input type="text" id="txtnomprop3" name="txtnomprop3" maxlength="30" required class="form-control" value ="<?php echo $mat[1] ?>">
		                
		<label>Teléfono</label>
		<input type="number" id="txttelprop2" name="txttelprop3" required min="0" class="form-control" value ="<?php echo $mat[2] ?>"><br>
                
                <hr>
                <input type="submit" class="btn-primary btn-sm" value="Modificar">
            </form>
            </div>
        </div>
    </body>
</html>
