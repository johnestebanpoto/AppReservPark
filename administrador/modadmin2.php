<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Modificar Admin</title>
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
            <h1>Modificar Administradores</h1>
            <hr>
            <div class="col-sm-5">
                <form action="../administrador/modadmin3.php" method="post">
            <?php
		include ("../conexion.php");
                //se recupera la cedula del empleado a modificar
                $victima = $_POST["victima"];
                //se obtiene todos los datos de ese empleado
		$sql = "select * from usuarios where num_doc_usu='$victima'";
		$res = pg_query($con,$sql);
		$mat = pg_fetch_array($res);
                //dibujo los datos del empleado en el formulario 
                //puede existir mas de un script PHP
            ?>
                <label>Cedula</label>
                <!--Se debe pasar la cedula a la siguiente pagina para determianr el empleado que se quiere modificar, esto es un campo oculto-->
                <input type="hidden" id="victima" name="victima" value ="<?php echo $victima ?>">  
                <input type="number" id="txtcedadmin3" name="txtcedadmin3" required min="1" class="form-control" value ="<?php echo $mat[0] ?>">  
		<label>Tipo documento</label>
                <select name="lstTipoDoc" id="lstTipoDoc" class="form-control">
                        <option selected value="<?php echo $mat[1]?>"><?php echo $mat[1]?></option>
                        <option value="CC">CC</option>
                        <option value="CE">CE</option>
                </select>
		<label>Descripcion tipo documento</label>
		<select name="lstDescTipoDoc" id="lstDescTipoDoc" class="form-control">
                        <option selected value="<?php echo $mat[2]?>"><?php echo $mat[2]?></option>
                        <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                        <option value="Cedula Extranjera">Cedula Extranjera</option>
                </select>
		<label>Nombres</label>
		<input type="text" id="txtnomadmin3" name="txtnomadmin3" maxlength="30" required class="form-control" value ="<?php echo $mat[3] ?>">
		<label>Apellidos</label>
		<input type="text" id="txtapeadmin3" name="txtapeadmin3" maxlength="30" required class="form-control" value ="<?php echo $mat[4] ?>">
		<label>Teléfono</label>
		<input type="number" id="txtteladmin3" name="txtteladmin3" required min="0" class="form-control" value ="<?php echo $mat[5] ?>"><br>
		<label>Email</label>
                <input type="email" id="txtemailadmin3" name="txtemailadmin3" required min="0" class="form-control" value ="<?php echo $mat[6] ?>"><br>
		<label>Direccion</label>
		<input type="text" id="txtdiradmin3" name="txtdiradmin3" maxlength="30" required class="form-control" value ="<?php echo $mat[7] ?>">
		<label>Rol</label>
		<select id="lstroladmin3" name="lstroladmin3" class="form-control">
			<?php
				$sql = "select * from roles";
				$res = pg_query($con,$sql);
				while($arr=pg_fetch_array($res)){
                                        if ($arr[0]==$mat[8])
                                            echo "<option selected value='$arr[0]'>$arr[1]</option>";
                                        else 
                                            echo "<option value='$arr[0]'>$arr[1]</option>";
				}
				pg_close($con);
			?>	
		</select>
                <label>Usuario</label>
		<input type="text" id="txtusuadmin3" name="txtusuadmin3" maxlength="30" required class="form-control" value ="<?php echo $mat[9] ?>">
		<label>Password</label>
                <input type="password" id="txtpassadmin3" name="txtpassadmin3" required class="form-control" value ="<?php echo $mat[10] ?>">
		
                <hr>
                <input type="submit" class="btn-primary btn-sm" value="Modificar">
            </form>
            </div>
        </div>
    </body>
</html>
