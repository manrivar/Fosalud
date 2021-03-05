<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
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