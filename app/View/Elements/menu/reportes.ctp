<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-line-chart"></span> Reportes <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li class="dropdown-header">Reportes de sistema</li>
        <li><a href="<?= $this->base; ?>/bitacoras/index"><span class="fa fa-history"></span> Bitacora</a></li>
        <li><a href="<?= $this->base; ?>/presupuestos/boletavista"><span class="fa fa-eye"></span> Bolestas Vistas</a></li>
        <li><a href="<?= $this->base; ?>/coberturaestablecimientos/reporteadmin"><span class="fa fa-life-bouy"></span> Cobertura de Establecimiento</a></li>
        <li><a href="<?= $this->base; ?>/coberturaestablecimientos/cobertura_vacaciones"><span class="fa fa-life-ring"></span> Cobertura de Vacaciones</a></li>
        <li><a href="<?= $this->base; ?>/solicitudConstancias/"><span class="fa fa-file-pdf-o"></span> Constancias</a></li>

        <li role="separator" class="divider"></li>
        <li class="dropdown-header">Impresion de documentos</li>
        <li class='has-sub'><a href='<?= $this->base; ?>/presupuestos/vistaprevia'><span class="fa fa-print"></span><span> Boleta Electronica</span></a></li>
        <li class='has-sub'><a href='<?= $this->base; ?>/presupuestos/verrenta'><span class="fa fa-print"></span><span> Carta de Retencion</span></a></li>
        <li class='has-sub'><a href='<?= $this->base; ?>/mdeportivaCompetidors/reportes'><span class="fa fa-list"></span><span> Mañana Deportiva</span></a></li>
        <li><a href="<?= $this->base; ?>/evaluacionGenerals/index"><span class="fa fa-area-chart"></span> Evaluación Desempeño</a></li>

    </ul>
</li>
