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
	<div class="maternalhcxestablishments form">
		<?php echo $this->Form->create('Maternalhcxestablishment'); ?>
		<fieldset>
			<div>
				<legend>
					<center><?php echo __('Editar Atencion Materna'); ?></center>
				</legend>
			</div>
			<div class="padre">
				<div class="hijo">
					<label>
						<h4>
							<center>Inscripcion</center>
						</h4>
					</label>
					<?php
					echo $this->Form->input('id');
					// echo $this->Form->input('establishments_id');
					// echo $this->Form->input('sibases_id');
					// echo $this->Form->input('regions_id');
					echo $this->Form->input('ins_january', array('label' => 'Enero'));
					echo $this->Form->input('ins_february', array('label' => 'Febrero'));
					echo $this->Form->input('ins_march', array('label' => 'Marzo'));
					echo $this->Form->input('ins_april', array('label' => 'Abril'));
					echo $this->Form->input('ins_may', array('label' => 'Mayo'));
					echo $this->Form->input('ins_june', array('label' => 'Junio'));
					echo $this->Form->input('ins_july', array('label' => 'Julio'));
					echo $this->Form->input('ins_august', array('label' => 'Agosto'));
					echo $this->Form->input('ins_september', array('label' => 'Septiembre'));
					echo $this->Form->input('ins_october', array('label' => 'Octubre'));
					echo $this->Form->input('ins_november', array('label' => 'Noviembre'));
					echo $this->Form->input('ins_december', array('label' => 'Diciembre'));
					?>
				</div>
				<div class="hijo">
					<label>
						<h4>
							<center>Control</center>
						</h4>
					</label>
					<?php
					// los campos de control infatil deben ir aqui 
					echo $this->Form->input('id');
					// echo $this->Form->input('establishments_id');
					// echo $this->Form->input('sibases_id');
					// echo $this->Form->input('regions_id');
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