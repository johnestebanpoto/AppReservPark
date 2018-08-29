<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reservar</title>
    </head>
    <body>
<?php
echo"
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div id='modalcambioestadoreserva' class='modal fade' tabindex='-1' role='dialog'>
                    <div class='modal-dialog' role='document'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                          <b class='modal-title'>RESERVAS</b>
                        </div>
                        <div class='modal-body'>
                            <form method='post' action='http://localhost/AppWebPark/administrador/modalcambioestadoreserva.php' id='frmestadoreserva' class='colorazul'>
                                <button type='submit' class='btn btn-success'><b>Cancelar reserva</b></button>
                            </form>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-primary' data-dismiss='modal'>Cerrar</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        </div>
"
 
?>
</body>