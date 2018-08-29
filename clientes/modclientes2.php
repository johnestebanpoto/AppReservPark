<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Modificar Clientes</title>
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
            <h1>Modificar Clientes</h1>
            <hr>
            <div class="col-sm-5">
            <form action="../clientes/modclientes3.php" method="post">
            <?php
		include ("../conecta.php");
		$bd = conectar();
		if (!$bd) return;
                //se recupera la cedula del empleado a modificar
                $victima = $_POST["victima"];
                //se obtiene todos los datos de ese empleado
		$sql = "select * from clientes where cc_cliente='$victima'";
		$res = mysqli_query($bd,$sql);
		$mat = mysqli_fetch_array($res);
                //dibujo los datos del empleado en el formulario 
                //puede existir mas de un script PHP
            ?>
                <label>Cedula</label>
                <!--Se debe pasar la cedula a la siguiente pagina para determianr el empleado que se quiere modificar, esto es un campo oculto-->
                <input type="hidden" id="victima" name="victima" value ="<?php echo $victima ?>">  
                <input type="number" id="txtcedcli3" name="txtcedcli3" required min="1" class="form-control" value ="<?php echo $mat[0] ?>">  
		<label>Nombre</label>
		<input type="text" id="txtnomcli3" name="txtnomcli3" maxlength="30" required class="form-control" value ="<?php echo $mat[1] ?>">
		                
		<label>Teléfono</label>
		<input type="number" id="txttelcli3" name="txttelcli3" required min="0" class="form-control" value ="<?php echo $mat[2] ?>"><br>
		<label>Email</label>
                <input type="email" id="txtemailcli3" name="txtemailcli3" required min="0" class="form-control" value ="<?php echo $mat[3] ?>"><br>
                <label>Parqueadero</label>
		<select id="lstparcli3" name="lstparkcli3" class="form-control">
			<?php
				$sql = "select * from parqueaderos order by nombre_park";
				$res = mysqli_query($bd,$sql);
				while($arr=mysqli_fetch_array($res)){
                                        if ($arr[0]==$mat[4])
                                            echo "<option selected value='$arr[0]'>$arr[1]</option>";
                                        else 
                                            echo "<option value='$arr[0]'>$arr[1]</option>";
				}
				mysqli_close($bd);
			?>	
		</select><br>
                <hr>
                <input type="submit" class="btn-primary btn-sm" value="Modificar">
            </form>
            </div>
        </div>
    </body>
</html>
