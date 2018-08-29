<?php
$ruta = "http://localhost/AppWebPark/";
echo"
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div id='modaladmin' class='modal fade' tabindex='-1' role='dialog'>
                    <div class='modal-dialog' role='document'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                          <b class='modal-title'>LOGIN ADMINISTRADOR</b>
                        </div>
                        <div class='modal-body'>
                            <form method='post' action='http://localhost/AppWebPark/sesion/verificaradmin.php' id='frmloginadmin' class='colorazul'>
                              <div class='form-group'>
                                <label>Usuario:</label>
                                <input type='text' class='form-control' placeholder='nombre de usuario' name='txtusu' required>
                              </div>
                              <div class='form-group'>
                                <label>Password</label>
                                <input type='password' class='form-control' name='txtcla' placeholder='Password' required>
                              </div>
                                <button type='submit' class='btn btn-default'><b>Ingresar</b></button>
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
