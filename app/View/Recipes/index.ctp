<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Users', 'action' => 'atenmenu')); ?>
        </li>
    </ol>
</div>

<h2>Recetas</h2>

<?= $this->Form->create('recipes', ['type' => 'get']); ?>
<?php $option = array('2020' => '2020', '2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024', '2025' => '2025', '2026' => '2026', '2027' => '2027', '2028' => '2028', '2029' => '2029', '2030' => '2030'); ?>

<?php echo $this->Form->input('yir', array(
    'label' => '',
    'options' => $option,
    'empty' => 'Selecciona un año'
)); ?>
<!-- <?= $this->Form->control('yir', ['class' => 'datepicker', 'value' => $this->request->query('yir')]); ?> -->
<button class="btn btn-primary" name="search">
    <span class="glyphicon glyphicon-search"></span>
</button>
<?= $this->Form->end() ?>

<div class="table-responsive">
    <!-- Inicio de la tabla -->
    <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('regions_id', 'Regiones'); ?></th>
                <th><?php echo $this->Paginator->sort('trimester1', 'Trimestre 1'); ?></th>
                <th><?php echo $this->Paginator->sort('trimester2', 'Trimestre 2'); ?></th>
                <th><?php echo $this->Paginator->sort('trimester3', 'Trimestre 3'); ?></th>
                <th><?php echo $this->Paginator->sort('trimester4', 'Trimestre 4'); ?></th>
                <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                <th><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recipes as $recipe) : ?>
                <tr>
                    <td><?php echo h($recipe['Recipe']['id']); ?>&nbsp;</td>
                    <td>
                        <?php $region = $recipe['Region']['id']; ?>
                        <?php echo $this->Html->link($recipe['Region']['region_name'], array('controller' => 'Recipesxestablishments', 'action' => 'index', $region, $yer)); ?>
                    </td>
                    <?php $total = $recipe['Recipe']['trimester1'] + $recipe['Recipe']['trimester2'] + $recipe['Recipe']['trimester3'] + $recipe['Recipe']['trimester4'] ?>
                    <td><?php echo h($recipe['Recipe']['trimester1']); ?>&nbsp;</td>
                    <td><?php echo h($recipe['Recipe']['trimester2']); ?>&nbsp;</td>
                    <td><?php echo h($recipe['Recipe']['trimester3']); ?>&nbsp;</td>
                    <td><?php echo h($recipe['Recipe']['trimester4']); ?>&nbsp;</td>
                    <td><?php echo $total; ?>&nbsp;</td>
                    <td><?php echo h($recipe['Recipe']['year']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $recipe['Recipe']['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recipe['Recipe']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recipe['Recipe']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $recipe['Recipe']['id']))); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <?php $total2 = $trim1 + $trim2 + $trim3 + $trim4; ?>
            <tr>
                <td colspan="2"> Total </td>
                <td><?php echo $trim1;  ?></td>
                <td><?php echo $trim2;  ?></td>
                <td><?php echo $trim3;  ?></td>
                <td><?php echo $trim4;  ?></td>
                <td><?php echo $total2;  ?></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de un total de {:count} registros, comenzando en la pagina {:start}, terminando en la pagina {:end}')
        ));
        ?> </p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Hcxestablishments'), array('controller' => 'Hcxestablishments', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Recipe'), array('action' => 'add')); ?></li>
    </ul>
</div>
<script>

</script>