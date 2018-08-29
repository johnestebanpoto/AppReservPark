<?php
            
$ruta = "http://localhost/AppWebPark/";
echo"
<nav class='navbar navbar-default' style='color:blue; background-color: #e3f2fd;'>
            
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                  <span class='sr-only'>Toggle navigation</span>
                  <span class='icon-bar'></span>
                  <span class='icon-bar'></span>
                  <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='index.php' id='btningrevehi'>Inicio</a>
            </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav'>
                    <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                        <span class='glyphicon glyphicon-search' aria-hidden='true'></span> Filtro <span class='caret'></span></a>
                        <ul class='dropdown-menu'>
                              <li><a href='".$ruta."lstpark.php'><span class='glyphicon glyphicon-road' aria-hidden='true'></span> Parqueaderos </a></li>
                              <li role='separator' class='divider'></li>
                              <li><a href='".$ruta."administrador/modusu.php'><span class='glyphicon glyphicon-th' aria-hidden='true'></span> Barrios </a></li>
                              <li role='separator' class='divider'></li>
                              <li><a href='".$ruta."lstpark.php'><span class='glyphicon glyphicon-usd' aria-hidden='true'></span> Tarifas </a></li>
                              <li role='separator' class='divider'></li>
                        </ul>
                    </li>                        
                    <li><a href='#' id='idpark'><span class='glyphicon glyphicon-th' aria-hidden='true'></span> Reservar</a></li> 
                </ul>
                <ul class='nav navbar-nav navbar-right'>
                    <li><a href='#' id='idregauto'><i><FONT SIZE=4>Registro vehiculo</font></i></a></li>
                    <li><a href='#' id='idregusu'><i><FONT SIZE=4>Registro usuario</font></i></a></li>
                    <li><a href='#' id='idInicioSesion'><i><FONT SIZE=4>Inicio sesión</font></i></li>
                    
                </ul>
             </diV>   
        </nav>
         
       "    ;
        ?>