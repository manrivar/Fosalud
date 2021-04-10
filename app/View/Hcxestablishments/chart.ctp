<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li> <span class="fa fa-undo"></span> <?php  echo $this->Html->link(__('Regresar'), array('action' => 'index', $reg, '?yir=' . $yer)); ?></li>
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


        <center>
            <div class="chart">
                <div id="pie3dwrapper" style="display: block; width:90%; margin-bottom: 20px;"></div>
                <div class="clear"></div>

                <?php echo $this->Highcharts->render($chartName2); ?>

            </div>
        </center>

<center>
    <div class="chart">
        <div id="columnwrapper" style="display: block; width:90%; margin-bottom: 20px;"></div>
        <div class="clear"></div>

        <?php echo $this->Highcharts->render($chartName3); ?>

    </div>
</center>