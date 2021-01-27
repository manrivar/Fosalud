<div class="healingcares view">
    <h2><?php echo __('Healingcare'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($healingcare['Healingcare']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Region'); ?></dt>
        <dd>
            <?php echo $this->Html->link($healingcare['Region']['region_name'], array('controller' => 'regions', 'action' => 'view', $healingcare['Region']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Trimester1'); ?></dt>
        <dd>
            <?php echo h($healingcare['Healingcare']['trimester1']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Trimester2'); ?></dt>
        <dd>
            <?php echo h($healingcare['Healingcare']['trimester2']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Trimester3'); ?></dt>
        <dd>
            <?php echo h($healingcare['Healingcare']['trimester3']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Trimester4'); ?></dt>
        <dd>
            <?php echo h($healingcare['Healingcare']['trimester4']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Year'); ?></dt>
        <dd>
            <?php echo h($healingcare['Healingcare']['year']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($healingcare['Healingcare']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($healingcare['Healingcare']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Healingcare'), array('action' => 'edit', $healingcare['Healingcare']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Healingcare'), array('action' => 'delete', $healingcare['Healingcare']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $healingcare['Healingcare']['id']))); ?> </li>
        <li><?php echo $this->Html->link(__('List Healingcares'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Healingcare'), array('action' => 'add')); ?> </li>
</div>