<!DOCTYPE html>
<html>
    <head>
        <title>Administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/moduloadmin.js" type="text/javascript"></script>
        <script 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7oJUbcf4mew1_X1cKAdk6uPNuAonDanw&callback=initMap">
        </script>
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
                include './modalcambioestadoreserva.php';
        ?>
        <!--cerrar cesion-->
        <!-- /.modal -->
        
        <!-- /.modal -->
        <div class="container">  
           <!--division inicio-->
            <div id="divInicioModuloAdmin">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h1 class="text-center">CUPOS</h1>
                            <?php
                                include("../conexion.php");
                                $sql = "select * from cupos  where id_parqueaderos=1 order by id;";
                                $res = pg_query($con,$sql);
                                while($arr=pg_fetch_array($res)){
                                    if($arr[2]==0){
                                        echo "<a type='submit' class='btn btn-success form-control' data-toggle='modal' data-target='#modalcambioestadoreserva' name='btncupo' value='$arr[1]'>Cupo $arr[1] $arr[3]</a>";
                                    }
                                    else if($arr[2]==1){
                                        echo "<a class='btn btn-primary form-control' data-toggle='modal' data-target='#modalcambioestadoreserva' id='btncupo' value='$arr[1]'>Cupo $arr[1] $arr[3]</a>";
                                    }
                                    else{
                                        echo "<a class='btn btn-danger form-control' id='btncupo' value='$arr[1]'>Cupo $arr[1] $arr[3]</a>";
                                    }
                                }
                                pg_close();
                            ?>
                    <div id="divres"></div>
                        
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <br>
                    <div id="divingresosautos">
                    <div class="panel panel-primary">
                            <div class="panel-heading">
                                    Ingreso vehiculos
                                </div>
                                <div class="panel-footer">
                                    <form action="ingresoauto.php" method="post" id="frmingresovehiculo" class="form form-horizontal">
                                        <label>Digite cedula</label>
                                        <input type="number" min="0" required id="txtcedingreso" name="txtcedingreso" maxlength="10" class="form-control"><br>
                                        <label>Digite placa</label>
                                        <input type="text" name="txtplacaingreso" id="txtplacaingreso" required pattern='[A-Z]{3}[0-9]{3}' placeholder='AAA999' class='form-control'>
                                        <label>Selecione cupo</label>
                                        <select id="nomcupo" name="nomcupo" class="form-control">
                                                <?php
                                                        include("../conexion.php");
                                                        $sql = "select * from cupos  where id_parqueaderos=1 and estado_cupo=0 or estado_cupo=1 order by 1; ";
                                                        $res = pg_query($con,$sql);
                                                        while($arr=pg_fetch_array($res)){
                                                                echo "<option >$arr[1]</option>";
                                                        }
                                                        pg_close();
                                                ?>	
                                        </select><br>
                                        <input type="submit" value="Ingresar" class="btn btn-primary" id="btnfacturaingesoauto">
                                    </form>
                                </div>
                    </div>
                    </div>    
                        <br><br>
                    <div id="divresultadosadmin"></div>
                    
                </div>                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> 
                    <br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                                Salida vehiculos
                            </div>
                            <div class="panel-footer">
                                    <form action="salidaauto.php" method="post" id="frmsalidaauto" class="form form-horizontal">
                                        <label>No. Ingreso</label>
                                        <input type="number" min="0" required name="txtnoingreso" class="form-control"><br>
                                        <label>No. Cedula</label>
                                        <input type="number" min="0" required name="txtcedsalida" class="form-control"><br>
                                        <label>Digite placa</label>
                                        <input type="text" required name="txtplacasalida" class="form-control"><br>
                                        <label>Novedades</label>
                                        <textarea name="txtnovedad" cols="14" rows="4" required></textarea>
                                        <br>
                                        <input type="submit" value="Salida" class="btn btn-primary" >
                                    </form>
                            </div>
                    </div>
                    
                </div>
            
           
            </div> 
            <!--fin division inicio-->
            <!--inicio division reservar-->
            
            <!--fin division reservar-->
        <?php 
           }
        ?>                
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



