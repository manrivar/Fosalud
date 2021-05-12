<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
<<<<<<< HEAD
        <li> <span class="fa fa-undo"></span> <?php echo $this->Html->link(__('Regresar'), array('action' => 'index', $reg, '?yir=' . $yer)); ?></li>
        <li>
      <span class="glyphicon glyphicon-list"></span> <?php echo $this->Html->Link('Regresar a Lista de Regiones', array('controller' => 'Healingcares', 'action' => 'index?yir=' . $yer)); ?>
    </li>
    </ol>
</div>

<head>
    <?php
    echo $this->Html->script('zingchart/zingchart.min');
    echo $this->Html->script('zingchart/themes/tema.js');
    ?>
    <style>
        .chart--container {
        height: 100%;
        width: 100%;
        min-height: 700px;
        }

        .zc-ref {
        display: none;
        }
    </style>
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
    <div id="pieChart"></div>
    <br><br>
    <center>
        <div id="myChart2" class="chart--container"><a class="zc-ref" href="https://www.zingchart.com/">Powered by ZingChart</a></div>
    </center>

    <script type="text/javascript">
        var conData = <?php echo json_encode($conData); ?>;
        var emedata = <?php echo json_encode($emeData); ?>;
        var extdata = <?php echo json_encode($extData); ?>;
        var avgdata = <?php echo json_encode($avgData); ?>;
        var totdata = <?php echo json_encode($totData); ?>;
        var sumcon = <?php echo json_encode($sum_con); ?>;
        var sumeme = <?php echo json_encode($sum_eme); ?>;
        var sumext = <?php echo json_encode($sum_ext); ?>;
        var Sibasis = <?php echo json_encode($siba); ?>;
        var Sibas = <?php echo json_encode($sibas); ?>;
    </script>
    <script type="text/javascript">
        var Estas1 = <?php echo json_encode($estas1); ?>;
        var Estas2 = <?php echo json_encode($estas2); ?>;
        var Estas3 = <?php echo json_encode($estas3); ?>;
        var Estas4 = <?php echo json_encode($estas4); ?>;
        var Regi = <?php echo $reg; ?>; 
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
                "layout": "1x5", //row x column
                "align": "center",
                "vertical-align": "bottom",
                // "x":"23.5%",
                // "y":"92%",
            },
            "title": {
                "text": "Atencion Curativa"
            },
            "plot": {
                "tooltip": {
                    "text": "%t: %v Consultas",
                    "thousands-separator": ",",
                    // "styles": [ "orange", "yellow", "green", "blue", "purple", "brown", "black" ]
                }
            },
            "scale-x": {
                "labels": ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                'max-items': 20,
                // label: {
                // text: "Trading Day"
                // },
                // item: {
                // 'font-size':10,
                // 'font-family': "Georgia",
                // 'font-color': "red",
                // 'border-width': 1,
                // 'border-color': "red",
                // 'background-color': "#ffe6e6",
                // padding: "5%",
                // angle:-30
                // }
            },
            "scale-y": {
                // "progression":"log",
                "log-base": 5,
                "thousands-separator": ",",
                "short": true
            },
            "series": [{
                    "type": "bar",
                    "values": conData,
                    "text": "Consulta Externa"
                },
                {
                    "type": "bar",
                    "values": emedata,
                    "text": "Emergencia"
                },
                {
                    "type": "bar",
                    "values": extdata,
                    "text": "Extramural"
                },
                {
                    "type": "line",
                    "values": totdata,
                    "text": "Total"
                },
                {
                    "type": "line",
                    "values": avgdata,
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
    <!-- Segundo grafico -->
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
                "text": "Atencion Curativa"
            },
            "legend": {
                "layout": "1x3", //row x column
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
                    "speed": 1.5 // Velocidad de la animacion
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
                    "values": [sumcon],
                    // "background-color":"#cc0000",
                    "text": "Consulta Externa"
                },
                {
                    "values": [sumeme],
                    // "background-color":"#ff3300",
                    "text": "Emergencia"
                },
                {
                    "values": [sumext],
                    // "background-color":"#ff6600",
                    "text": "Extramural"
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
    <!-- Tercer Grafico -->
    <script>
    let initState = null; // Used later to store the chart state before changing the data
let store = { // Data store
  mathworks: [['matlab', 1.71], ['matlab plot', 0.33], ['matlab download', 0.25], ['plot matlab', 0.22], ['matlab online', 0.2]],
  ansys: [['ansys', 12.06], ['ansys student', 3], ['ansys fluent', 2.79], ['fluent', 2.66], ['ansys customer portal', 1.73]],
  arenasimulation: [['arena software', 20.01], ['arena simulation', 15.43], ['arena', 6.88], ['rockwell arena', 3.38], ['arena download', 2.55]],
  omnetpp: [['omnet', 19.29], ['inet', 11.04], ['omnet tutorial', 5.3], ['omnet download', 3.64], ['omnet tutorial for beginners ...', 2.69]],
  promodel: [['promodel', 12.63], ['gsa ebuy', 9.83], ['process simulator', 4.9], ['promodel corporation', 4.47, ['promodel download', 2.54]]]
};
let bgColors = ['#1976d2', '#424242', '#388e3c', '#ffa000', '#7b1fa2']; // mathworks, ansys, arenasimulation, omnetpp, promodel
let chartConfigg = {
  type: 'bar',
  theme: 'classic',
  globals: {
    fontFamily: 'Helvetica'
  },
  backgroundColor: 'white',
  title: {
    text: 'Atencion Curativa: por Sibasis / Establecimientos',
    backgroundColor: 'white',
    color: '#606060',
    "adjust-layout": true
  },
  subtitle: {
    text: 'Haz click en las columnas para despelgar la informacion de los Sibasis',
    color: '#606060',
    "adjust-layout": true
  },
  plot: {
    // barWidth: '200rem',
    hoverState: {
      border: "2px solid #ffff00"
    },
    tooltip: {
      visible: false
    },
    valueBox: {
      text: '%v Consultas',
      color: '#606060',
      textDecoration: 'underline'
    },
    animation: {
      effect: 'ANIMATION_EXPAND_HORIZONTAL'
    },
    cursor: 'hand',
    dataBrowser: [
      '<span style=\'font-weight:bold;color:#1976d2;\'>Mathworks.com</span>',
      '<span style=\'font-weight:bold;color:#424242;\'>Ansys.com</span>',
      '<span style=\'font-weight:bold;color:#388e3c;\'>Arenasimulation.com</span>',
      '<span style=\'font-weight:bold;color:#ffa000;\'>Omnetpp.org</span>',
      '<span style=\'font-weight:bold;color:#7b1fa2;\'>Promodel.com</span>'
    ],
    rules: [
      {
        backgroundColor: '#1976d2',
        rule: '%i==0'
      },
      {
        backgroundColor: '#424242',
        rule: '%i==1'
      },
      {
        backgroundColor: '#388e3c',
        rule: '%i==2'
      },
      {
        backgroundColor: '#ffa000',
        rule: '%i==3'
      },
      {
        backgroundColor: '#7b1fa2',
        rule: '%i==4'
      },
      {
        backgroundColor: '#c2185b',
        rule: '%i==5'
      }
    ]
  },
  scaleX: {
    values: Sibasis,
    'max-items': 60,
    guide: {
      visible: false
    },
    item: {
      color: '#606060',
      
    },
    lineColor: '#C0D0E0',
    lineWidth: '1px',
    tick: {
      lineColor: '#C0D0E0',
      lineWidth: '1px'
    }
  },
  // scaleY: {
  //   guide: {
  //     lineStyle: 'solid'
  //   },
  //   item: {
  //     color: '#606060'
  //   },
  //   lineColor: 'none',
  //   tick: {
  //     lineColor: 'none'
  //   }
  // },
  crosshairY: {
    lineColor: 'red',
    lineWidth: '1px',
    marker: {
      visible: true
    },
  },
  crosshairX: {
    lineColor: 'none',
    lineWidth: '0px',
    marker: {
      visible: false
    },

    // Este bloque de codigo realiza que cada barra tenga su leyenda sobre el.
    // plotLabel: {
    //   text: '%serie: %v Consultas',
    //   padding: '8px',
    //   alpha: 0.9,
    //   backgroundColor: 'white',
    //   borderRadius: '4px',
    //   borderWidth: '3px',
    //   callout: false,
    //   // calloutPosition: 'top',
    //   color: '#606060',
    //   fontSize: '12px',
    //   multiple: true,
    //   offsetY: '0px',
    //   // placement: 'top-out',
    //   rules: [
    //     {
    //       borderColor: '#1976d2',
    //       rule: '%i==0'
    //     },
    //     {
    //       borderColor: '#424242',
    //       rule: '%i==1'
    //     },
    //     {
    //       borderColor: '#388e3c',
    //       rule: '%i==2'
    //     },
    //     {
    //       borderColor: '#ffa000',
    //       rule: '%i==3'
    //     },
    //     {
    //       borderColor: '#7b1fa2',
    //       rule: '%i==4'
    //     },
    //     {
    //       borderColor: '#c2185b',
    //       rule: '%i==5'
    //     }
    //   ],
    //   shadow: false
    // },
    scaleLabel: {
      visible: false
    }
  },
  series: [
    {
      values: Sibas
    }
  ]
};
// Bloque de codigo que especifica que se ejecuta si la region es igual 1
<?php if($reg == 1): ?>
  let updateChart = (p) => {
  initState = zingchart.exec(p.id, 'getdata'); // Gets the state of the chart when the node was clicked
  let update = null;
  switch (p.nodeindex) {
  case 0:
    let Estas1 = <?php echo json_encode($estas1); ?>; 
    let sum_ene1 = <?php echo json_encode($sum_ene1); ?>; 
    let sum_feb1 = <?php echo json_encode($sum_feb1); ?>; 
    let sum_mar1 = <?php echo json_encode($sum_mar1); ?>; 
    let sum_abr1 = <?php echo json_encode($sum_abr1); ?>; 
    let sum_may1 = <?php echo json_encode($sum_may1); ?>; 
    let sum_jun1 = <?php echo json_encode($sum_jun1); ?>; 
    let sum_jul1 = <?php echo json_encode($sum_jul1); ?>; 
    let sum_ago1 = <?php echo json_encode($sum_ago1); ?>; 
    let sum_sep1 = <?php echo json_encode($sum_sep1); ?>; 
    let sum_oct1 = <?php echo json_encode($sum_oct1); ?>; 
    let sum_nov1 = <?php echo json_encode($sum_nov1); ?>; 
    let sum_dic1 = <?php echo json_encode($sum_dic1); ?>; 
    newValues1 = sum_ene1;
    newValues2 = sum_feb1;
    newValues3 = sum_mar1;
    newValues4 = sum_abr1;
    newValues5 = sum_may1;
    newValues6 = sum_jun1;
    newValues7 = sum_jul1;
    newValues8 = sum_ago1;
    newValues9 = sum_sep1;
    newValues10 = sum_oct1;
    newValues11 = sum_nov1;
    newValues12 = sum_dic1;
    newxscale = Estas1;
    update = true;
    break;
  case 1:
    let Estas2 = <?php echo json_encode($estas2); ?>;
    let sum_ene2 = <?php echo json_encode($sum_ene2); ?>; 
    let sum_feb2 = <?php echo json_encode($sum_feb2); ?>; 
    let sum_mar2 = <?php echo json_encode($sum_mar2); ?>; 
    let sum_abr2 = <?php echo json_encode($sum_abr2); ?>; 
    let sum_may2 = <?php echo json_encode($sum_may2); ?>; 
    let sum_jun2 = <?php echo json_encode($sum_jun2); ?>; 
    let sum_jul2 = <?php echo json_encode($sum_jul2); ?>; 
    let sum_ago2 = <?php echo json_encode($sum_ago2); ?>; 
    let sum_sep2 = <?php echo json_encode($sum_sep2); ?>; 
    let sum_oct2 = <?php echo json_encode($sum_oct2); ?>; 
    let sum_nov2 = <?php echo json_encode($sum_nov2); ?>; 
    let sum_dic2 = <?php echo json_encode($sum_dic2); ?>; 
    newValues1 = sum_ene2;
    newValues2 = sum_feb2;
    newValues3 = sum_mar2;
    newValues4 = sum_abr2;
    newValues5 = sum_may2;
    newValues6 = sum_jun2;
    newValues7 = sum_jul2;
    newValues8 = sum_ago2;
    newValues9 = sum_sep2;
    newValues10 = sum_oct2;
    newValues11 = sum_nov2;
    newValues12 = sum_dic2;
    newxscale = Estas2;
    update = true;
    break;
  case 2:
    let Estas3 = <?php echo json_encode($estas3); ?>;
    let sum_ene3 = <?php echo json_encode($sum_ene3); ?>; 
    let sum_feb3 = <?php echo json_encode($sum_feb3); ?>; 
    let sum_mar3 = <?php echo json_encode($sum_mar3); ?>; 
    let sum_abr3 = <?php echo json_encode($sum_abr3); ?>; 
    let sum_may3 = <?php echo json_encode($sum_may3); ?>; 
    let sum_jun3 = <?php echo json_encode($sum_jun3); ?>; 
    let sum_jul3 = <?php echo json_encode($sum_jul3); ?>; 
    let sum_ago3 = <?php echo json_encode($sum_ago3); ?>; 
    let sum_sep3 = <?php echo json_encode($sum_sep3); ?>; 
    let sum_oct3 = <?php echo json_encode($sum_oct3); ?>; 
    let sum_nov3 = <?php echo json_encode($sum_nov3); ?>; 
    let sum_dic3 = <?php echo json_encode($sum_dic3); ?>; 
    newValues1 = sum_ene3;
    newValues2 = sum_feb3;
    newValues3 = sum_mar3;
    newValues4 = sum_abr3;
    newValues5 = sum_may3;
    newValues6 = sum_jun3;
    newValues7 = sum_jul3;
    newValues8 = sum_ago3;
    newValues9 = sum_sep3;
    newValues10 = sum_oct3;
    newValues11 = sum_nov3;
    newValues12 = sum_dic3;
    newxscale = Estas3;
    update = true;
    break;
  }
  // Bloque de codigo que especifica que se ejecuta si la region es igual 2
<?php elseif($reg == 2): ?>
  let updateChart = (p) => {
  initState = zingchart.exec(p.id, 'getdata'); // Gets the state of the chart when the node was clicked
  let newValues = null;
  let update = null;
  switch (p.nodeindex) {
  case 0:
    let Estas1 = <?php echo json_encode($estas1); ?>; 
    let sum_ene1 = <?php echo json_encode($sum_ene1); ?>; 
    let sum_feb1 = <?php echo json_encode($sum_feb1); ?>; 
    let sum_mar1 = <?php echo json_encode($sum_mar1); ?>; 
    let sum_abr1 = <?php echo json_encode($sum_abr1); ?>; 
    let sum_may1 = <?php echo json_encode($sum_may1); ?>; 
    let sum_jun1 = <?php echo json_encode($sum_jun1); ?>; 
    let sum_jul1 = <?php echo json_encode($sum_jul1); ?>; 
    let sum_ago1 = <?php echo json_encode($sum_ago1); ?>; 
    let sum_sep1 = <?php echo json_encode($sum_sep1); ?>; 
    let sum_oct1 = <?php echo json_encode($sum_oct1); ?>; 
    let sum_nov1 = <?php echo json_encode($sum_nov1); ?>; 
    let sum_dic1 = <?php echo json_encode($sum_dic1); ?>; 
    newValues1 = sum_ene1;
    newValues2 = sum_feb1;
    newValues3 = sum_mar1;
    newValues4 = sum_abr1;
    newValues5 = sum_may1;
    newValues6 = sum_jun1;
    newValues7 = sum_jul1;
    newValues8 = sum_ago1;
    newValues9 = sum_sep1;
    newValues10 = sum_oct1;
    newValues11 = sum_nov1;
    newValues12 = sum_dic1;
    newxscale = Estas1;
    update = true;
    break;
  case 1:
    let Estas2 = <?php echo json_encode($estas2); ?>;
    let sum_ene2 = <?php echo json_encode($sum_ene2); ?>; 
    let sum_feb2 = <?php echo json_encode($sum_feb2); ?>; 
    let sum_mar2 = <?php echo json_encode($sum_mar2); ?>; 
    let sum_abr2 = <?php echo json_encode($sum_abr2); ?>; 
    let sum_may2 = <?php echo json_encode($sum_may2); ?>; 
    let sum_jun2 = <?php echo json_encode($sum_jun2); ?>; 
    let sum_jul2 = <?php echo json_encode($sum_jul2); ?>; 
    let sum_ago2 = <?php echo json_encode($sum_ago2); ?>; 
    let sum_sep2 = <?php echo json_encode($sum_sep2); ?>; 
    let sum_oct2 = <?php echo json_encode($sum_oct2); ?>; 
    let sum_nov2 = <?php echo json_encode($sum_nov2); ?>; 
    let sum_dic2 = <?php echo json_encode($sum_dic2); ?>; 
    newValues1 = sum_ene2;
    newValues2 = sum_feb2;
    newValues3 = sum_mar2;
    newValues4 = sum_abr2;
    newValues5 = sum_may2;
    newValues6 = sum_jun2;
    newValues7 = sum_jul2;
    newValues8 = sum_ago2;
    newValues9 = sum_sep2;
    newValues10 = sum_oct2;
    newValues11 = sum_nov2;
    newValues12 = sum_dic2;
    newxscale = Estas2;
    update = true;
    break;
  }
  // Bloque de codigo que especifica que se ejecuta si la region es igual o mayor que 3
<?php elseif($reg >= 3): ?>
    let updateChart = (p) => {
        initState = zingchart.exec(p.id, 'getdata'); // Gets the state of the chart when the node was clicked
        let newValues = null;
        let update = null;
        switch (p.nodeindex) {
        case 0:
          let Estas1 = <?php echo json_encode($estas1); ?>; 
          let sum_ene1 = <?php echo json_encode($sum_ene1); ?>; 
          let sum_feb1 = <?php echo json_encode($sum_feb1); ?>; 
          let sum_mar1 = <?php echo json_encode($sum_mar1); ?>; 
          let sum_abr1 = <?php echo json_encode($sum_abr1); ?>; 
          let sum_may1 = <?php echo json_encode($sum_may1); ?>; 
          let sum_jun1 = <?php echo json_encode($sum_jun1); ?>; 
          let sum_jul1 = <?php echo json_encode($sum_jul1); ?>; 
          let sum_ago1 = <?php echo json_encode($sum_ago1); ?>; 
          let sum_sep1 = <?php echo json_encode($sum_sep1); ?>; 
          let sum_oct1 = <?php echo json_encode($sum_oct1); ?>; 
          let sum_nov1 = <?php echo json_encode($sum_nov1); ?>; 
          let sum_dic1 = <?php echo json_encode($sum_dic1); ?>; 
          newValues1 = sum_ene1;
          newValues2 = sum_feb1;
          newValues3 = sum_mar1;
          newValues4 = sum_abr1;
          newValues5 = sum_may1;
          newValues6 = sum_jun1;
          newValues7 = sum_jul1;
          newValues8 = sum_ago1;
          newValues9 = sum_sep1;
          newValues10 = sum_oct1;
          newValues11 = sum_nov1;
          newValues12 = sum_dic1;
          newxscale = Estas1;
          update = true;
          break;
        case 1:
          let Estas2 = <?php echo json_encode($estas2); ?>;
          let sum_ene2 = <?php echo json_encode($sum_ene2); ?>; 
          let sum_feb2 = <?php echo json_encode($sum_feb2); ?>; 
          let sum_mar2 = <?php echo json_encode($sum_mar2); ?>; 
          let sum_abr2 = <?php echo json_encode($sum_abr2); ?>; 
          let sum_may2 = <?php echo json_encode($sum_may2); ?>; 
          let sum_jun2 = <?php echo json_encode($sum_jun2); ?>; 
          let sum_jul2 = <?php echo json_encode($sum_jul2); ?>; 
          let sum_ago2 = <?php echo json_encode($sum_ago2); ?>; 
          let sum_sep2 = <?php echo json_encode($sum_sep2); ?>; 
          let sum_oct2 = <?php echo json_encode($sum_oct2); ?>; 
          let sum_nov2 = <?php echo json_encode($sum_nov2); ?>; 
          let sum_dic2 = <?php echo json_encode($sum_dic2); ?>; 
          newValues1 = sum_ene2;
          newValues2 = sum_feb2;
          newValues3 = sum_mar2;
          newValues4 = sum_abr2;
          newValues5 = sum_may2;
          newValues6 = sum_jun2;
          newValues7 = sum_jul2;
          newValues8 = sum_ago2;
          newValues9 = sum_sep2;
          newValues10 = sum_oct2;
          newValues11 = sum_nov2;
          newValues12 = sum_dic2;
          newxscale = Estas2;
          update = true;
          break;
        case 2:
          let Estas3 = <?php echo json_encode($estas3); ?>;
          let sum_ene3 = <?php echo json_encode($sum_ene3); ?>; 
          let sum_feb3 = <?php echo json_encode($sum_feb3); ?>; 
          let sum_mar3 = <?php echo json_encode($sum_mar3); ?>; 
          let sum_abr3 = <?php echo json_encode($sum_abr3); ?>; 
          let sum_may3 = <?php echo json_encode($sum_may3); ?>; 
          let sum_jun3 = <?php echo json_encode($sum_jun3); ?>; 
          let sum_jul3 = <?php echo json_encode($sum_jul3); ?>; 
          let sum_ago3 = <?php echo json_encode($sum_ago3); ?>; 
          let sum_sep3 = <?php echo json_encode($sum_sep3); ?>; 
          let sum_oct3 = <?php echo json_encode($sum_oct3); ?>; 
          let sum_nov3 = <?php echo json_encode($sum_nov3); ?>; 
          let sum_dic3 = <?php echo json_encode($sum_dic3); ?>; 
          newValues1 = sum_ene3;
          newValues2 = sum_feb3;
          newValues3 = sum_mar3;
          newValues4 = sum_abr3;
          newValues5 = sum_may3;
          newValues6 = sum_jun3;
          newValues7 = sum_jul3;
          newValues8 = sum_ago3;
          newValues9 = sum_sep3;
          newValues10 = sum_oct3;
          newValues11 = sum_nov3;
          newValues12 = sum_dic3;
          newxscale = Estas3;
          update = true;
          break;
        case 3:
          let Estas4 = <?php echo json_encode($estas4); ?>;
          let sum_ene4 = <?php echo json_encode($sum_ene4); ?>; 
          let sum_feb4 = <?php echo json_encode($sum_feb4); ?>; 
          let sum_mar4 = <?php echo json_encode($sum_mar4); ?>; 
          let sum_abr4 = <?php echo json_encode($sum_abr4); ?>; 
          let sum_may4 = <?php echo json_encode($sum_may4); ?>; 
          let sum_jun4 = <?php echo json_encode($sum_jun4); ?>; 
          let sum_jul4 = <?php echo json_encode($sum_jul4); ?>; 
          let sum_ago4 = <?php echo json_encode($sum_ago4); ?>; 
          let sum_sep4 = <?php echo json_encode($sum_sep4); ?>; 
          let sum_oct4 = <?php echo json_encode($sum_oct4); ?>; 
          let sum_nov4 = <?php echo json_encode($sum_nov4); ?>; 
          let sum_dic4 = <?php echo json_encode($sum_dic4); ?>; 
          newValues1 = sum_ene4;
          newValues2 = sum_feb4;
          newValues3 = sum_mar4;
          newValues4 = sum_abr4;
          newValues5 = sum_may4;
          newValues6 = sum_jun4;
          newValues7 = sum_jul4;
          newValues8 = sum_ago4;
          newValues9 = sum_sep4;
          newValues10 = sum_oct4;
          newValues11 = sum_nov4;
          newValues12 = sum_dic4;
          newxscale = Estas4;
          update = true;
          break;
        case 4:
            update = false; // We don't want to allow drilldown for unknown
            break;
        }
    <?php endif ?>
  
  
  if (update) {
    zingchart.unbind(p.id, 'node_click'); // Disable node_click for second level
    zingchart.exec(p.id, 'modify', {
      update: false, // Making multiple changes, queue these changes
      data: {
        // crosshairX: {
        //   plotLabel: {
        //     text: '%v% of total',
        //     borderColor: bgColors[p.nodeindex],
        //     rules: []
        //   }
        // },
        legend: {
            "layout": "2x6", //row x column
            "align": "center",
            "vertical-align": "bottom",
            // "x":"23.5%",
            // "y":"3%",
            shadow: false,
            toggleAction: 'remove',
        },
        "plotarea": {
         margin: 'dynamic'
         
            },
        plot: {
          // barWidth: '50px',
          hoverState: {
          alpha: 1,
          backgroundColor: '#212339'
          },
          animation: {
          delay: 500,
          effect: 'ANIMATION_EXPAND_TOP',
          method: 'ANIMATION_LINEAR',
          sequence: 'ANIMATION_BY_PLOT',
          speed: '700'
        },
          backgroundColor: bgColors[p.nodeindex],
          cursor: null,
          rules: [],
          stacked: true,
          'stack-type': 'normal'
        },
        scaleX: {
          values: newxscale,
          item:{
            fontAngle: -48,
            fontFamily: 'Arial',
            fontSize: '10px',
            offsetX: '5px'
          }
        },
        series: [{
                text: 'Enero',
                values: newValues1,
                'background-color': "#55bd9c",
            },
            {
                text: 'Febrero',
                values: newValues2,
                'background-color': "#3498db"
            },
            {
                text: 'Marzo',
                values: newValues3,
                'background-color': "#e67e2e"
            },
            {
                text: 'Abril',
                values: newValues4,
                'background-color': " #f7dc6f ",
            },
            {
                text: 'Mayo',
                values: newValues5,
                'background-color': " #d35400"
            },
            {
                text: 'Junio',
                values: newValues6,
                'background-color': " #138d75"
            },
            {
                text: 'Julio',
                values: newValues7,
                'background-color': " #7d3c98",
            },
            {
                text: 'Agosto',
                values: newValues8,
                'background-color': " #ec7063 "
            },
            {
                text: 'Septiembre',
                values: newValues9,
                'background-color': " #154360"
            },
            {
                text: 'Octubre',
                values: newValues10,
                'background-color': " #707b7c",
            },
            {
                text: 'Noviembre',
                values: newValues11,
                'background-color': "#9a7d0a"
            },
            {
                text: 'Diciembre',
                values: newValues12,
                'background-color': " #abb2b9"
            },
        ]
      }
    });
    // zingchart.exec(p.id, 'setseriesvalues', {// Replaces all values at plotindex 0
    //   update: false, // Queue these, too
    //   plotindex: 0,
    //   values: newValues
    // });
    zingchart.exec(p.id, 'update'); // Push queued changes
    zingchart.bind(p.id, 'animation_end', () => { // When the animation ends...
      zingchart.exec(p.id, 'addobject', {// ...add a back button
        type: 'shape',
        data: {
          type: 'rectangle',
          id: 'back_btn',
          backgroundColor: '#ffffff #f6f6f6',
          borderColor: '#888',
          borderWidth: '1px',
          cursor: 'hand',
          hoverState: {
            backgroundColor: '#1976D2 #ffffff',
            borderColor: '#57a2ff',
            fillAngle: -180
          },
          label: {
            text: '< Back',
            color: '#606060'
          },
          width: '70px',
          height: '20px',
          x: '80%',
          y: '3%'
        }
      });
    });
  }
};
 
zingchart.render({
  id: 'myChart2',
  data: chartConfigg,
  height: '150%',
  width: '100%'
});
 
zingchart.bind('myChart2', 'node_click', updateChart);
 
// Listen for back button click
zingchart.bind('myChart2', 'shape_click', (p) => {
  zingchart.unbind(p.id, 'animation_end');
  if (p.shapeid == 'back_btn') {
    // Set the data back to the state it was in when the node was clicked
    zingchart.exec(p.id, 'setdata', {
      data: initState
    });
    zingchart.bind(p.id, 'node_click', updateChart);
  }
});
    </script>
</body>
</html>
=======
        <li> <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Healingcares', 'action' => 'index?yir=' . $yer)); ?></li>
    </ol>
</div>

<center>
    <div class="chart">
        <h2>Graficos</h2>

        <div id="combowrapper" style="display: block; width:90%; margin-bottom: 20px;"></div>
        <div class="clear"></div>

        <center><?php echo $this->Highcharts->render($chartName); ?></center>

    </div>
</center>

<div class="padre">
    <div class="hijo">
        <center>
            <div class="chart">
                <div id="pie3dwrapper" style="display: block; width:90%; margin-bottom: 20px;"></div>
                <div class="clear"></div>

                <?php echo $this->Highcharts->render($chartName2); ?>

            </div>
        </center>
    </div>
    <div class="hijo">
        <center>
            <div class="chart">
                <h4>Line Chart</h4>

                <div id="linewrapper" style="display: block; width:90%; margin-bottom: 20px;"></div>
                <div class="clear"></div>

                <?php echo $this->Highcharts->render($chartName4); ?>

            </div>
        </center>
    </div>
</div>

<center>
    <div class="chart">
        <div id="columnwrapper" style="display: block; width:90%; margin-bottom: 20px;"></div>
        <div class="clear"></div>

        <?php echo $this->Highcharts->render($chartName3); ?>

    </div>
</center>
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
