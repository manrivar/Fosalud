var base = $("#base").val();

$("#HechoFechaHecho1").datepicker({
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true,
    onSelect: function () {
        var inicio1 = $("#HechoFechaHecho1").val();
        var inicio = inicio1.split("-");
        $("#HechoFechaHecho").val(inicio[2] + "-" + inicio[1] + "-" + inicio[0]);
       // calcularDias();
    }
});


$(function() {
    $("#HechoNombreAgresor").autocomplete({
        source: base + "/empleados/buscar_expediente2",
        minLength: 3,
        select: function (event, ui) {
            $("#HechoNombreAgresor").val(ui.item.nombres);
            $("#HechoSexoAgresor").val(ui.item.sexo);
            $("#HechoEdadAgresor").val(ui.item.edad);


        },

    });
});
//mostrar fuente distinta
$("#HechoFuenteDistinta").change(function () {
  
    var fuente = $("#HechoFuenteDistinta").val();
    if(fuente=="Si"){
        
        document.getElementById('otra_fuente').style.display = 'block';
    }
    else{
        document.getElementById('otra_fuente').style.display = 'none';
    }
           
            
   
    return false;
});