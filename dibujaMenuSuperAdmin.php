<?php

    $ruta = "http://localhost/AppWebPark/";
    echo"
    <div class='container'>
        <nav class='navbar navbar-inverse'>
            <div class='col-sm-10'>
                <h1>Super Administrador Mi Parqueadero</h1>
            </div>

            <div class='col-sm-2'><br>

            </div>                
        </nav>
    <nav class='navbar navbar-inverse'>
   <div class='container-fluid'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
        </div>
        <div class='col-sm-8'>
            <ul class='nav navbar-nav'>
                <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                        <span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Propietarios <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                              <li><a href='".$ruta."propietarios/addprop.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Adicionar</a></li>
                              <li><a href='".$ruta."propietarios/modprop.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Modificar</a></li>
                              <li><a href='".$ruta."propietarios/eliprop.php'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Eliminar</a></li>
                              <li role='separator' class='divider'></li>
                              <li><a href='".$ruta."propietarios/lstprop.php'><span class='glyphicon glyphicon-th' aria-hidden='true'></span> Ver Propietarios</a></li>
                        </ul>
              </li>


              <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                        <span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Parqueaderos <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                              <li><a href='".$ruta."park/addpark.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Adicionar</a></li>
                              <li><a href='".$ruta."park/modpark.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Modificar</a></li>
                              <li><a href='".$ruta."park/elipark.php'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Eliminar</a></li>
                              <li role='separator' class='divider'></li>
                              <li><a href='".$ruta."park/lstpark.php'><span class='glyphicon glyphicon-th' aria-hidden='true'></span> Ver Parqueaderos</a></li>
                        </ul>
              </li>

              <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                    <span class='glyphicon glyphicon-user' aria-hidden='true'></span> Clientes <span class='caret'></span></a>
                    <ul class='dropdown-menu'>
                          <li><a href='".$ruta."clientes/addclientes.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Adicionar</a></li>
                          <li><a href='".$ruta."clientes/modclientes.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Modificar</a></li>
                          <li><a href='".$ruta."clientes/eliclientes.php'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Eliminar</a></li>
                          <li role='separator' class='divider'></li>
                          <li><a href='".$ruta."clientes/lstclientes.php'><span class='glyphicon glyphicon-th' aria-hidden='true'></span> Ver Clientes</a></li>
                    </ul>
              </li>

              <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                    <span class='glyphicon glyphicon-user' aria-hidden='true'></span> Administradores <span class='caret'></span></a>
                    <ul class='dropdown-menu'>
                          <li><a href='".$ruta."administrador/addadmin.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Adicionar</a></li>
                          <li><a href='".$ruta."administrador/modadmin.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Modificar</a></li>
                          <li><a href='".$ruta."administrador/eliadmin.php'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Eliminar</a></li>
                          <li role='separator' class='divider'></li>
                          <li><a href='".$ruta."administrador/lstadmin.php'><span class='glyphicon glyphicon-th' aria-hidden='true'></span> Ver Administradores</a></li>
                    </ul>
              </li>
              <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                    <span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Reportes <span class='caret'></span></a>
                    <ul class='dropdown-menu'>
                          <li><a href='".$ruta."reportes/repprop.php' target='r1'> Propietarios</a></li>
                          <li><a href='".$ruta."reportes/reppark.php' target='r2'> Parqueaderos</a></li>
                          <li><a href='".$ruta."reportes/repcli.php' target='r3'> Clientes</a></li>
                          <li><a href='".$ruta."reportes/repadmin.php' target='r4'> Administradores</a></li>
                    </ul>
              </li>
            </ul>
        </div>

        <div class='col-sm-4'>
                    <ul class='nav navbar-nav'>
                    <li><a href='".$ruta."cargarcontratos.php'>Cargar contratos Park</a></li>
                    <li><a href='".$ruta."index.php'>Cerrar Sesión</a></li>
                    </ul>
        </div>            
    </nav>

    </div>   


   </div>"
   ;
?>