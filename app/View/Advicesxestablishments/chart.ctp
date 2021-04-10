<!DOCTYPE html>
<html>
<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li> <span class="fa fa-undo"></span> <?php  echo $this->Html->link(__('Regresar'), array('action' => 'index', $reg, '?yir=' . $yer)); ?></li>
    </ol>
</div>
<head>
<?php
  echo $this->Html->script('zingchart/zingchart.min');
  echo $this->Html->script('zingchart/themes/tema.js');
  ?>
</head>
<body>
<pre>
<?php print_r($yearData); ?>
</pre>
    <center><h2>Graficos</h2></center>
    <!-- Chart Placement[2] -->
    
    <center><div id="myChart"></div></center>
    <br><br>
    <center><div id="pieChart"></div></center>  
    
    <script type="text/javascript">
        var yearData = <?php echo json_encode($yearData); ?>;
        
    </script>
    <script>
        // Render Method[3]
        var myConfig = {
        "type":"mixed",
        "legend":{
            "layout":"1x2", //row x column
            "align": "center",
            "vertical-align": "bottom",
            // "x":"23.5%",
            // "y":"92%",
        },
        "title":{
            "text":"Consejerias"
        },
        "plot":{
            "tooltip":{
            "text":"%t: %v Consultas",
            "thousands-separator":",",
            // "styles": [ "orange", "yellow", "green", "blue", "purple", "brown", "black" ]
            }
        },
        "scale-x":{
            "labels":["Enero","Febrero","Marzo","Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            'max-items':12,
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
        "scale-y":{
            "progression":"log",
            "log-base":10,
            "thousands-separator":",",
            "short":true
        },
        "series":[
            {
            "type":"bar",
            "values": yearData,
            "text": "Consejerias"  
            },
        ]
        };

        zingchart.render({
        id: 'myChart',
        data: myConfig,
        defaults: myTheme    
        });
    </script>

</body>
</html>