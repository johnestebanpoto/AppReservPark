<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Modificar Park</title>
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
            <h1>Modificar Parqueaderos</h1>
            <hr>
            <div class="col-sm-5">
                <form action="../park/modpark3.php" method="post">
            <?php
		include ("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
                //se recupera la cedula del empleado a modificar
                $victima = $_POST["victima"];
                //se obtiene todos los datos de ese empleado
		$sql = "select * from parqueaderos where id_parqueadero='$victima'";
		$res = mysqli_query($bd,$sql);
		$mat = mysqli_fetch_array($res);
                //dibujo los datos del empleado en el formulario 
                //puede existir mas de un script PHP
            ?>  
                
                <label>Nombre</label>
                <input type="hidden" id="victima" name="victima" value ="<?php echo $victima ?>">  
                <input type="text" id="txtnompark3" name="txtnompark3" maxlength="30" required class="form-control" value ="<?php echo $mat[1] ?>"><br>
		                
		<label>Direccion </label>
                <input type="text" id="txtdirpark3" name="txtdirpark3" maxlength="30" class="form-control" value ="<?php echo $mat[2] ?>"><br>
		<label>Teléfono</label>
		<input type="number" id="txttelpar3" name="txttelpark3" required min="0" class="form-control" value ="<?php echo $mat[3] ?>"><br>
		<label>Cupos Carros</label>
		<input type="number" id="txtcuposcar3" name="txtcuposcar3" required min="0" class="form-control" value ="<?php echo $mat[4] ?>"><br>
		<label>Cupos Motos</label>
		<input type="number" id="txtcuposmot3" name="txtcuposmot3" required min="0" class="form-control" value ="<?php echo $mat[5] ?>"><br>
                <label>Barrio</label>
		<select id="lstbar3" name="lstbar3" class="form-control">
			<?php
				$sql = "select * from barrios order by nom_barrio";
				$res = mysqli_query($bd,$sql);
				while($arr=mysqli_fetch_array($res)){
                                        if ($arr[0]==$mat[6])
                                            echo "<option selected value='$arr[0]'>$arr[1]</option>";
                                        else 
                                            echo "<option value='$arr[0]'>$arr[1]</option>";
				}
				mysqli_close($bd);
			?>	
		</select><br>
                <label>Cedula propietario</label>
		<input type="number" id="txtccpropark3" name="txtccpropark3" required min="0" class="form-control" value ="<?php echo $mat[7] ?>"><br>
                <label>Horario</label>
                <select name="lsthorario3" class="control" value ="<?php echo $mat[8] ?>"><!--class= toma el estilo por grupo-->
                    <option>Diurno</option>
                    <option>Nocturno</option>
                    <option>Diurno - Nocturno</option>
                </select>
                <label>Latitud park</label>
                <input type="text" id="txtlatpark3" name="txtlatpark3" required min="0" class="form-control" value="<?php echo $mat[9]?>"><br>
                <label>Longitud park</label>
                <input type="text" id="txtlngpark3" name="txtlngpark3" required class="form-control" value="<?php echo $mat[10]?>"><br>
                
                <hr>
                <input type="submit" class="btn-primary btn-sm" value="Modificar">
            </form>
            </div>
        </div>
    </body>
</html>

