<div class="hcxestablishments form">
    <?php echo $this->Form->create('Hcxestablishment'); ?>
    <fieldset>
        <legend><?php echo __('Add Hcxestablishment'); ?></legend>
        <?php
        echo $this->Form->input('establishments_id');
        echo $this->Form->input('sibases_id');
        echo $this->Form->input('regions_id');
        echo $this->Form->input('january');
        echo $this->Form->input('february');
        echo $this->Form->input('march');
        echo $this->Form->input('april');
        echo $this->Form->input('may');
        echo $this->Form->input('june');
        echo $this->Form->input('july');
        echo $this->Form->input('august');
        echo $this->Form->input('september');
        echo $this->Form->input('october');
        echo $this->Form->input('november');
        echo $this->Form->input('december');
        echo $this->Form->input('year');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Hcxestablishments'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Establishments'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sibases'), array('controller' => 'sibases', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Sibases'), array('controller' => 'sibases', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Regions'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
    </ul>
</div>