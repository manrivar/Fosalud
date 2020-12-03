var base = $("#base").val();

$(document).ready(function () {
    $('#dui').mask("99999999-9");
    $('#nit').mask("9999-999999-999-9");
    $("#error").fadeOut(0);
    $("#progreso").fadeOut(0);
});

$("#enviar").click(function () {

    var base = $("#base").val();
    var dui = $("#dui").val();
    var nit = $("#nit").val();


    var data = new FormData();

    data.append("bandera", 1);
    data.append("dui", dui);
    data.append("nit", nit);


    var url = base + "/users/procesorecuperacion/";
    $.ajax({
        url: url,
        type: "POST",
        contentType: false,
        data: data,
        processData: false,
        cache: false,
        beforeSend: function () {
            $("#progreso").fadeIn();
            $("#progreso").html("Buscando en base de datos, espere un segundo ...");
            $("#finalizado").fadeOut(0);
            $("#error").fadeOut(0);
        },
        success: function (response) {
            var respuesta = response;
            $("#progreso").fadeOut(function () {
                if (respuesta != -1) {
                    $("#formulario1").fadeOut(0);
                    $("#formulario2").html(respuesta);
                    $("#formulario2").fadeIn();

                } else {
                    $("#error").html("Error: Usuario no encontrado. Comuniquese con Recursos Humanos.");
                    $("#error").fadeIn();
                }

            });

        },
        error: function (xhr, ajaxOptions, thrownError) {
            if (xhr.status == 403) {
                alert("Error: La sesión ha caducado. Inicie sesión nuevamente");
                //window.location = base;
            }
            if (xhr.status == 500) {
                alert("Error: Error de Sevidor. Contacte al administrador del sistema");
                // window.location = base;
            }

        }


    });
    return false;
});


function cancelar() {
    alert(base);
    window.location = base + "/users/login"
}