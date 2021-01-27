<div class="childhcxestablishments form">
    <?php echo $this->Form->create('Childhcxestablishment'); ?>
    <fieldset>
        <legend><?php echo __('Add Childhcxestablishment'); ?></legend>
        <?php
        echo $this->Form->input('establishments_id');
        echo $this->Form->input('sibases_id');
        echo $this->Form->input('regions_id');
        echo $this->Form->input('ins_january');
        echo $this->Form->input('ins_february');
        echo $this->Form->input('ins_march');
        echo $this->Form->input('ins_april');
        echo $this->Form->input('ins_may');
        echo $this->Form->input('ins_june');
        echo $this->Form->input('ins_july');
        echo $this->Form->input('ins_august');
        echo $this->Form->input('ins_september');
        echo $this->Form->input('ins_october');
        echo $this->Form->input('ins_november');
        echo $this->Form->input('ins_december');
        echo $this->Form->input('con_january');
        echo $this->Form->input('con_february');
        echo $this->Form->input('con_march');
        echo $this->Form->input('con_april');
        echo $this->Form->input('con_may');
        echo $this->Form->input('con_june');
        echo $this->Form->input('con_july');
        echo $this->Form->input('con_august');
        echo $this->Form->input('con_september');
        echo $this->Form->input('con_october');
        echo $this->Form->input('con_november');
        echo $this->Form->input('con_december');
        echo $this->Form->input('year');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Childhcxestablishments'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Establishments'), array('controller' => 'establishments', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Establishments'), array('controller' => 'establishments', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sibases'), array('controller' => 'sibases', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Sibases'), array('controller' => 'sibases', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Regions'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
    </ul>
</div>