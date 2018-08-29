<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reservar</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/micodigo.js" type="text/javascript"></script>
        <script src="js/codigo2.js" type="text/javascript"></script>
    </head>
    <body>
        <form action="reservar2.php" method="post" id="frmreservar">
            <label>Digite cedula</label>
            <input type="number" min="0" required name="txtcedusu" class="form-control">
            <label>Digite placa</label>
            <input type="text" name="txtplacausu" id="txtplacausu" required pattern='[A-Z]{3}[0-9]{3}' placeholder='AAA999' class='form-control'>
            <br>
            <input type="submit" value="Solicitar" class="btn btn-primary">
        </form>
        <div id="divreservar2"></div>
        <?php
        // put your code here
        ?>
    </body>
</html>
