<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Adicionar admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/moduloadmin.js" type="text/javascript"></script>
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
            <h2>Adicionar Administradores</h2>
            <hr>
            <div class="col-sm-6">
                <form id="frm1" method="post" action="../administrador/addadmin2.php" class="form form-horizontal">
		<label>Cedula</label>
                <input type="number" id="txtCedAdmin" name="txtCedAdmin" max="9999999999" required min="1" class="form-control">
		<label>Tipo documento</label>
                    <select name="lstTipoDoc" id="lstTipoDoc" class="form-control">
                        <option value="CC">CC</option>
                        <option value="CE">CE</option>
                    </select>
		<label>Descripcion</label>
                    <select name="lstDescTipoDoc" id="lstDescTipoDoc" class="form-control">
                        <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                        <option value="Cedula extranjera">Cedula extranjera</option>
                    </select>
                <label>Nombres</label>
		<input type="text" id="txtNomAdmin" name="txtNomAdmin" maxlength="50" required class="form-control">
                <label>Apellidos</label>
		<input type="text" id="txtApeAdmin" name="txtApeAdmin" maxlength="50" required class="form-control">
		<label>Telefono</label>
                <input type="number" id="txtTelAdmin" name="txtTelAdmin" max="9999999999" required min="0" class="form-control"><br>
		<label>Email</label>
                <input type="email" id="txtEmailAdmin" name="txtEmailAdmin" maxlength="30" required min="0" class="form-control"><br>
		<label>Dirección</label>
		<input type="text" id="txtDirAdmin" name="txtDirAdmin" maxlength="50" required class="form-control">
                <label>Rol</label>
                <select id="lstRolAdmin" name="lstRolAdmin" class="form-control">
			<?php
				include("../conexion.php");
				$sql = "select r.id,r.nom_rol from roles r where r.id=3;";
				$res = pg_query($con,$sql);
				while($arr=pg_fetch_array($res)){
					echo "<option value='$arr[0]'>$arr[1]</option>";
				}
				pg_close();
			?>	
                </select><br>                
                <hr>		
                <input type="submit" class="btn-primary btn-sm" value="Guardar">
            </form>
            </div>
            <?php 
           }
        ?> 
        </div>
        
    </body>
</html>
