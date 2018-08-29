<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registrar Automovil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
        <script src="../js/moduloadmin.js" type="text/javascript"></script>
    </head>
    <body>
        
        <div class="container">
            <h2>Registrar Automovil</h2>
            <hr>
            <div class="col-sm-4">
                <form id="frmaddautocliente" method="post" action="addautocliente2.php" class="form form-horizontal">
		<label>Placa vehiculo</label>
                <input type="text" name='txtplacav' id='txtplacav' required pattern='[A-Z]{3}[0-9]{3}' placeholder='AAA999' class='form-control'>
                <label>Marca</label>
		<input type="text" id="txtmarca" name="txtmarca" maxlength="30" required class="form-control">
                <label>Color</label>
		<input type="text" id="txtcolor" name="txtcolor" maxlength="30" required class="form-control">
                <label>Estado</label>
		<input type="text" id="txtestado" name="txtestado" maxlength="50" required class="form-control">
                <label>Tipo</label>
                <select id="lsttipo" name="lsttipo" class="form-control">
			<?php
				include("./conexion.php");
				$sql = "select * from tipo_vehiculo;";
				$res = pg_query($con,$sql);
				while($arr=pg_fetch_array($res)){
					echo "<option value='$arr[0]'>$arr[1]</option>";
				}
				pg_close();
			?>	
                </select><br>
                <hr>		
                <input type="submit" class="btn-primary btn-sm" value="Agregar">
            </form>
                <div id="divregauto2"></div>
            </div>
        </div>
    </body>
</html>
             
           
        
