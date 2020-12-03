<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-line-chart"></span> Reportes <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li class="dropdown-header">Reportes de sistema</li>
        <li><a href="<?= $this->base; ?>/bitacoras/index"><span class="fa fa-history"></span> Bitacora</a></li>
		<li><a href="#"><span class="fa fa-line-chart"></span> Reporte de...</a></li>
        <li role="separator" class="divider"></li>
        <li class="dropdown-header">Impresion de documentos</li> 
        <li class='has-sub'><a href='#'><span class="fa fa-print"></span><span> Documento ...</span></a></li>
		<li class='has-sub'><a href='#'><span class="fa fa-print"></span><span> Documento 2 ...</span></a></li>

    </ul>
</li>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span> Administración de Sistema <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href = "<?php echo $this->base . '/menus/admon'; ?>"><span class="fa fa-list-alt"></span> Configuraciones</a></li>
    </ul>
</li>

