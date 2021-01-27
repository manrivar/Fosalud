<div class="hcxestablishments view">
    <h2><?php echo __('Hcxestablishment'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Establishments'); ?></dt>
        <dd>
            <?php echo $this->Html->link($hcxestablishment['Establishment']['establishment_name'], array('controller' => 'establishments', 'action' => 'view', $hcxestablishment['Establishment']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sibases'); ?></dt>
        <dd>
            <?php echo $this->Html->link($hcxestablishment['Sibase']['sibase_name'], array('controller' => 'sibases', 'action' => 'view', $hcxestablishment['Sibase']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Regions'); ?></dt>
        <dd>
            <?php echo $this->Html->link($hcxestablishment['Region']['region_name'], array('controller' => 'regions', 'action' => 'view', $hcxestablishment['Region']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('January'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['january']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('February'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['february']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('March'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['march']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('April'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['april']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('May'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['may']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('June'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['june']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('July'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['july']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('August'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['august']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('September'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['september']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('October'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['october']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('November'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['november']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('December'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['december']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Year'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['year']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($hcxestablishment['Hcxestablishment']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $hcxestablishment['Hcxestablishment']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $hcxestablishment['Hcxestablishment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hcxestablishment['Hcxestablishment']['id']))); ?> </li>
        <li><?php echo $this->Html->link(__('Lista de Establecimientos'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Nuevo Establecimiento'), array('action' => 'add')); ?> </li>
</div>