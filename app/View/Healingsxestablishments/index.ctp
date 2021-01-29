<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Healings', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="healingsxestablishments index">
    <h2><?php echo __('Establecimientos'); ?></h2>

    <div class="table-responsive">
        <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
                    <th><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
                    <th><?php echo $this->Paginator->sort('regions_id', 'Regiones'); ?></th>
                    <th><?php echo $this->Paginator->sort('january', 'Enero'); ?></th>
                    <th><?php echo $this->Paginator->sort('february', 'Febrero'); ?></th>
                    <th><?php echo $this->Paginator->sort('march', 'Marzo'); ?></th>
                    <th><?php echo $this->Paginator->sort('april', 'Abril'); ?></th>
                    <th><?php echo $this->Paginator->sort('may', 'Mayo'); ?></th>
                    <th><?php echo $this->Paginator->sort('june', 'Junio'); ?></th>
                    <th><?php echo $this->Paginator->sort('july', 'Julio'); ?></th>
                    <th><?php echo $this->Paginator->sort('august', 'Agosto'); ?></th>
                    <th><?php echo $this->Paginator->sort('september', 'Septiembre'); ?></th>
                    <th><?php echo $this->Paginator->sort('october', 'Octubre'); ?></th>
                    <th><?php echo $this->Paginator->sort('november', 'Noviembre'); ?></th>
                    <th><?php echo $this->Paginator->sort('december', 'Diciembre'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($healingsxestablishments as $healingsxestablishment) : ?>
                    <tr>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo $this->Html->link($healingsxestablishment['Establishment']['establishment_name'], array('controller' => 'establishments', 'action' => 'view', $healingsxestablishment['Establishment']['id'])); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($healingsxestablishment['Sibase']['sibase_name'], array('controller' => 'sibases', 'action' => 'view', $healingsxestablishment['Sibase']['id'])); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($healingsxestablishment['Region']['region_name'], array('controller' => 'regions', 'action' => 'view', $healingsxestablishment['Region']['id'])); ?>
                        </td>
                        <?php $total = $healingsxestablishment['Healingsxestablishment']['january'] + $healingsxestablishment['Healingsxestablishment']['february'] + $healingsxestablishment['Healingsxestablishment']['march'] + $healingsxestablishment['Healingsxestablishment']['april'] + $healingsxestablishment['Healingsxestablishment']['may'] + $healingsxestablishment['Healingsxestablishment']['june'] + $healingsxestablishment['Healingsxestablishment']['july'] + $healingsxestablishment['Healingsxestablishment']['august'] + $healingsxestablishment['Healingsxestablishment']['september'] + $healingsxestablishment['Healingsxestablishment']['october'] + $healingsxestablishment['Healingsxestablishment']['november'] + $healingsxestablishment['Healingsxestablishment']['december'];  ?>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['january']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['february']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['march']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['april']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['may']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['june']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['july']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['august']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['september']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['october']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['november']); ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['december']); ?>&nbsp;</td>
                        <td><?php echo $total; ?>&nbsp;</td>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['year']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php $region = $healingsxestablishment['Healingsxestablishment']['regions_id'] ?>
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $healingsxestablishment['Healingsxestablishment']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $healingsxestablishment['Healingsxestablishment']['id'], $region, $yer)); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $healingsxestablishment['Healingsxestablishment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $healingsxestablishment['Healingsxestablishment']['id']))); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $jan + $feb + $mar + $apr + $may + $jun + $jul + $aug + $sep + $oct + $nov + $decem; ?>
                <tr>
                    <td colspan="4"> Total </td>
                    <td><?php echo $jan;  ?></td>
                    <td><?php echo $feb;  ?></td>
                    <td><?php echo $mar;  ?></td>
                    <td><?php echo $apr;  ?></td>
                    <td><?php echo $may;  ?></td>
                    <td><?php echo $jun;  ?></td>
                    <td><?php echo $jul;  ?></td>
                    <td><?php echo $aug;  ?></td>
                    <td><?php echo $sep;  ?></td>
                    <td><?php echo $oct;  ?></td>
                    <td><?php echo $nov;  ?></td>
                    <td><?php echo $decem;  ?></td>
                    <td><?php echo $total2;  ?></td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de un total de {:count}, comenzando en {:start}, terminando en {:end}')
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
        <li><?php echo $this->Html->link(__('Nuevo Establecimiento'), array('action' => 'add')); ?></li>
    </ul>
</div>