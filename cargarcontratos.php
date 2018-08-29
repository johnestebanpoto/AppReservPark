<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cargar contratos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="./css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="./js/jquery.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./js/micodigo.js" type="text/javascript"></script>
    </head>
    <body>
                   
        <?php include ("./dibujaMenuSuperAdmin.php");  ?>
        <!--cerrar cesion-->
        
        
        <div class="container">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h2>Cargar Contratos</h2>
                <hr>
                <form id="frmcargar" method="post" action="cargarcontratos2.php" enctype="multipart/form-data">
                    <label>Nombre del contrato</label>
                    <input type="text" required name="txtnom" class="form-control"><br>
                    <label>Seleccione el archivo</label>
                    <input type="file" name="archivo" required><br>
                    <hr>
                    <input type="submit" value="Upload" class="btn btn-primary">
                </form>
            </div> 
            
            <div class="col-sm-3"></div>
    </body>
            <hr>
            
            </div>
        </div>
        
    </body>
</html>
