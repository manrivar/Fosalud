function convertir_fechas(fecha) {
    var fecha_conv;
    var inicio = fecha.split("-");

    fecha_conv = inicio[2] + "-" + inicio[1] + "-" + inicio[0];
    return fecha_conv;
}


var nav4 = window.Event ? true : false;

function Valida(evt, Objeto) {
    var key = nav4 ? evt.which : evt.keyCode;
    //alert(Objeto.id);
    //alert(key);
    if (Objeto.id == 'CodigoonusId' || Objeto.id == 'EspecificoId') {
        //key == 0 Es decir combinaciones de tablas shift o FX
        return ((key == 0) || key == 8 || (key >= 48 && key <= 57));
    } else {
        return ((key == 13) || key == 8 || (key >= 48 && key <= 57) || key == 46);
    }
    /*} else {
     
     return ((key < 13) || (key >= 97 && key <= 122) || (key >= 48 && key <= 57) || (key == 165 || key == 164) || (key >= 65 && key <= 90) || key == 43 || key == 32 || key == 45);
     }*/
}//Saltos


//GENERACION DE PDFs CON GRAFICOS

function getImgData(chartContainer) {
    var chartArea = chartContainer.getElementsByTagName('svg')[0].parentNode;
    var svg = chartArea.innerHTML;
    var doc = chartContainer.ownerDocument;
    var canvas = doc.createElement('canvas');
    canvas.setAttribute('width', chartArea.offsetWidth);
    canvas.setAttribute('height', chartArea.offsetHeight);


    canvas.setAttribute(
            'style',
            'position: absolute; ' +
            'top: ' + (-chartArea.offsetHeight * 2) + 'px;' +
            'left: ' + (-chartArea.offsetWidth * 2) + 'px;');
    doc.body.appendChild(canvas);
    canvg(canvas, svg);
    var imgData = canvas.toDataURL("image/png");
    canvas.parentNode.removeChild(canvas);
    return imgData;
}

function saveAsImg(chartContainer) {
    var imgData = getImgData(chartContainer);
// Replacing the mime-type will force the browser to trigger a download
// rather than displaying the image in the browser window.
    window.location = imgData.replace("image/png", "image/octet-stream");
}

function toImg(chartContainer, imgContainer, imgTxt, chartDiv) {
    var doc = chartContainer.ownerDocument;
    var img = doc.createElement('img');
    img.src = getImgData(chartContainer);
    while (imgContainer.firstChild) {
        imgContainer.removeChild(imgContainer.firstChild);
    }
    imgContainer.appendChild(img);

    $("#" + imgTxt).val(img.src);
    $("#" + chartDiv).fadeOut(function () {
    });

}



function ceros(obj, value) {
    if (value == 0) {
        obj.value = '';
    }

    if (value == '') {
        obj.value = 0;
    }

}


function OpenWindowWithPost(url, windowoption, name, params)
{
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", url);
    form.setAttribute("target", name);

    for (var i in params) {
        if (params.hasOwnProperty(i)) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = i;
            input.value = params[i];
            form.appendChild(input);
        }
    }

    document.body.appendChild(form);

    //note I am using a post.htm page since I did not want to make double request to the page 
    //it might have some Page_Load call which might screw things up.
    window.open("post.htm", name, windowoption);

    form.submit();

    document.body.removeChild(form);
}

var windowObjectReference;

function verPagina(Url, Detalle) {
    windowObjectReference = window.open(
            Url,
            Detalle,
            "resizable,scrollbars,status, width=" + screen.width / 2 + ", left=" + screen.width / 4 + ", top=" + screen.height / 8
            );
}
