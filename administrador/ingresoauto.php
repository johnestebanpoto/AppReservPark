<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ingreso vehiculo</title>
    </head>
    <body>
        <hr>
        <h2><i>Ingreso vehiculo</i></h2>
        <hr>
            <?php
        //if($_SERVER['REQUEST_METHOD'] == 'POST'){} 
            $cedingreso = $_POST['txtcedingreso'];
            $placaingreso = $_POST['txtplacaingreso'];
            $nomcupo = $_POST['nomcupo'];
            include '../conexion.php';
            $sqlusuarios = "select * from usuarios where num_doc_usu='$cedingreso'";
            $sqlvehiculos="select * from vehiculos where id='$placaingreso'";
            $result = pg_query($con, $sqlusuarios);
            $resvehiculos = pg_query($con, $sqlvehiculos);
            $mat = pg_fetch_array($result);
            $matvehiculos = pg_fetch_array($resvehiculos);
            if($mat[0]!=$cedingreso && $matvehiculos[0]!=$placaingreso){
                echo "<i>cedula no registarda, por favor registrese</i><br>";
                echo "<i>placa no registarda, por favor registrar</i>";
            }
            else if($mat[0]!=$cedingreso){
                echo "<i>cedula no registarda, por favor registrese</i>";
            }
            else if($matvehiculos[0]!=$placaingreso){
                echo "<i>placa no registarda, por favor registrar</i>";
            }            
            else{
                ini_set('date.timezone', 'America/Mexico_City');
                $fechaingreso= date('Y-m-d', time());
                $horaingreso= date('H:i:s', time());
                $sqlupdatecupos="update cupos set estado_cupo=2, desc_estado_cupo='Ocupado' where id_parqueaderos='1' and nom_cupo='$nomcupo';";
                $resupdatecupos = pg_query($con,$sqlupdatecupos);
                $query = "insert into ingresosvehiculos (id_parqueaderos,num_doc_usu,tipo_doc_usu,fecha_ingreso,hora_ingreso,cod_vehiculo,nom_cupo)"
                        . " values(1,$cedingreso,'$mat[1]','$fechaingreso','$horaingreso','$placaingreso','$nomcupo');";
		$res = pg_query($con,$query);
                $sqlselectingreso="select id from ingresosvehiculos where nom_cupo='$nomcupo' and id_parqueaderos=1 and num_doc_usu=$cedingreso and cod_vehiculo='$placaingreso'";
                $resselectingreso = pg_query($con,$sqlselectingreso);
                $matselectingreso = pg_fetch_array($resselectingreso);
                        
                ?>
                <div class="panel panel-success">
                            <div class="panel-heading">
                                    Factura
                                    <label>No.</label><?php echo " $matselectingreso[0]"?>
                                    <!--<input type="number" min="0" required id="txtnofactura" name="txtnofactura" maxlength="10" class="form-control" value="<//?php echo "$matselectingreso[0]";?>"><br>-->
                            </div>
                            <div class="panel-footer">
                                <h2 style="text-align: center">RESERVPARK</h2>
                                <hr>
                                <form action="ingresoauto.php" method="post" id="frmingresovehiculo" class="form form-horizontal">
                                    <label>Cedula Cliente: </label><?php echo " $cedingreso";?>
                                    <!--<input type="number" min="0" required id="txtcedingreso" name="txtcedingreso" maxlength="10" class="form-control" value="<//?php echo "$cedingreso";?>"><br>-->
                                    <label>placa vehiculo: </label><?php echo " $placaingreso"?>
                                    <!--<input type="text" name="txtplacaingreso" id="txtplacaingreso" required pattern='[A-Z]{3}[0-9]{3}'  class='form-control' value="<//?php echo "$placaingreso"?>">-->
                                    <label>Cupo asignado: </label><?php echo " $nomcupo"?>
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
