<div class="healingcares form">
    <?php echo $this->Form->create('Healingcare'); ?>
    <fieldset>
        <legend><?php echo __('Add Healingcare'); ?></legend>
        <?php
        echo $this->Form->input('regions_id');
        echo $this->Form->input('trimester1');
        echo $this->Form->input('trimester2');
        echo $this->Form->input('trimester3');
        echo $this->Form->input('trimester4');
        echo $this->Form->input('year');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Healingcares'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Regions'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
    </ul>
</div>