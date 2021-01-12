<?php
    $regione_id = $regiones_id['Regione']['id'];
    
    $v1=$_GET['d'];
    echo $v1;
?>

<div class = "col-lg-12 col-xs-12 col-sm-12">
    <ol class = "breadcrum">
        <li>
            <span class = "glyphicon glyphicon-list"></span>
            <?php
                echo $this->Html->link(__('Regresar'), array('action' => 'index', $regione_id));
            ?>
        </li>
    </ol>
</div>

<pre>
<?php
print_r($aten);
?>
</pre>




<div class = "row">
    <div class = "users col-lg-8 col-xs-12 col-sm-12 col-md-8">
        <?php
            echo $this->Form->create('Ecxesta');
        ?>

        <fieldset class = "form-group">
            <legend>
                <?php
                    $atens = $aten['Establecimiento']['nombre_esta'];
                    $at = $aten['Ecxesta']['año'];
                    echo $atens.' - '.$at;
                ?>
            </legend>
        <?php
            echo $this->Form->input('establecimientos', array('type' => 'hidden'));            
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
            echo $this->Form->input('año', array('año' => '2020'));
        ?>
        <div>
            <button id = "enviar".<?php $regione_id ?> onclick = "" class = "btn-block btn-primary">Guardar</button>
        </div>
        </fieldset>
        <?php
            echo $this->Form->end();
        ?>
    </div>
</div>