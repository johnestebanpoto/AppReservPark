<?php
$ruta = "http://localhost/AppWebPark/";
echo"
<nav class='navbar navbar-inverse'>
   <div class='container-fluid'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='propietario.php' id='btnInicioPropietario'>Inicio</a>
        </div>
            <ul class='nav navbar-nav'>
                <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                        <span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Registros <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                              <li><a href='".$ruta."propietarios/addprop.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Administradores</a></li>
                              <li role='separator' class='divider'></li>
                              <li><a href='".$ruta."propietarios/modprop.php'><span class='glyphicon glyphicon-user' aria-hidden='true'></span> Clientes</a></li>
                              <li role='separator' class='divider'></li>
                              <li><a href='".$ruta."propietarios/eliprop.php'><span class='glyphicon glyphicon-bed' aria-hidden='true'></span> Vehiculos</a></li>
                        </ul>      
                </li>
                <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                        <span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> Administración <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                              <li><a href='".$ruta."park/addpark.php'><span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span> Reportes</a></li>
                              <li role='separator' class='divider'></li>
                              <li><a href='".$ruta."park/modpark.php'><span class='glyphicon glyphicon-usd' aria-hidden='true'></span> Tarifas</a></li>
                              <li role='separator' class='divider'></li>
                              <li><a href='".$ruta."park/elipark.php'><span class='glyphicon glyphicon-briefcase' aria-hidden='true'></span> Contratos</a></li>
                        </ul>
                </li>
                <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                        <span class='glyphicon glyphicon-usd' aria-hidden='true'></span> Pagos <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                              <li><a href='".$ruta."park/addpark.php'><span class='glyphicon glyphicon-user' aria-hidden='true'></span> Nomina</a></li>
                              <li role='separator' class='divider'></li>
                              <li><a href='".$ruta."park/modpark.php'><span class='glyphicon glyphicon-phone-alt' aria-hidden='true'></span> Serv Publicos</a></li>
                        </ul>
                </li>
            </ul>    
            <ul class='nav navbar-nav navbar-right'>
                                <li><a href='".$ruta."cargarcontratos.php'>Cargar contratos</a></li>
                                <li><a href='#'data-toggle='modal' data-target='#modalcerrarsesion'>Cerrar Sesión</a></li>
            </ul>
        </div>
    </div>

    </nav>

    </div>  
   "
   ;
?>