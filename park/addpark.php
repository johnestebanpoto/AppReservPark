<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Adicionar park</title>
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
            <h2>Adicionar parqueaderos</h2>
            <hr>
            <div class="col-sm-6">
                <form id="frm1" method="post" action="../park/addpark2.php" class="form form-horizontal">
		<label>Nombre parqueadero</label>
                <input type="text" id="txtnompark" name="txtnompark" maxlength="30" required class="form-control">
		<label>Direccion parqueadero</label>
		<input type="text" id="txtdirpark" name="txtdirpark" maxlength="30" required class="form-control">
		<label>Teléfono parqueadero</label>
		<input type="number" id="txttelpark" name="txttelpark" required min="0" class="form-control"><br>
		<label>Cupos carros parqueadero</label>
		<input type="number" id="txtcuposcarros" name="txtcuposcarros" required min="0" class="form-control"><br>
		<label>Cupos motos parqueadero</label>
		<input type="number" id="txtcuposmotos" name="txtcuposmotos" required min="0" class="form-control"><br>
		<label>Barrio</label>
		<select id="lstbar" name="lstbar" class="form-control">
			<?php
				include("../conecta.php");
				$bd = conectar();
				if (!$bd) return;
				$sql = "select * from barrios order by nom_barrio";
				$res = mysqli_query($bd,$sql);
				while($arr=mysqli_fetch_array($res)){
					echo "<option value='$arr[0]'>$arr[1]</option>";
				}
				mysqli_close($bd);
			?>	
                </select>
            </div>
            <br>
            <div class="col-sm-6">    
                <label>Cedula propietario</label>
		<input type="number" id="txtccpropark" name="txtccpropark" required min="0" class="form-control"><br>
                <label>Horario</label>
                <select name="lsthorario" class="form-control"><!--class= toma el estilo por grupo-->
                    <option>Diurno</option>
                    <option>Nocturno</option>
                    <option>Diurno - Nocturno</option>
                </select><br>
                <label>Latitud park</label>
                <input type="text" id="txtlatpark" name="txtlatpark" required min="0" class="form-control"><br>
                <label>Longitud park</label>
                <input type="text" id="txtlngpark" name="txtlngpark" required min="0" class="form-control"><br>
                
                <hr>
                <input type="submit" class="btn-primary btn-sm" value="Guardar">
            </form>
            </div>
        </div>
    </body>
</html>
