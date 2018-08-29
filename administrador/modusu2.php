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
        <header>
            <div class="container">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <img src="../images/faviconReservParkw2.png" alt="" class="img-responsive " />
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">   
                        <br>
                        <h1 class="text-center "><i>ReservPark</i></h1>
                    </div>
            
        </header> 
            <?php
            include '../sesion/verificar_sesion.php';
            if(verificar()==1){
                include ("../menus/dibujaMenuAdmin.php"); 
                include '../sesion/modalCerrarSesion.php';
            ?>
            <div class="container">
            <h2>Modificar Clientes</h2>
            <hr>
            <div class="col-sm-5">
                <form action="../administrador/modusu3.php" method="post">
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
                <input type="number" id="txtcedadmin3" name="txtcedusu3" required min="1" class="form-control" value ="<?php echo $mat[0] ?>">  
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
		<input type="text" id="txtnomusu3" name="txtnomusu3" maxlength="30" required class="form-control" value ="<?php echo $mat[3] ?>">
		<label>Apellidos</label>
		<input type="text" id="txtapeusu3" name="txtapeusu3" maxlength="30" required class="form-control" value ="<?php echo $mat[4] ?>">
		<label>Teléfono</label>
		<input type="number" id="txttelusu3" name="txttelusu3" required min="0" class="form-control" value ="<?php echo $mat[5] ?>"><br>
		<label>Email</label>
                <input type="email" id="txtemailusu3" name="txtemailusu3" required min="0" class="form-control" value ="<?php echo $mat[6] ?>"><br>
		<label>Direccion</label>
		<input type="text" id="txtdirusu3" name="txtdirusu3" maxlength="30" required class="form-control" value ="<?php echo $mat[7] ?>">
		<label>Rol</label>
		<select id="lstrolusu3" name="lstrolusu3" class="form-control">
			<?php
				$sql = "select * from roles where id=3";
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
                <hr>
                <input type="submit" class="btn-primary btn-sm" value="Modificar">
            </form>
            </div>
            <?php } ?>
        </div>
    </body>
</html>
