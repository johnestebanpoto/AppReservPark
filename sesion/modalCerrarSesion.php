<?php
    $ruta = "http://localhost/AppWebPark/";
    echo"
    <div id='modalcerrarsesion' class='modal fade' tabindex='-1'role='dialog'>
                    <div class='modal-dialog' role='document'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                          <h4 class='modal-title'>CERRAR SESION ADMINISTRADOR</h4>
                        </div>
                        <div class='modal-body'>
                            
                            <form method='post' action='../sesion/cerrar_sesion.php' id='frmcerrarsesion'>
                               
                               <div class='form-group'>
                                  <p>Desea cerrar su sesion</p>
                                  
                              </div>
                              <button type='submit' class='btn btn-default'>Aceptar</button>
                            </form>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-default' data-dismiss='modal'>Cancelar</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
        </div>"
?>