$(function () {

    $("#enviar").click(function () {

        var base = $("#base").val();
        var UserId = $("#UserId").val();
        var nombre_usuario = $("#nombre_usuario").val();
        var email = $("#email").val();
        var username = $("#username").val();
        var grupo = $("#UserGroupId").val();
        var estado = $("#estado").val();
        var acceso_id = $("#UserAccesoId").val();

        var data = new FormData();

        data.append("user_id", UserId);
        data.append("nombre_usuario", nombre_usuario);
        data.append("email", email);
        data.append("username", username);
        data.append("group_id", grupo);
        data.append("estado", estado);
        data.append("acceso_id", acceso_id);

        var url = base + "/users/edit_gral/" + UserId;
        $.ajax({
            url: url,
            type: "POST",
            contentType: false,
            data: data,
            processData: false,
            cache: false,
            beforeSend: function () {
                $("#progreso").fadeIn();
                $("#progreso").html("Actualizando datos ...");
                $("#finalizado").fadeOut(0);
                $("#error").fadeOut(0);
            },
            success: function (response) {
                var respuesta = response.split("^");
                $("#progreso").fadeOut(function () {
                    if (respuesta[0] == "SI") {
                        $("#finalizado").html("Datos actualizados!");
                        $("#finalizado").fadeIn();

                    } else {
                        $("#error").html("Error: " + respuesta[1]);
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

});