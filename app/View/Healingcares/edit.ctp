<div class="healingcares form">
    <?php echo $this->Form->create('Healingcare'); ?>
    <fieldset>
        <legend><?php echo __('Edit Healingcare'); ?></legend>
        <?php
        echo $this->Form->input('id');
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

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Healingcare.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Healingcare.id')))); ?></li>
        <li><?php echo $this->Html->link(__('List Healingcares'), array('action' => 'index')); ?></li>

    </ul>
</div>