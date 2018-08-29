<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/miestilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/micodigo.js" type="text/javascript"></script>
        <script src="../js/moduloadmin.js" type="text/javascript"></script>
    </head>
    <body>

        <div class="container">
            <form id="frmInicioSesion" method="post" action="../sesion/verificaradmin.php">
                <h3 style="text-align: center"><i>Inicio sesiòn</i></h3>
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" placeholder="Usuario" name="txtusu" required>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="txtcla" placeholder="Contraseña" required>
                </div>
                <button id="idButtonInicioSesion" type="submit" class="btn btn-primary">Ingresar</button>
            </form>
            <div id="divInicioSesion2"></div>
        </div>
    </body>
</html>




