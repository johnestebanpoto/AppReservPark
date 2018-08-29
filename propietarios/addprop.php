<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Adicionar Propietarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
    </head>
    <body>
                   
        <?php include ("../dibujaMenuSuperAdmin.php");  ?>
        <!--cerrar cesion-->
        
        
        <div class="container">
            <h2>Adicionar propietarios</h2>
            <hr>
            <div class="col-sm-6">
                <form id="frm1" method="post" action="../propietarios/addprop2.php" class="form form-horizontal">
		<label>Cedula</label>
                <input type="number" id="txtcedprop" name="txtcedprop" max="9999999999" required min="1" class="form-control">
		<label>Nombre</label>
		<input type="text" id="txtnomprop" name="txtnomprop" maxlength="30" required class="form-control">
		<label>Teléfono</label>
		<input type="number" id="txttelprop" name="txttelprop" max="9999999999" required min="0" class="form-control"><br>
                
                <hr>
                <input type="submit" class="btn-primary btn-sm" value="Guardar">
            </form>
            </div>
        </div>
        
    </body>
</html>
