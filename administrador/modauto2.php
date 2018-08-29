<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Modificar vehiculo</title>
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
            <h2>Modificar Vehiculos</h2>
            <hr>
            <div class="col-sm-5">
                <form action="../administrador/modauto3.php" method="post">
            <?php
		include ("../conexion.php");
                //se recupera la cedula del empleado a modificar
                $victima = $_POST["victima"];
                //se obtiene todos los datos de ese empleado
		$sql = "select * from vehiculos where id='$victima'";
		$res = pg_query($con,$sql);
		$mat = pg_fetch_array($res);
                //dibujo los datos del empleado en el formulario 
                //puede existir mas de un script PHP
            ?>
                <label>Placa</label>
                <!--Se debe pasar la placa a la siguiente pagina para determianr el empleado que se quiere modificar, esto es un campo oculto-->
                <input type="hidden" id="victima" name="victima" value ="<?php echo $victima ?>">  
                <input type="text" name='txtplaca3' id='txtplaca3' required pattern='[A-Z]{3}[0-9]{3}' placeholder='AAA999' class='form-control' value ="<?php echo $mat[0] ?>">
		<label>Marca</label>
		<input type="text" id="txtmarca3" name="txtmarca3" maxlength="30" required class="form-control" value ="<?php echo $mat[1] ?>">
		<label>Color</label>
		<input type="text" id="txtcolor3" name="txtcolor3" maxlength="30" required class="form-control" value ="<?php echo $mat[2] ?>">
		<label>Estado</label>
		<input type="text" id="txtestado3" name="txtestado3" maxlength="50" required class="form-control" value ="<?php echo $mat[3] ?>">
                <label>Tipo</label>
		<select name="lsttipoauto3" id="lsttipoauto3" class="form-control">
                        <?php
				$sql = "select * from tipo_vehiculo;";
				$res = pg_query($con,$sql);
				while($arr=pg_fetch_array($res)){
                                        if ($arr[0]==$mat[4])
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
