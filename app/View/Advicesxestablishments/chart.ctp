<!DOCTYPE html>
<html>
<div class="col-lg-12 col-xs-12 col-sm-12">
  <ol class="breadcrumb">
    <li> <span class="fa fa-undo"></span> <?php echo $this->Html->link(__('Regresar'), array('action' => 'index', $reg, '?yir=' . $yer)); ?></li>
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
      min-height: 530px;
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
  <!-- <br><br>
  <center>
    <div id="myChart3"></div>
  </center> -->

  <br><br>
  <center>
    <div id="myChart2" class="chart--container"><a class="zc-ref" href="https://www.zingchart.com/">Powered by ZingChart</a></div>
  </center>


  <script type="text/javascript">
    var yearData = <?php echo json_encode($mon); ?>;
    var Sibasis = <?php echo json_encode($siba); ?>;
    var Sibas = <?php echo json_encode($sibas); ?>;
    var Estas = <?php echo json_encode($estas); ?>;
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
        "layout": "1x1", //row x column
        "align": "center",
        "vertical-align": "bottom",
        // "x":"23.5%",
        // "y":"92%",
      },
      "title": {
        "text": "Consejerias"
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
        'max-items': 12,
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
        "values": yearData,
        "text": "Consejerias"
      }, ]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      defaults: myTheme
    });
  </script>
  <!-- Segundo Grafico *****************************************************************************-->
  <script>
    var myConfige = {
      type: "hbar",
      scaleX: {
        values: Estas,
        'max-items': 60,
        guide: {
          visible: false
        },
        item: {
          fontAngle: -48,
          fontColor: '#9a9cab',
          fontFamily: 'Arial',
          fontSize: '10px',
          offsetX: '5px'
        },
        itemsOverlap: true,
        label: {
          text: 'SERVER BUILDING LOCATION',
          paddingTop: '30px',
          fontColor: '#fff',
          fontFamily: 'Arial',
          fontSize: '10px',
          fontWeight: 'normal'
        },
        lineColor: '#53566f',
        tick: {
          lineColor: '#53566f'
        }
      },
      plot: {
        stacked: true
      },
      series: [{

          values: [50, 15, 45, 33, 34, 43, 32, 15, 30],
          stack: 1
        }
        // {
        //   values: [5, 30, 21, 18, 59, 50, 28, 33],
        //   stack: 1
        // },
        // {
        //   values: [30, 5, 18, 21, 33, 41, 29, 15],
        //   stack: 1
        // }
      ]
    };

    zingchart.render({
      id: 'myChart3',
      data: myConfige,
      height: "100%",
      width: "100%"
    });
  </script>
  <!-- Tercer grafico ****************************************************************************** -->
  <script>
    let initState = null; // Used later to store the chart state before changing the data
    let store = { // Data store

      mathworks: [
        ['UCSFI San Salvador SS Barrios', 3780],
        ['UCSFI Mejicanos SS Zacamil', 2434],
        ['UCSFI Mejicanos SS "Dr. Hugo Morán Quijada"', 700],
        ['UCSFI Cuscatancingo SS', 546],
        ['UCSFI San Salvador SS San Miguelito', 876],
        ['UCSFI San Salvador SS Concepción', 457],
        ['UCSFI Ciudad Delgado SS Hábitat Confien', 1500]

      ],

      ansys: [
        ['UCSFI Soyapango SS Unicentro', 345],
        ['UCSFI Ilopango SS', 2600],
        ['UCSFI Tonacatepeque SS Alta Vista', 3600],
        ['CAE San Martin SS', 1300]
      ],
      arenasimulation: [
        ['UCSFI San Salvador SS San Jacinto', 3400],
        ['UCSFI San Marcos SS', 456],
        ['UCSFI Panchimalco SS', 1800]
      ],
      omnetpp: [
        ['UCSFI Aguilares SS', 3450],
        ['UCSFI Apopa SS', 2500],
        ['UCSFI Tonacatepeque SS', 4600],
        ['UCSFI Apopa SS Popotlán', 2500],
        ['UCSFI El Paisnal SS', 1200],
        ['UCSFI Guazapa SS', 670]
      ]
    };
    let bgColors = ['#1976d2', '#424242', '#388e3c', '#ffa000', '#7b1fa2']; // mathworks, ansys, arenasimulation, omnetpp, promodel

    let chartConfig = {
      type: 'bar',
      theme: 'classic',
      globals: {
        fontFamily: 'Helvetica'
      },
      backgroundColor: 'white',
      title: {
        text: 'Consejerias: por Sibasis / Establecimientos',
        backgroundColor: 'white',
        color: '#606060'
      },
      subtitle: {

      },
      plot: {
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
          'Mathwork.com',
          'Ansyssss.com',
          'Arenasimulation.com',
          'Omnetpp.org',
          'Promodel.com'
        ],
        rules: [{
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
          color: '#606060'
        },
        lineColor: '#C0D0E0',
        lineWidth: '1px',
        tick: {
          lineColor: '#C0D0E0',
          lineWidth: '1px'
        }
      },
      scaleY: {
        guide: {
          lineStyle: 'solid'
        },
        item: {
          color: '#606060'
        },
        lineColor: 'none',
        tick: {
          lineColor: 'none'
        }
      },
      crosshairX: {
        lineColor: 'none',
        lineWidth: '0px',
        marker: {
          visible: false
        },
        plotLabel: {
          text: ' %v Consultas',
          padding: '8px',
          alpha: 0.9,
          backgroundColor: 'white',
          borderRadius: '4px',
          borderWidth: '3px',
          callout: true,
          calloutPosition: 'bottom',
          color: '#606060',
          fontSize: '12px',
          multiple: true,
          offsetY: '-20px',
          placement: 'node-top',
          rules: [{
              borderColor: '#1976d2',
              rule: '%i==0'
            },
            {
              borderColor: '#424242',
              rule: '%i==1'
            },
            {
              borderColor: '#388e3c',
              rule: '%i==2'
            },
            {
              borderColor: '#ffa000',
              rule: '%i==3'
            },
            {
              borderColor: '#7b1fa2',
              rule: '%i==4'
            },
            {
              borderColor: '#c2185b',
              rule: '%i==5'
            }
          ],
          shadow: false
        },
        scaleLabel: {
          visible: false
        }
      },
      series: [{
        values: Sibas
      }]
    };

    let updateChart = (p) => {
      initState = zingchart.exec(p.id, 'getdata'); // Gets the state of the chart when the node was clicked
      let newValues = null;
      let update = null;
      switch (p.nodeindex) {
        case 0:
          newValues = store['mathworks'];
          update = true;
          break;
        case 1:
          newValues = store['ansys'];
          update = true;
          break;
        case 2:
          newValues = store['arenasimulation'];
          update = true;
          break;
        case 3:
          newValues = store['omnetpp'];
          update = true;
          break;
        case 4:
          newValues = store['promodel'];
          update = true;
          break;
        case 5:
          update = false; // We don't want to allow drilldown for unknown
          break;
      }

      if (update) {
        zingchart.unbind(p.id, 'node_click'); // Disable node_click for second level
        zingchart.exec(p.id, 'modify', {
          update: false, // Making multiple changes, queue these changes
          data: {
            crosshairX: {
              plotLabel: {
                text: '%v Consultas',
                borderColor: bgColors[p.nodeindex],
                rules: []
              }
            },
            plot: {
              backgroundColor: bgColors[p.nodeindex],
              cursor: null,
              rules: [],
              stacked: true
            },
            scaleX: {
              values: []
            },
            series: {

            }
          }
        });
        zingchart.exec(p.id, 'setseriesvalues', { // Replaces all values at plotindex 0
          update: false, // Queue these, too  
          plotindex: 0,
          values: newValues
        });
        zingchart.exec(p.id, 'update'); // Push queued changes
        zingchart.bind(p.id, 'animation_end', () => { // When the animation ends...
          zingchart.exec(p.id, 'addobject', { // ...add a back button
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
              y: '16%'
            }
          });
        });
      }
    };

    zingchart.render({
      id: 'myChart2',
      data: chartConfig,
      height: '100%',
      width: '100%',
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