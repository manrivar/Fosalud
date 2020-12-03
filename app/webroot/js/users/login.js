var base = $("#base").val();


$(function(){
    $("#progreso2").fadeOut(0);
});

$("#username").blur(function () {
    var username = $("#username").val();
    
    if(username == "")
        return false;
    
    var data = new FormData();
    data.append("bandera", 1);
    data.append("username", username);

    var url = base + "/users/validalogin";
    $.ajax({
        url: url,
        type: "POST",
        contentType: false,
        data: data,
        processData: false,
        cache: false,
        beforeSend: function () {
            $("#progreso2").fadeIn();
            $("#progreso2").html("Validando Usuario ...");
            $("#password").prop("disabled", true);
            $("#entrar").prop("disabled", true);
        },
        success: function (response) {
            $("#progreso2").html("");
            var respuesta = response.split("~");
            if (respuesta[0] == true) {
                $("#password").prop("disabled",false);
                $("#entrar").prop("disabled",false);
                $("#password").val("");
                $("#password").focus();
                $("#progreso2").fadeOut();
            } else {
                $("#password").val("");
                $("#progreso2").html("<span class='glyphicon glyphicon-alert'></span> Usuario no valido ...");
            }
            
            $("#fotoPerfil").html(respuesta[1]);

        },
        error: function (xhr, ajaxOptions, thrownError) {
            if (xhr.status == '500') {
                $("#progreso2").html("Error: Surgio un error en el servidor. Contacte con el administrador del sistema");
            }
        }


    });
    return false;

});