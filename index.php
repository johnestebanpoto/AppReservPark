<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>ReservPark</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/miestilo.css" rel="stylesheet" type="text/css"/>        
        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>   
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/micodigo.js" type="text/javascript"></script>
        <script 
            src="http://maps.google.com/maps/api/js?key=AIzaSyAgcQ3ObyW9ONlwhYarP4YIR0a4kE6URCQ">
                //src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7oJUbcf4mew1_X1cKAdk6uPNuAonDanw&callback=initMap">
        </script>
    </head>
    <body>

        <!--cabecera logo - titulo -->
        <header>
            <div class="container">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <img src="images/faviconReservParkw2.png" alt="" class="img-responsive " />
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">   
                    <br>
                    <h1 class="text-center "><i>ReservPark</i></h1>
                </div>

        </header> 
        <!--fin cabecera logo - titulo -->
        <!--modal para login de administrador-->
        <?php include '../AppWebPark/sesion/modalInicioSesion.php'; ?>
        <!--fin modal para login de administrador-->
        <!--Menu Principal-->
        <?php include '../AppWebPark/menus/menuPrincipal.php'; ?>

        <!--Fin Menu Principal-->
        <!--Cuerpo pagina-->
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!--Division inicio-->
                <div id="divinicio">
                    <div class="jumbotron text-center colorazul">
                        <p> BIENVENIDOS </p>
                        <hr>
                        <img src="images/logoReservPark.png" alt="" class="img-responsive"/>
                    </div>
                </div>    
                <br>

                <!--Division parqueaderos-->
                <div id="divpark">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <p class="alingcenter"><font size=5> Busca tu parqueadero</font> </p>  
                        </a>
                    </div>
                    <form action="buscarpark.php" method="post" id="frm1">
                        <input type="submit" value="buscar" class="btn btn-primary" id='btnbuscar'>
                    </form>
                </div>
                <div id="divpark2"></div>
                <!--Division Registro usuario-->
                <div id="divregusu" margin="0px" padding="0px" ></div>
                <div id="divregauto" margin="0px" padding="0px" ></div>
                <div id="divresreg"></div>

                <div id="divres"><a href="reservar.php" id="idreservar"><font size="6"><i>Reservar</i></font></a></div>
                <div id="divverreserva">

                </div>

            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12  ">                
                <div id="mapa" class="mapWrapper"></div>
            </div>
            <!--Division inicio de sesión-->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12  ">
                <div id="divInicioSesion"></div>
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12  ">

            </div> 
        </div>
        <br>
        <footer>
            <div class="container">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <br>
                    <p class="colorp text-center">Desarrollado por:</p><hr>
                    <p class="colorp text-center">Edgar España</p>
                    <p class="colorp text-center">Esteban Potosi</p>
                    <p class="colorp text-center">Wilmer Araújo</p>
                    <hr>
                    <p class="colorp text-center">Copyright © 2018</p>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <br>
                    <h1 class="text-center">ReservPark</h1><hr>
                    <p class="colorp text-center">Sistema de reservas de cupos para parqueaderos<br>
                        Ubicacion: B/ Santiago <br>
                        Cel: 315 455 87 76<br>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <br>
                    <p class="colorp text-center">¿Que es reservPark?<br>
                    </p><hr>
                    <p class="colorp text-center">Es una plataforma que te facilitara la busqueda de cupos disponibles
                        en parqueaderos de la ciudad de Pasto a través de la web<br>
                    </p><hr>
                </div>
            </div>
        </footer>
    </body>
</html>
