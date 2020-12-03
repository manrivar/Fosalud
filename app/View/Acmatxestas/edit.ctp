<?php 
	$regione_id = $regiones_id['Regione']['id']; 
?>

<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
        	<span class="glyphicon glyphicon-list"></span> 
        	<?php 
        		echo $this->Html->link(__('Regresar'), array('action' => 'index', $regione_id)); 
        	?>
        </li>  
    </ol>
</div>

<div class="row">
	<div class="users col-lg-8 col-xs-12 col-sm-12 col-md-8">
		<?php 
			echo $this->Form->create('Acmatxesta'); 
		?>
		<fieldset class="form-group">
			<legend>
				<?php 
					$atens = $aten['Establecimiento']['nombre_esta']; 
					echo $atens; 
				?>
			</legend>
			<?php
				echo $this->Form->input('establecimientos_id', array('type' => 'hidden'));
				echo $this->Form->input('enero');
				echo $this->Form->input('febrero');
				echo $this->Form->input('marzo');
				echo $this->Form->input('abril');
				echo $this->Form->input('mayo');
				echo $this->Form->input('junio');
				echo $this->Form->input('julio');
				echo $this->Form->input('agosto');
				echo $this->Form->input('septiembre');
				echo $this->Form->input('octubre');
				echo $this->Form->input('noviembre');
				echo $this->Form->input('diciembre');
			?>
			<div>
				<button id="enviar".<?php $regione_id ?> onclick="" class="btn-block btn-primary">Guardar</button>
			</div>
		</fieldset>
		<?php 
			echo $this->Form->end();
		?>
	</div>
</div>