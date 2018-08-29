<!DOCTYPE html>
<html>
    <head>
        <title>Super  Administrador</title>
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
        
        <?php
            include '../sesion/verificar_sesion.php';
            if(verificar()==1){
                $ruta = "http://localhost/AppWebPark/";
            echo"
            <header>    
            <div class='container'>
                <nav class='navbar navbar-collapse'>
                    <div class='col-sm-3'>
                        <img src='../images/faviconReservParkw2.png' width='150' height='100'/>
                    </div>
                    <div class='col-sm-7'>
                        <h1>Super Administrador ReservPark</h1>
                    </div>

                    <div class='col-sm-2'><br>

                    </div>                
                </nav>
            </div>
            </header>
            <nav class='navbar navbar-inverse'>
           <div class='container-fluid'>
                <div class='navbar-header'>
                  <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                  </button>
                </div>
                <div class='col-sm-8'>
                    <ul class='nav navbar-nav'>
                        <li class='dropdown'>
                                <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                                <span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Propietarios <span class='caret'></span></a>
                                <ul class='dropdown-menu'>
                                      <li><a href='".$ruta."propietarios/addprop.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Adicionar</a></li>
                                      <li><a href='".$ruta."propietarios/modprop.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Modificar</a></li>
                                      <li><a href='".$ruta."propietarios/eliprop.php'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Eliminar</a></li>
                                      <li role='separator' class='divider'></li>
                                      <li><a href='".$ruta."propietarios/lstprop.php'><span class='glyphicon glyphicon-th' aria-hidden='true'></span> Ver Propietarios</a></li>
                                </ul>
                      </li>


                      <li class='dropdown'>
                                <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                                <span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Parqueaderos <span class='caret'></span></a>
                                <ul class='dropdown-menu'>
                                      <li><a href='".$ruta."park/addpark.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Adicionar</a></li>
                                      <li><a href='".$ruta."park/modpark.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Modificar</a></li>
                                      <li><a href='".$ruta."park/elipark.php'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Eliminar</a></li>
                                      <li role='separator' class='divider'></li>
                                      <li><a href='".$ruta."park/lstpark.php'><span class='glyphicon glyphicon-th' aria-hidden='true'></span> Ver Parqueaderos</a></li>
                                </ul>
                      </li>

                      <li class='dropdown'>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                            <span class='glyphicon glyphicon-user' aria-hidden='true'></span> Clientes <span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                  <li><a href='".$ruta."clientes/addclientes.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Adicionar</a></li>
                                  <li><a href='".$ruta."clientes/modclientes.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Modificar</a></li>
                                  <li><a href='".$ruta."clientes/eliclientes.php'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Eliminar</a></li>
                                  <li role='separator' class='divider'></li>
                                  <li><a href='".$ruta."clientes/lstclientes.php'><span class='glyphicon glyphicon-th' aria-hidden='true'></span> Ver Clientes</a></li>
                            </ul>
                      </li>

                      <li class='dropdown'>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                            <span class='glyphicon glyphicon-user' aria-hidden='true'></span> Administradores <span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                  <li><a href='".$ruta."administrador/addadmin.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Adicionar</a></li>
                                  <li><a href='".$ruta."administrador/modadmin.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Modificar</a></li>
                                  <li><a href='".$ruta."administrador/eliadmin.php'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Eliminar</a></li>
                                  <li role='separator' class='divider'></li>
                                  <li><a href='".$ruta."administrador/lstadmin.php'><span class='glyphicon glyphicon-th' aria-hidden='true'></span> Ver Administradores</a></li>
                            </ul>
                      </li>
                      <li class='dropdown'>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                            <span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Reportes <span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                  <li><a href='".$ruta."reportes/repprop.php' target='r1'> Propietarios</a></li>
                                  <li><a href='".$ruta."reportes/reppark.php' target='r2'> Parqueaderos</a></li>
                                  <li><a href='".$ruta."reportes/repcli.php' target='r3'> Clientes</a></li>
                                  <li><a href='".$ruta."reportes/repadmin.php' target='r4'> Administradores</a></li>
                            </ul>
                      </li>
                    </ul>
                </div>
                
                <div class='col-sm-4'>
                            <ul class='nav navbar-nav'>
                                <li><a href='".$ruta."cargarcontratos.php'>Cargar contratos Park</a></li>
                                <li><a href='#'data-toggle='modal' data-target='#modalcerrarsesion'>Cerrar Sesión</a></li>
                            </ul>
                </div>            
            </nav>
            
            </div>  
           "
           ;
            }
            else{
                return;
            }
        ?>
        <!--cerrar cesion-->
        <div id="modalcerrarsesion" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">CERRAR SESION SUPER ADMINISTRADOR</h4>
                        </div>
                        <div class="modal-body">
                            
                            <form method="post" action="../sesion/cerrar_sesion.php" id="frmcerrarsesion">
                               <div class="form-group">
                                  <p>Desea cerrar su sesion</p>
                              </div>
                              <button type="submit" class="btn btn-default">Aceptar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="container">
            <div class="col-sm-4">
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
            <div class="col-sm-6">
                <img src="../images/mapaUbicacionPark.jpg" alt="" width="500" height="400"/>
            </div>
            <div>
                <i class="align-justify">en este espacio se visualizara los cupos de los parqueaderos con su respectiva capacidad y estado del cupo
                    resaltando con colores, como:<br> rojo= ocupado<br> azul= reservado<br>verde= disponible cupos</i><br>
                    <button type="submit" class="btn btn-danger">Ocupado</button><br><br>
                    <button type="submit" class="btn btn-primary">Reservado</button><br><br>
                    <button type="submit" class="btn btn-success">Disponible</button><br><br>
            </div>
        </div>
    
        
    </body>
</html>



