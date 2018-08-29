<!DOCTYPE html>
<html>
    <head>
        <title>Modificar Clientes</title>
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
            <h2>Modificar Clientes</h2>
            <hr>
            <div class="col-sm-5">
                <form action="../administrador/modusu2.php" method="post">
            <?php
		include ("../conexion.php");
		$sql = "select * from usuarios order by apellido_usu";
		echo "<table class='table table-striped'>";
		echo "<tr><th>Seleccione una cédula</th> <th>Nombre del Cliente</th> </tr>";
		$res = pg_query($con,$sql);
		while($mat = pg_fetch_array($res)){
				echo "<tr>";
                                echo "<td> <input type='radio' name='victima' value='$mat[0]'> </td>";
				echo "<td> $mat[3] </td>" ;
				echo "</tr>" ;
		}
		pg_close($con);
		echo "</table>";
            ?>
                <hr>
                <input type="submit" class="btn-primary btn-sm" value="Modificar">
            </form>
            </div>
            <?php } ?>
        </div>
        
    </body>
</html>