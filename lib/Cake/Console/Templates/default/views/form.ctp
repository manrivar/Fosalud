<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="col-lg-12 col-xs-12 col-sm-12">
<ol class="breadcrumb">


<?php if (strpos($action, 'add') === false): ?>
		<li> <span class="glyphicon glyphicon-trash"></span> <?php echo "<?php echo \$this->Form->postLink(__('Eliminar'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), array('confirm' => __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}')))); ?>"; ?></li>
<?php endif; ?>
		<li> <span class="glyphicon glyphicon-list"></span> <?php echo "<?php echo \$this->Html->link((' Listar " . $pluralHumanName . "'), array('action' => 'index'),array('escapeTitle' => false)); ?>"; ?></li>
<?php
		$done = array();
		foreach ($associations as $type => $data) {
			foreach ($data as $alias => $details) {
				if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
					echo "\t\t<li> <span class=\"glyphicon glyphicon-list\"></span> <?php echo \$this->Html->link(('Listar ". Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'),array('escapeTitle' => false)); ?> </li>\n";
					echo "\t\t<li> <span class=\"glyphicon glyphicon-plus\"></span> <?php echo \$this->Html->link((' ". Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'),array('escapeTitle' => false)); ?> </li>\n";
					$done[] = $details['controller'];
				}
			}
		}
?>

</ol>
</div>


<div class="row">
<?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
	<fieldset>
		<legend><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></legend>
<?php
                echo "\t<div class='row'>\n";
		
                $i=0;
		foreach ($fields as $field) {
                    if($i<2){
			if (strpos($action, 'add') !== false && $field === $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
                            echo "\t\t<div class='col-md-4'>";
                            echo "\t<?php\n";
				echo "\t\techo \$this->Form->input('{$field}',array('class'=>'form-control','between'=>'<div class=\"input-group\">
                                                                        <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-pencil\"></span></span>',
                                                                         'after'=>'</div>'));\n";
                                echo "\t?>\n";
                                echo "\t\t</div>\n";
			}
                    
                        $i++;
                    }
                    else{
                        if (strpos($action, 'add') !== false && $field === $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
                            echo "\t\t<div class='col-md-4'>";
                            echo "\t<?php\n";
				echo "\t\techo \$this->Form->input('{$field}',array('class'=>'form-control','between'=>'<div class=\"input-group\">
                                                                        <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-pencil\"></span></span>',
                                                                         'after'=>'</div>'));\n";
                                echo "\t?>\n";
                                echo "\t\t</div>\n";
			}
                        echo "\t</div>\n";
                        echo "\n\t<div class='row'>\n";
                        $i=0;
                    }
		}
                echo "\t</div>\n";
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\techo \$this->Form->input('{$assocName}');\n";
			}
		}
?>
	</fieldset>
        <div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                <i class="glyphicon glyphicon-floppy-saved"></i> Guardar Datos
            </button>

        </div>

    
<?php
	echo "<?php echo \$this->Form->end(); ?>\n";
?>
</div>
