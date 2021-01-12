<?php 
	$regione_id = $regiones_id['Regione']['id']; 
?>

<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-list"></span> 
        	<?php 
        		echo $this->Html->link(__('Regresar'), array('action' => 'index', $regione_id)); 
        	?>
        </li>   
    </ol>
</div>

<div class="row">
	<div class="users col-lg-8 col-xs-12 col-sm-12 col-md-8">
		<?php 
			echo $this->Form->create('Acinfxesta'); 
		?>
		<fieldset class="form-group">
			<legend>
				<?php $atens = $aten['Establecimiento']['nombre_esta']; 
				echo $atens; ?>
			</legend>
			<div class = "padre">
			<div class = "hijo">
			<label><h4><center>Inscripcion</center></h4></label>
			<?php
				echo $this->Form->input('establecimientos_id', array('type' => 'hidden'));
				echo $this->Form->input('ins_enero', array('label' => 'Enero'));
				echo $this->Form->input('ins_febrero', array('label' => 'Febrero'));
				echo $this->Form->input('ins_marzo', array('label' => 'Marzo'));
				echo $this->Form->input('ins_abril', array('label' => 'Abril'));
				echo $this->Form->input('ins_mayo', array('label' => 'Mayo'));
				echo $this->Form->input('ins_junio', array('label' => 'Junio'));
				echo $this->Form->input('ins_julio', array('label' => 'Julio'));
				echo $this->Form->input('ins_agosto', array('label' => 'Agosto'));
				echo $this->Form->input('ins_septiembre', array('label' => 'Septiembre'));
				echo $this->Form->input('ins_octubre', array('label' => 'Octubre'));
				echo $this->Form->input('ins_noviembre', array('label' => 'Noviembre'));
				echo $this->Form->input('ins_diciembre', array('label' => 'Diciembre'));
			?>
			</div>
			<div class = "hijo">
			<label><h4><center>Control</center></h4></label>
			<?php
			// los campos de control infatil deben ir aqui 
				echo $this->Form->input('establecimientos_id', array('type' => 'hidden'));
				echo $this->Form->input('con_enero', array('label' => 'Enero'));
				echo $this->Form->input('con_febrero', array('label' => 'Febrero'));
				echo $this->Form->input('con_marzo', array('label' => 'Marzo'));
				echo $this->Form->input('con_abril', array('label' => 'Abril'));
				echo $this->Form->input('con_mayo', array('label' => 'Mayo'));
				echo $this->Form->input('con_junio', array('label' => 'Junio'));
				echo $this->Form->input('con_julio', array('label' => 'Julio'));
				echo $this->Form->input('con_agosto', array('label' => 'Agosto'));
				echo $this->Form->input('con_septiembre', array('label' => 'Septiembre'));
				echo $this->Form->input('con_octubre', array('label' => 'Octubre'));
				echo $this->Form->input('con_noviembre', array('label' => 'Noviembre'));
				echo $this->Form->input('con_diciembre', array('label' => 'Diciembre'));
			?>
			</div>
			</div> 
			<div>
				<button id="enviar".<?php $regione_id ?> onclick="" class="btn-block btn-primary">Guardar</button>
			</div>
		</fieldset>
		<?php 
			echo $this->Form->end();
		?>
	</div>
</div>