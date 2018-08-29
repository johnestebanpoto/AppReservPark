<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reservar</title>
    </head>
    <body>
        <?php
            $cedusu = $_POST["txtcedusu"];
            $placausu= $_POST["txtplacausu"];
            include './conexion.php';
            $sql = "select num_doc_usu from usuarios where num_doc_usu='$cedusu'";
            $sqlvehiculos="select id from vehiculos where id='$placausu'";
            $result = pg_query($con, $sql);
            $resvehiculos = pg_query($con, $sqlvehiculos);
            $mat = pg_fetch_array($result); 
            $matvehiculos = pg_fetch_array($resvehiculos);
            if($mat[0]!=$cedusu && $matvehiculos[0]!=$placausu){
                echo "<div class='alert alert-success' role='alert'><strong>Atención</strong><br>"
                . "<li>Cedula no registrada</li><li>Placa no registrada</li><hr> Por favor registrese</div>";
            }
            else if($mat[0]!=$cedusu){
                echo "<div class='alert alert-success' role='alert'><strong>Atención</strong><br>"
                . "<li>Cedula no registrada</li><hr> Por favor registrese</div>";
            }
            else if($matvehiculos[0]!=$placausu){
                echo "<div class='alert alert-success' role='alert'><strong>Atención</strong><br>"
                . "<li>Placa no registrada</li><hr> Por favor registrese</div>";
            }
            else{
            echo "<form action='reservar3.php' method='post' id='frmreservar2'>";
            ?>
            
            <input type="hidden" id="cedula2" name="cedula2" value ="<?php echo $cedusu ?>">  
            <input type="hidden" id="placa2" name="placa2" value ="<?php echo $placausu ?>">   
            
            <label>Tipo</label>
            <select name="lsttipovehi" id="lsttipovehi" class="form-control">
                        <?php
				$sql = "select * from tipo_vehiculo;";
				$res = pg_query($con,$sql);
				while($arr=pg_fetch_array($res)){
                                        if ($arr[0]==$mat[4])
                                            echo "<option selected value='$arr[0]'>$arr[1]</option>";
                                        else 
                                            echo "<option value='$arr[0]'>$arr[1]</option>";
				}
			?>	
		</select>
            <label>Seleccione parqueadero</label>
            <select id="lstparkreg" name="lstparkreg" class="form-control">
			<?php
				$sql = "select * from parqueaderos order by nom_park";
				$res = pg_query($con,$sql);
				while($arr=pg_fetch_array($res)){
                                        if ($arr[0]==$mat[4])
                                            echo "<option selected value='$arr[0]'>$arr[1]</option>";
                                        else 
                                            echo "<option value='$arr[0]'>$arr[1]</option>";
				}
			?>	
		</select>
            <label>Seleccione cupo</label>
            <select id="lstcupos" name="lstcupos" class="form-control">
            
			<?php
                        
                            $cupopark= lstat('lstparkreg');
                            $sql = "select * from cupos  where id_parqueaderos=1 and estado_cupo=0 order by nom_cupo;";
                            $res = pg_query($con,$sql);
                            while($arr=pg_fetch_array($res)){
                                    echo "<option >$arr[1]</option>";
                            }
			?>	
		</select><br>            
                <input type='submit' value='Reservar' class="btn btn-success">
        </form>
        <?php
            }
            pg_close($con);
        ?>
    </body>
</html>
