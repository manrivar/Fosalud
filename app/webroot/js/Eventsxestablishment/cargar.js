//FUNCIONES AJAX PARA EL INGRESO DEL VALE DE SALIDA DE ALMACEN

//autocomplete
var base = $("#base").val();


$(function () {
    $("#detalleSeleccion").fadeOut();

})
/*
$('#establecimiento').keypress(function (event) {
//validacion de teclado backspace para eliminar el id seleccionado
    if (event.which == 8) {
        $("#establecimiento_id").val("");
        $("#sibasi_id").val("");
        $("#region_id").val("");
        $("#datos").html("");
        $("[name=mes]").val(0);
    }
    $("#establecimiento").autocomplete({
        source: base + "/cierreestablecimientos/view/?bandera=1",
        minLength: 1,
        select: function (event, ui) {
            $("#establecimiento_id").val(ui.item.id);
            $("#sibasi_id").val(ui.item.sibasi_id);
            $("#region_id").val(ui.item.region_id);

            if ($("#ConsumoFechaconsumoMonth").val() != null) {
                $("#ConsumoFechaconsumoMonth").change();
            }

            /*alert(ui.item ?
             "Selected: " + ui.item.value + " aka " + ui.item.id :
             "Nothing selected, input was " + this.value);*/
/*       },
   });
});
*/

/*
 * VALIDACION DE CARGA MAXIMA DE ARCHIVOS
 */
$("#arch").change(function () {
    var inputFile = document.getElementById("arch");
    var max_upload = $("#max_upload").val();
    var file = inputFile.files;
    var detalle = "------------------- <br/>";
    var peso = 0;
    var UM = "";
    var pesoTotal = 0;

    for (i = 0; i < inputFile.files.length; i++) {
        detalle = detalle + file[i].name + "<br/>";
        peso = peso + file[i].size;
    }
    var detalle = detalle + "-------------------";


    switch (true) {
        case ((peso / 1024 >= 1) && (peso / 1024 <= 1023)):
            UM = "Kb";
            pesoTotal = parseFloat(peso / 1024).toFixed(2);

            break;
        case ((peso / 1024 >= 1024) && (peso / 1024 <= 1048565)):
            UM = "MB";
            pesoTotal = parseFloat(peso / 1048565).toFixed(1);
            break;
    }

    if (peso > max_upload) {
        alert("Los archivos seleccionados sobrepasan el maximo permitido por el servidor \n\
                    Seleccionados: " + pesoTotal + "" + UM + " Permitido: " + $("#max_upload_M").val());
        $("#arch").val("");
        $("#detalleSeleccion").html("");
        $("#detalleSeleccion").fadeOut();
        return false;
    }

    detalle = detalle + "<br/> Total a subir (" + UM + "): " + pesoTotal;
    $("#detalleSeleccion").html(detalle);
    $("#detalleSeleccion").fadeIn();

});


$("#arch").change(function () {
    $("#datos").html("");
});




// Subida de informacion

$("#subirExcel").click(function () {
    var inputFile = document.getElementById("arch");
    var base = $("#base").val();
    var regions = $("#regions").val();
    var year = $("#year").val();
    var file = inputFile.files;
    var archivos = inputFile.files.length;


    /*
        if (fechapago == "") {
            alert("Ingrese una fecha de pago valida.");
            $("#fechapago").focus();
            return false;
        }
    
        if (mes == "" || anio == "") {
            alert("Seleccione un periodo valido");
            $("#PresupuestoFechaconsumoYear").focus();
            return false;
        }
    */
    if (archivos == 0) {
        alert("Seleccione un archivo de Excel valido");
        return false;
    }


    var data = new FormData();
    data.append("bandera", 2);
    data.append("regions", regions);
    data.append("year", year);

    /*
     * ENVIO DE ARCHIVOS POR POST
     */

    //alert(inputFile.files.length);
    //return false;
    for (i = 0; i < inputFile.files.length; i++) {
        data.append("archivo0", file[i]);
    }


    var url = base + "/Eventsxestablishments/cargar/";
    $.ajax({
        url: url,
        type: "POST",
        contentType: false,
        data: data,
        processData: false,
        cache: false,
        beforeSend: function () {
            $("#progreso2").fadeIn();
            $("#progreso2").html("Cargando Archivos ...");
        },
        success: function (response) {
            $("#progreso2").fadeOut(function () {
                $("#listaArchivos").fadeIn();
                $("#listaArchivos").html(response);

                $("#arch").val("");
                $("#datos").html(response);
                $("#detalleSeleccion").html("");
                $("#detalleSeleccion").fadeOut();
            });

        },
        error: function (xhr, ajaxOptions, thrownError, response) {
            if (xhr.status == '403') {
                $("#progreso2").html("");
                $("#progreso2").hide();
                alert("Error: La sesion ha sido finalizada. No se cargo el archivo");
                window.location = base + "/users/login";
            }
            if (xhr.status == '500') {
                var responseText = xhr.responseText.split('<div id="content">');
                var alertaError = responseText[1].split('<p class="notice">');
                var Errormensaje = alertaError[0];
                var ErrorQuery = alertaError[1];
                $("#progreso2").html("Error: Surgio un error en el servidor. Contacte con el administrador del sistema <br/>\n\
                                     " + Errormensaje + "<br/>\n\
                                     "+ ErrorQuery);
            }
        }


    });
    return false;
});


