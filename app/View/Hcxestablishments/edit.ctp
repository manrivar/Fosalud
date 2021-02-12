<div class="col-lg-12 col-xs-12 col-sm-12">
	<ol class="breadcrumb">
		<li><span class="glyphicon glyphicon-list"></span>
			<?php
			echo $this->Html->link(__('Regresar'), array('action' => 'index', $reg, '?yir=' . $yer));
			?>
		</li>
	</ol>
</div>

<div class="row">
	<div class="hcxestablishments form">
		<?php echo $this->Form->create('Hcxestablishment'); ?>
		<fieldset>
			<legend><?php echo __('Edit Hcxestablishment'); ?></legend>
			<div class="padre">
				<div class="hijo">
					<label>
						<h4>
							<center>Consulta Externa</center>
						</h4>
					</label>
					<?php
					echo $this->Form->input('id');
					echo $this->Form->input('establishments_id');
					echo $this->Form->input('sibases_id');
					echo $this->Form->input('regions_id');
					echo $this->Form->input('con_january', array('label' => 'Enero'));
					echo $this->Form->input('con_february', array('label' => 'Febrero'));
					echo $this->Form->input('con_march', array('label' => 'Marzo'));
					echo $this->Form->input('con_april', array('label' => 'Abril'));
					echo $this->Form->input('con_may', array('label' => 'Mayo'));
					echo $this->Form->input('con_june', array('label' => 'Junio'));
					echo $this->Form->input('con_july', array('label' => 'Julio'));
					echo $this->Form->input('con_august', array('label' => 'Agosto'));
					echo $this->Form->input('con_september', array('label' => 'Septiembre'));
					echo $this->Form->input('con_october', array('label' => 'Octubre'));
					echo $this->Form->input('con_november', array('label' => 'Noviembre'));
					echo $this->Form->input('con_december', array('label' => 'Diciembre'));
					?>
				</div>
				<div class="hijo">
					<label>
						<h4>
							<center>Emergencia</center>
						</h4>
					</label>
					<?php
					// los campos de control infatil deben ir aqui 
					echo $this->Form->input('id');
					echo $this->Form->input('establishments_id');
					echo $this->Form->input('sibases_id');
					echo $this->Form->input('regions_id');
					echo $this->Form->input('eme_january', array('label' => 'Enero'));
					echo $this->Form->input('eme_february', array('label' => 'Febrero'));
					echo $this->Form->input('eme_march', array('label' => 'Marzo'));
					echo $this->Form->input('eme_april', array('label' => 'Abril'));
					echo $this->Form->input('eme_may', array('label' => 'Mayo'));
					echo $this->Form->input('eme_june', array('label' => 'Junio'));
					echo $this->Form->input('eme_july', array('label' => 'Julio'));
					echo $this->Form->input('eme_august', array('label' => 'Agosto'));
					echo $this->Form->input('eme_september', array('label' => 'Septiembre'));
					echo $this->Form->input('eme_october', array('label' => 'Octubre'));
					echo $this->Form->input('eme_november', array('label' => 'Noviembre'));
					echo $this->Form->input('eme_december', array('label' => 'Diciembre'));
					?>
				</div>
				<div class="hijo">
					<label>
						<h4>
							<center>Extramural</center>
						</h4>
					</label>
					<?php
					echo $this->Form->input('id');
					echo $this->Form->input('establishments_id');
					echo $this->Form->input('sibases_id');
					echo $this->Form->input('regions_id');
					echo $this->Form->input('ext_january', array('label' => 'Enero'));
					echo $this->Form->input('ext_february', array('label' => 'Febrero'));
					echo $this->Form->input('ext_march', array('label' => 'Marzo'));
					echo $this->Form->input('ext_april', array('label' => 'Abril'));
					echo $this->Form->input('ext_may', array('label' => 'Mayo'));
					echo $this->Form->input('ext_june', array('label' => 'Junio'));
					echo $this->Form->input('ext_july', array('label' => 'Julio'));
					echo $this->Form->input('ext_august', array('label' => 'Agosto'));
					echo $this->Form->input('ext_september', array('label' => 'Septiembre'));
					echo $this->Form->input('ext_october', array('label' => 'Octubre'));
					echo $this->Form->input('ext_november', array('label' => 'Noviembre'));
					echo $this->Form->input('ext_december', array('label' => 'Diciembre'));
					?>
				</div>
			</div>
			<div>
				<button id="enviar" onclick="" class="btn-block btn-primary">Guardar</button>
			</div>
		</fieldset>
		<?php
		echo $this->Form->end();
		?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hcxestablishment.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Hcxestablishment.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Childhcxestablishments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Establishments'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sibases'), array('controller' => 'sibases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sibases'), array('controller' => 'sibases', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Regions'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
	</ul>
</div>