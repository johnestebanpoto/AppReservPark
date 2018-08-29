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
          <a class='navbar-brand' href='admin.php' id='idInicioAdmin'>Inicio</a>
        </div>
            <ul class='nav navbar-nav'>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                    <span class='glyphicon glyphicon-th' aria-hidden='true'></span> Reservas <span class='caret'></span></a>
                    <ul class='dropdown-menu'>
                          <li><a href='".$ruta."administrador/reservar.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Realizar Reserva</a></li>
                          <li><a href='".$ruta."administrador/cancelareserva.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Cancelar reserva</a></li>
                          <li role='separator' class='divider'></li>
                          <li><a href='".$ruta."administrador/verreservas.php'><span class='glyphicon glyphicon-search' aria-hidden='true'></span> Ver Reservas</a></li>
                    </ul>
              </li>
            </ul> 
            <ul class='nav navbar-nav'>
            <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                    <span class='glyphicon glyphicon-user' aria-hidden='true'></span> Clientes <span class='caret'></span></a>
                    <ul class='dropdown-menu'>
                          <li><a href='".$ruta."administrador/addusu.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Adicionar</a></li>
                          <li><a href='".$ruta."administrador/modusu.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Modificar</a></li>
                          <li role='separator' class='divider'></li>
                          <li><a href='".$ruta."administrador/lstusu.php'><span class='glyphicon glyphicon-search' aria-hidden='true'></span> Ver Administradores</a></li>
                    </ul>
              </li>
            </ul>  
            <ul class='nav navbar-nav'>
            <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                    <span class='glyphicon glyphicon-bed' aria-hidden='true'></span> Vehiculos <span class='caret'></span></a>
                    <ul class='dropdown-menu'>
                          <li><a href='".$ruta."administrador/addauto.php'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Adicionar</a></li>
                          <li><a href='".$ruta."administrador/modauto.php'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Modificar</a></li>
                          <li role='separator' class='divider'></li>
                          <li><a href='".$ruta."administrador/lstauto.php'><span class='glyphicon glyphicon-search' aria-hidden='true'></span> Ver Vehiculos </a></li>
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