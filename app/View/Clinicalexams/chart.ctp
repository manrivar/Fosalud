<!DOCTYPE html>
<html>

<head>
  <!--Script Reference[1] -->
  <!-- <script src="https://cdn.zingchart.com/zingchart.min.js"></script> -->
  <?php
  echo $this->Html->script('zingchart/zingchart.min');
  echo $this->Html->script('zingchart/themes/tema.js');

  ?>
</head>

<body>

  <center>
    <h2>Graficos</h2>
  </center>
  <!-- Chart Placement[2] -->

  <center>
    <div id="myChart"></div>
  </center>
  <br><br>
  <center>
    <div id="pieChart"></div>
  </center>



  <script type="text/javascript">
    var regocc = <?php echo json_encode($regocc); ?>;
    var regcen = <?php echo json_encode($regcen); ?>;
    var regmet = <?php echo json_encode($regmet); ?>;
    var regpar = <?php echo json_encode($regpar); ?>;
    var regori = <?php echo json_encode($regori); ?>;
    var avgData = <?php echo json_encode($avgData); ?>;
    var tot_trim = <?php echo json_encode($tot_trim); ?>;
    var sum1 = <?php echo $sum1 ?>;
    var sum2 = <?php echo $sum2 ?>;
    var sum3 = <?php echo $sum3 ?>;
    var sum4 = <?php echo $sum4 ?>;
    var sum5 = <?php echo $sum5 ?>;
  </script>
  <script>
    // Render Method[3]
    var myConfig = {
      "type": "mixed",
      "gui": {
        "behaviors": [{
          "id": 'ViewSource',
          "enabled": 'none'
        }, ]
      },
      "legend": {
        "layout": "1x7", //row x column
        "align": "center",
        "vertical-align": "bottom",
        // "x":"23.5%",
        // "y":"92%",
      },
      "title": {
        "text": "Examenes Clinicos"
      },
      "plot": {
        "tooltip": {
          "text": "%t: %v Consultas",
          "thousands-separator": ","
        }
      },
      "scale-x": {
        "labels": ["Trimestre 1", "Trimestre 2", "Trimestre 3", "Trimestre 4"]
      },
      "scale-y": {
        "progression": "log",
        "log-base": 10,
        "thousands-separator": ",",
        "short": true
      },
      "series": [{
          "type": "bar",
          "values": regocc,
          "text": "Region Occidental"
        },
        {
          "type": "bar",
          "values": regcen,
          "text": "Region Centro"
        },
        {
          "type": "bar",
          "values": regmet,
          "text": "Region Metropolitana"
        },
        {
          "type": "bar",
          "values": regpar,
          "text": "Region Paracentral"
        },
        {
          "type": "bar",
          "values": regori,
          "text": "Region Oriente"
        },
        {
          "type": "line",
          "values": tot_trim,
          "aspect": "spline",
          "text": "Total"
        },
        {
          "type": "line",
          "values": avgData,
          "aspect": "spline",
          "text": "Promedio"
        },
      ]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      defaults: myTheme

    });
  </script>

  <script>
    var myData = {
      "type": "pie",
      "gui": {
        "behaviors": [{
          "id": 'ViewSource',
          "enabled": 'none'
        }, ]
      },
      "title": {
        "text": "Examenes Clinicos"
      },
      "legend": {
        "layout": "1x5", //row x column
        "align": "center",
        "vertical-align": "bottom",
        // "border-width":1,
        // "border-color":"gray",
        // "border-radius":"5px",
        // "header":{
        //   "text":"Legend",
        //   "font-family":"Georgia",
        //   "font-size":12,
        //   "font-color":"#3333cc",
        //   "font-weight":"normal"
        // },
        // "marker":{
        //   "type":"circle"
        // },
        "toggle-action": "remove", // hace que al seleccionar una serie en la leyenda se remueva esa serie del grafico
        // "minimize":true,
        // "icon":{
        //   "line-color":"#9999ff"
        // },
        // "max-items":8,
        // "overflow":"scroll"
      },
      "plotarea": {
        // "margin-right":"30%", // tamaño y posicion del grafico
        // "margin-top":"15%"
      },
      "plot": {
        "animation": {
          "on-legend-toggle": true, //set to true to show animation and false to turn off
          "effect": 3, // define el tipo de efecto de animacion del grafico
          // "method": 1, // realiza que cuando se quite una serie del grafico haga una animacion(rebota el grafico cuando se quita una serie)
          "sequence": 1,
          "speed": 2 // Velocidad de la animacion
        },
        "value-box": {
          "text": "%v Consultas (%npv%)",
          "thousands-separator": ",",
          "font-size": 12,
          // "font-family":"Georgia",
          "font-weight": "normal",
          "placement": "out",
          "font-color": "gray",
        },
        "tooltip": {
          "text": "%t: %v Consultas (%npv%)",
          "thousands-separator": ",",
          "font-color": "black",
          // "font-family":"Georgia",
          "text-alpha": 1,
          "background-color": "white",
          "alpha": 0.7,
          "border-width": 1,
          "border-color": "#cccccc",
          "line-style": "dotted",
          "border-radius": "10px",
          "padding": "10%",
          "placement": "node:center"
        },
        "border-width": 1,
        "border-color": "#cccccc",
        "line-style": "dotted"
      },
      "series": [{
          "values": [sum1],
          // "background-color":"#cc0000",
          "text": "Region Occidental"
        },
        {
          "values": [sum2],
          // "background-color":"#ff3300",
          "text": "Region Centro"
        },
        {
          "values": [sum3],
          // "background-color":"#ff6600",
          "text": "Region Metropolitana"
        },
        {
          "values": [sum4],
          // "background-color":"#ff9933",
          "text": "Region Paracentral"
        },
        {
          "values": [sum5],
          // "background-color":"#ff9933",
          "text": "Region Oriente"
        }
      ]
    };

    zingchart.render({
      id: 'pieChart',
      data: myData,
      height: 700,
      width: "100%",
      defaults: myTheme

    });
  </script>
</body>