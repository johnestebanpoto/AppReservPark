$(document).ready(function(){
    //pagina admin
    $("#divInicioModuloAdmin").show();
    $("#divReservarModuloAdmin").hide();
    //pagina moulo admin
    $("#idReservarAdmin").click(function (){
       $("#divInicioModuloAdmin").hide();
       $("#divReservarModuloAdmin").show(); 
    });
    /*$("#btnfacturaingesoauto").click(function (){
       $("#divingresosautos").hide(); 
    });*/
   
    $("#idregusu").click(function(evt){
        evt.preventDefault();
        $("#divreusu").html("<img src='images/7.gif'>");
        $("#divregusu").load("addregusu.php");
    });
     
    
        
});
$(document).ready(function(){

    $("#frmingresovehiculo").submit(function(evt){
        evt.preventDefault();
        $.ajax({
            url: "ingresoauto.php", //pagina que proces
            type: "post", //metodo de envio  get o post
            data: $("#frmingresovehiculo").serialize(), // id del formulario
            beforeSend: function() {
                $("#divresultadosadmin").html("<img src='images/7.gif'>"); //icono ajax loader
            },
            success: function(datos){
                $("#divresultadosadmin").html(datos); //carga de datos 
            }
        });
    });
    $("#frmsalidavehiculo").submit(function(evt){
        evt.preventDefault();
        $.ajax({
            url: "salidaauto.php", //pagina que proces
            type: "post", //metodo de envio  get o post
            data: $("#frmsalidavehiculo").serialize(), // id del formulario
            beforeSend: function() {
                $("#divresultadosadmin").html("<img src='images/7.gif'>"); //icono ajax loader
            },
            success: function(datos){
                $("#divresultadosadmin").html(datos); //carga de datos 
            }
        });
    });
});




