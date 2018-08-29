<!DOCTYPE html>
<html>
  <head>
        <title>Buscar parqueadero</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/micodigo.js" type="text/javascript"></script>
        <script 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7oJUbcf4mew1_X1cKAdk6uPNuAonDanw&callback=initMap">
        </script>
  </head>
  <body>
        <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <p class="alingcenter"><FONT SIZE=5>Seleccione el parqueadero<br> y encuentra su ubicación</font> </p>  
                        </a>
                        
                    </div>
        <hr>
        <select id="lstlug" class="form-control">
        <?php
        include './conexion.php';
        $sql = "select * from parqueaderos";
        $res = pg_query($con, $sql);
        while ($arr = pg_fetch_array($res)){
            echo "<p>Parqueadero</p>.<option value='$arr[8]:$arr[7]'>$arr[1]</option>";
        }
        pg_close($con);
        ?>
        </select><br>
        <input type="button" value="Mostrar ubicación en el mapa" id="cmdDib" class="btn btn-primary">
        <hr>
  </body>
</html>
