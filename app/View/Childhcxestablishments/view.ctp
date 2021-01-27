<div class="childhcxestablishments view">
    <h2><?php echo __('Childhcxestablishment'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Establishments'); ?></dt>
        <dd>
            <?php echo $this->Html->link($childhcxestablishment['Establishment']['establishment_name'], array('controller' => 'establishments', 'action' => 'view', $childhcxestablishment['Establishment']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sibases'); ?></dt>
        <dd>
            <?php echo $this->Html->link($childhcxestablishment['Sibase']['sibase_name'], array('controller' => 'sibases', 'action' => 'view', $childhcxestablishment['Sibase']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Regions'); ?></dt>
        <dd>
            <?php echo $this->Html->link($childhcxestablishment['Region']['region_name'], array('controller' => 'regions', 'action' => 'view', $childhcxestablishment['Region']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins January'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_january']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins February'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_february']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins March'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_march']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins April'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_april']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins May'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_may']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins June'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_june']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins July'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_july']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins August'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_august']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins September'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_september']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins October'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_october']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins November'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_november']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ins December'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['ins_december']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con January'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_january']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con February'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_february']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con March'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_march']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con April'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_april']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con May'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_may']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con June'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_june']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con July'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_july']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con August'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_august']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con September'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_september']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con October'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_october']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con November'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_november']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Con December'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['con_december']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Year'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['year']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($childhcxestablishment['Childhcxestablishment']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Childhcxestablishment'), array('action' => 'edit', $childhcxestablishment['Childhcxestablishment']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Childhcxestablishment'), array('action' => 'delete', $childhcxestablishment['Childhcxestablishment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $childhcxestablishment['Childhcxestablishment']['id']))); ?> </li>
        <li><?php echo $this->Html->link(__('List Childhcxestablishments'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Childhcxestablishment'), array('action' => 'add')); ?> </li>
    </ul>
</div>