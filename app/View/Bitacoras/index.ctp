
<p>&nbsp;</p>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12"><h2><?php echo __('Bitacora del Sistema'); ?></h2></div>
    <div class="col-lg-2 col-sm-12 col-xs-12 col-md-2"></div>
    <div class="col-lg-8 col-sm-12 col-xs-12 col-md-8">
        <form id="formulario" accept-charset="utf-8" method="post" id="buscarIndexForm" action="<?= $this->base; ?>/bitacoras/index">
            <div class="col-md-4">
                <?php echo $this->Form->input('busqueda',array('label'=>'Busqueda Por:','options'=>array(1=>'Usuario'),'empty'=>'Seleccione','default'=>$tipo));?>
            </div>
            <div class="col-md-8">
                <div class="input-group">
                    <input type="hidden" value="POST" name="_method">
                    <label>Nombre de Usuario</label>
                    <input type="text" class="form-control" id="q" name="q" autocomplete="off" value="<?= $q; ?>" placeholder="Nombre de Usuario">
                    <span class="input-group-btn">
                        <label>&nbsp;</label>
                        <button class="btn btn-default" onclick="window.formulario.submit();" type="button"><span class="glyphicon glyphicon-search"></span> Buscar</button>
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">&nbsp;</div>

<div class="col-lg-1 col-sm-12 col-xs-12 col-md-1"></div>

<div  class="col-lg-9 col-sm-12 col-xs-12 col-md-8">
    <table class="table table-responsive" >
        
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('fechahora_reg'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bitacoras as $bitacora): ?>
	<tr>
		<td><?php echo h($bitacora['Bitacora']['id']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['User']['nombre_usuario']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['User']['username']); ?>&nbsp;</td>
		<td><?php echo $this->Time->format($bitacora['Bitacora']['fechahora_reg'],'%d-%m-%Y %H:%M:%S'); ?>&nbsp;</td>

	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count}')
	));
	?>	</p>

	
           <nav>
            <ul class="pagination">
                <?php
		echo "<li>".$this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'))."</li>";
		echo "<li>".$this->Paginator->numbers(array('separator' => ''))."</li>";
		echo "<li>".$this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'))."<li>";
	?>
            </ul>
          </nav>
        
</div>

