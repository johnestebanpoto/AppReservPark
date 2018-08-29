<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Salida vehiculo</title>
    </head>
    <body>
        <hr>
        <h2><i>Salida vehiculo</i></h2>
        <hr>
            <?php
        //if($_SERVER['REQUEST_METHOD'] == 'POST'){} 
            $nofactura= $_POST['txtnoingreso'];
            $cedsalida = $_POST['txtcedsalida'];
            $placasalida = $_POST['txtplacasalida'];
            $novedad = $_POST['txtnovedad'];
            include '../conexion.php';
            $sqlsalidaauto = "select * from ingresosvehiculos where id=$nofactura";
            $sqlusuarios = "select * from usuarios where num_doc_usu='$cedsalida'";
            $sqlvehiculos="select * from vehiculos where id='$placasalida'";
            $result = pg_query($con, $sqlusuarios);
            $resvehiculos = pg_query($con, $sqlvehiculos);
            $ressalidaauto = pg_query($con, $sqlsalidaauto);
            $mat = pg_fetch_array($result);
            $matvehiculos = pg_fetch_array($resvehiculos);
            $matsalidaauto = pg_fetch_array($ressalidaauto);
            if($matsalidaauto[0]!=$nofactura && $mat[0]!=$cedsalida && $matvehiculos[0]!=$placasalida){
                echo "<i>No factura no existe, por favor verifique</i><br>";
                echo "<i>cedula no registarda, por favor verifique</i><br>";
                echo "<i>placa no registarda, por favor verifique</i>";
            }
            else if($matsalidaauto[0]!=$nofactura && $mat[0]!=$cedsalida){
                echo "<i>No factura no existe, por favor verifique</i><br>";
                echo "<i>cedula no registarda, por favor verifique</i><br>";
            }
            else if($matsalidaauto[0]!=$nofactura && $matvehiculos[0]!=$placasalida){
                echo "<i>No factura no existe, por favor verifique</i><br>";
                echo "<i>placa no registarda, por favor verifique</i>";
            }
            else if($mat[0]!=$cedsalida && $matvehiculos[0]!=$placasalida){
                echo "<i>cedula no registarda, por favor verifique</i><br>";
                echo "<i>placa no registarda, por favor verifique</i>";
            }
            else if($matsalidaauto[0]!=$nofactura){
                echo "<i>No factura no existe, por favor verifique</i>";
            }            
            else if($mat[0]!=$cedsalida){
                echo "<i>cedula no registarda, por favor registrese</i>";
            }
            else if($matvehiculos[0]!=$placasalida){
                echo "<i>placa no registarda, por favor registrar</i>";
            }
            else{
                ini_set('date.timezone', 'America/Mexico_City');
                $fechasalida= date('Y-m-d', time());
                $horasalida= date('H:i:s', time());
                $sqlupdatecupos="update cupos set estado_cupo=0, desc_estado_cupo='Disponible' where nom_cupo='$matsalidaauto[11]' and id_parqueaderos='1';";
                $resupdatecupos = pg_query($con,$sqlupdatecupos);
                /*$vrfecha=date_diff($matsalidaauto[4], $fechasalida);
                $vrfecha->format('%R%a días'); 
                $vrfecha= $vrfactura*24*3600;*/
                $query = "update ingresosvehiculos set fecha_salida='$fechasalida', hora_salida='$horasalida',vr_factura=1800 ,novedades='$novedad' where id=$nofactura and fecha_salida is null and hora_salida is null; ";
		$res = pg_query($con,$query);
                        
                ?>
                <div class="panel panel-success">
                            <div class="panel-heading">
                                    Factura
                                    <!--<input type="number" min="0" required id="txtnofactura" name="txtnofactura" maxlength="10" class="form-control" value="<//?php echo "$matselectingreso[0]";?>"><br>-->
                            </div>
                            <div class="panel-footer">
                                <h2 style="text-align: center">RESERVPARK</h2>
                                <hr>
                                <form action="salidaauto.php" method="post" id="frmsalidavehiculo" class="form form-horizontal">
                                    <br><label>Cedula Cliente: </label><?php echo " $cedsalida";?>
                                    <!--<input type="number" min="0" required id="txtcedingreso" name="txtcedingreso" maxlength="10" class="form-control" value="<//?php echo "$cedingreso";?>"><br>-->
                                    <br><label>placa vehiculo: </label><?php echo " $placasalida"?>
                                    <br><label>Vr factura: </label><?php echo "$1800"?>
                                    <!--<input type="text" name="txtplacaingreso" id="txtplacaingreso" required pattern='[A-Z]{3}[0-9]{3}'  class='form-control' value="<//?php echo "$placaingreso"?>">-->
                                    <!--<input type="text" name="txtcupoasignado" id="txtcupoasignado" required  class='form-control' value="<//?php echo "$nomcupo"?>">-->
                                    <br>
                                    <hr>
                                    <!--<input type="submit" value="Facturar" class="btn btn-primary">-->
                                    <a class="btn btn-success" href='admin.php' target='reg01'> Facturar</a>
                                </form>
                            </div>
                </div>    
                                    
                
                <?php
                /*if ($res && $resupdatecupos) {
                   echo "<div class='alert alert-success' role='alert'><strong>Atención</strong> Registro adicionado con éxito</div>";
                }
                else {
                    echo "<div class='alert alert-danger' role='alert'><strong>Error</strong> Registro NO adicionado";
                    echo " - " . pg_last_error($con)  . "</div>";
                }*/
            }
            pg_close($con);
        ?>
    </body>
</html>
