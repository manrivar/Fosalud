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
                    <li> <span class="glyphicon glyphicon-plus-sign"></span>  <?php echo "<?php echo \$this->Html->link(('" . $singularHumanName . "'), array('action' => 'add'),array('escapeTitle' => false)); ?>"; ?></li>
    <?php
            $done = array();
            foreach ($associations as $type => $data) {
                    foreach ($data as $alias => $details) {
                            if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                                    echo "\t\t<li> <span class=\"glyphicon glyphicon-list\"></span> <?php echo \$this->Html->link(('  Listar " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'),array('escapeTitle' => false)); ?> </li>\n";
                                    echo "\t\t<li> <span class=\"glyphicon glyphicon-plus-sign\"></span> <?php echo \$this->Html->link(('" . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'),array('escapeTitle' => false)); ?> </li>\n";
                                    $done[] = $details['controller'];
                            }
                    }
            }
    ?>
    </ol>	
</div>


<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12"><h2><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h2></div>
    <div class="col-lg-2 col-sm-12 col-xs-12 col-md-2"></div>
</div>

<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">&nbsp;</div>


<div class="col-lg-1 col-sm-12 col-xs-12 col-md-1"></div>

<div  class="col-lg-9 col-sm-12 col-xs-12 col-md-8">
    <table class="table table-responsive" >
        
	<thead>
	<tr>
	<?php foreach ($fields as $field): ?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
	<?php endforeach; ?>
		<th class="actions"><?php echo "<?php echo __('Opciones'); ?>"; ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class='actions btn-group'>\n";
                echo "\t\t<div class='dropdown'>\n";
                echo "\t\t<button class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='true'>"
                    ."Opciones"
                    ."<span class='caret'></span>"
                    ."</button>\n";
                echo "\t\t<ul class='dropdown-menu' aria-labelledby='dropdownMenu1'>\n";
		echo "\t\t\t<li><?php echo \$this->Html->link(__('Ver'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?></li>\n";
		echo "\t\t\t<li><?php echo \$this->Html->link(__('Editar'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?></li>\n";
		echo "\t\t\t<li><?php echo \$this->Form->postLink(__('Eliminar'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('confirm' => __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}']))); ?></li>\n";
                echo "\t\t</ul> \n";
                echo "\t\t</div>\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</tbody>
	</table>
	<p>
	<?php echo "<?php
	echo \$this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count}')
	));
	?>"; ?>
	</p>

	
           <nav>
            <ul class="pagination">
                <?php
		echo "<?php\n";
		echo "\t\techo \"<li>\".\$this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled')).\"</li>\";\n";
		echo "\t\techo \"<li>\".\$this->Paginator->numbers(array('separator' => '')).\"</li>\";\n";
		echo "\t\techo \"<li>\".\$this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled')).\"<li>\";\n";
		echo "\t?>\n";
                ?>
            </ul>
          </nav>
        
</div>

