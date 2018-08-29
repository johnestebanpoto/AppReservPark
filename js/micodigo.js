var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('mapa'), {
        center: {lat: 1.205884, lng: -77.285787},
        zoom: 13
    });
}

$(document).ready(function () {
    initMap();

    $("#cmdDib").click(function () {
        var image = 'images/marcador.jpg'; //el icono que se quiere mostrar
        var cad = $("#lstlug").val();//obtiene el valor
        var lug = $("#lstlug option:selected").html();//obtiene el texto de la lista
        var cor = cad.split(":");
        //alert ("Lat " + cor[0] + "  lon: " + cor[1]);
        var myLatlng = new google.maps.LatLng(cor[0], cor[1]);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title: lug,
            icon: image
        });
        marker.setMap(map);

    });
});
$(document).ready(function () {
    //pagina index
    $("#divpark").hide();
    $("#divregusu").hide();
    $("#divInicioSesion").hide();

    //pagina index
    $("#idpark").click(function () {
        $("#divinicio").hide();
        $("#divpark").show();
        $("#divpark2").hide();
        $("#divregusu").hide();
        $("#divverreserva").hide();
        $("#divregauto").hide();
        $("#divInicioSesion").hide();
        $("#divres").show();
        $("#mapa").show();
        
    });
    $("#idInicioSesion").click(function () {
        $("#divInicioSesion").show();
        $("#divinicio").hide();
        $("#divpark").hide();
        $("#divpark2").hide();
        $("#divregusu").hide();
        $("#divverreserva").hide();
        $("#divregauto").hide();
        $("#divres").hide();
        $("#mapa").hide();
    });
    $("#btnbuscar").click(function () {
        $("#divinicio").hide();
        $("#divpark").hide();
        $("#divregusu").hide();
        $("#divverreserva").hide();
        $("#divpark2").show();
        $("#divInicioSesion").hide();
        $("#divres").show();
        $("#mapa").show();
    });
    $("#idregusu").click(function () {
        $("#divinicio").hide();
        $("#divpark").hide();
        $("#divpark2").hide();
        $("#divverreserva").hide();
        $("#divregauto").hide();
        $("#divregusu").show();
        $("#divInicioSesion").hide();
        $("#mapa").show();
    });
    $("#idregauto").click(function () {
        $("#divinicio").hide();
        $("#divpark").hide();
        $("#divpark2").hide();
        $("#divverreserva").hide();
        $("#divregusu").hide();
        $("#divregauto").show();
        $("#divInicioSesion").hide();
        $("#divres").show();
        $("#mapa").show();
    });
    $("#idreservar").click(function () {
        $("#divinicio").hide();
        $("#divpark").hide();
        $("#divpark2").hide();
        $("#divverreserva").show();
        $("#divregusu").hide();
        $("#divInicioSesion").hide();
        $("#divres").show();
        $("#mapa").show();
    });

    $("#idregusu").click(function (evt) {
        evt.preventDefault();
        $("#divregusu").html("<img src='images/7.gif'>");
        $("#divregusu").load("addregusu.php");
    });
    $("#idregauto").click(function (evt) {
        evt.preventDefault();
        $("#divregauto").html("<img src='images/7.gif'>");
        $("#divregauto").load("addautocliente.php");
    });
    $("#idreservar").click(function (evt) {
        evt.preventDefault();
        $("#divverreserva").html("<img src='images/7.gif'>");
        $("#divverreserva").load("reservar.php");
    });
    $("#idReservarAdmin").click(function (evt) {
        evt.preventDefault();
        $("#divReservarModuloAdmin").html("<img src='images/7.gif'>");
        $("#divReservarModuloAdmin").load("reservar.php");
    });
    $("#idInicioSesion").click(function (evt) {
        evt.preventDefault();
        $("#divInicioSesion").html("<img src='images/7.gif'>");
        $("#divInicioSesion").load("login.php");
    });
});
$(document).ready(function () {

    $("#frm1").submit(function (evt) {
        evt.preventDefault();
        $.ajax({
            url: "buscarpark.php", //pagina que proces
            type: "post", //metodo de envio  get o post
            data: $("#frm1").serialize(), // id del formulario
            beforeSend: function () {
                $("#divpark2").html("<img src='images/7.gif'>"); //icono ajax loader
            },
            success: function (datos) {
                $("#divpark2").html(datos); //carga de datos 
            }
        });
    });
    $("#frmreservar").submit(function (evt) {
        evt.preventDefault();
        $.ajax({
            url: "reservar2.php", //pagina que proces
            type: "post", //metodo de envio  get o post
            data: $("#frmreservar").serialize(), // id del formulario
            beforeSend: function () {
                $("#divreservar2").html("<img src='images/7.gif'>"); //icono ajax loader
            },
            success: function (datos) {
                $("#divreservar2").html(datos); //carga de datos 
            }
        });
    });
    $("#frmregusu").submit(function (evt) {
        evt.preventDefault();
        $.ajax({
            url: "addregusu2.php", //pagina que proces
            type: "post", //metodo de envio  get o post
            data: $("#frmregusu").serialize(), // id del formulario
            beforeSend: function () {
                $("#divresreg").html("<img src='images/7.gif'>"); //icono ajax loader
            },
            success: function (datos) {
                $("#divresreg").html(datos); //carga de datos 
            }
        });
    });
    $("#frmaddautocliente").submit(function (evt) {
        evt.preventDefault();
        $.ajax({
            url: "addautocliente2.php", //pagina que proces
            type: "post", //metodo de envio  get o post
            data: $("#frmaddautocliente").serialize(), // id del formulario
            beforeSend: function () {
                $("#divresauto").html("<img src='images/7.gif'>"); //icono ajax loader
            },
            success: function (datos) {
                $("#divregauto").html(datos); //carga de datos 
            }
        });
    });




});
