<!DOCTYPE html>
<html>
    <head>
        <title>Administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
        <script 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7oJUbcf4mew1_X1cKAdk6uPNuAonDanw&callback=initMap">
        </script>
    </head>
    <body>
        <!--cabecera logo - titulo -->
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
        <!--fin cabecera logo - titulo -->
        
        <?php
            include '../sesion/verificar_sesion.php';
            if(verificar()==1){
                include ("../menus/menuPropietarios.php"); 
                include '../sesion/modalCerrarSesion.php';
        ?>
        <!--cerrar cesion-->
        <!--fin cerrar cesion-->
        <!--cuerpo-->
        <div class="container">
            <div class="col-lg-4">
                <h2 class="alingcenter">BIENVENIDO SUPER ADMINISTRADOR</h2>
                <form method="post" action="facturar.php" id="frmloginadmin">
                              <div class="form-group">
                                <label>Cedula:</label>
                                <input type="text" class="form-control" placeholder="cedula" name="txtcedula" required>
                                <label>Placa vehiculo:</label>
                                <input type="text" class="form-control" placeholder="placa" name="txtplaca" required><br>
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                              </div>
                              
                </form> 
            </div>
            <div class="col-lg-7">
                <img src="../images/mapaUbicacionPark.jpg" alt="" width="100%" height="400"/>
            </div>
            <div class="col-lg-1">
                    <button type="submit" class="btn btn-danger">Ocupado</button><br><br>
                    <button type="submit" class="btn btn-primary">Reservado</button><br><br>
                    <button type="submit" class="btn btn-success">Disponible</button><br><br>
            </div>
            <?php 
           }
        ?> 
        </div>
    
        <!--fin cuerpo-->
    </body>
</html>



