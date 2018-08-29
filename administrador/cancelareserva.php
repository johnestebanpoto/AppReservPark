<!DOCTYPE html>
<html>
    <head>
        <title>Cancelar reserva</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
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
            <h2>Cancelar reserva</h2>
            <hr>
            <div class="col-sm-5">
                <form action="../administrador/cancelareserva2.php" method="post">
            <?php
		include ("../conexion.php");
		$sql = "select *from reservas where id_parqueaderos=1 and estado=1;";
		echo "<table class='table table-striped'>";
		echo "<tr><th>Seleccione</th> <th>cedula</th> <th>id parqueadero</th> <th>cupo</th> </tr>";
		$res = pg_query($con,$sql);
		while($mat = pg_fetch_array($res)){
				echo "<tr>";
                                echo "<td> <input type='radio' name='victima' value='$mat[0]'> </td>";
				echo "<td> $mat[3] </td>" ;
				echo "<td> $mat[4] </td>" ;
				echo "<td> $mat[8] </td>" ;
				echo "</tr>" ;
		}
		pg_close($con);
		echo "</table>";
            ?>
                <hr>
                <input type="submit" class="btn-primary btn-sm" value="Cancelar reserva">
            </form>
            </div>
            <?php } ?>
        </div>
        
    </body>
</html>