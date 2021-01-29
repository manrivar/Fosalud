<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Violences', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="vioxestablishments index">
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
                <?php foreach ($vioxestablishments as $vioxestablishment) : ?>
                    <tr>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo $this->Html->link($vioxestablishment['Establishment']['establishment_name'], array('controller' => 'establishments', 'action' => 'view', $vioxestablishment['Establishment']['id'])); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($vioxestablishment['Sibase']['sibase_name'], array('controller' => 'sibases', 'action' => 'view', $vioxestablishment['Sibase']['id'])); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($vioxestablishment['Region']['region_name'], array('controller' => 'regions', 'action' => 'view', $vioxestablishment['Region']['id'])); ?>
                        </td>
                        <?php $total = $vioxestablishment['Vioxestablishment']['january'] + $vioxestablishment['Vioxestablishment']['february'] + $vioxestablishment['Vioxestablishment']['march'] + $vioxestablishment['Vioxestablishment']['april'] + $vioxestablishment['Vioxestablishment']['may'] + $vioxestablishment['Vioxestablishment']['june'] + $vioxestablishment['Vioxestablishment']['july'] + $vioxestablishment['Vioxestablishment']['august'] + $vioxestablishment['Vioxestablishment']['september'] + $vioxestablishment['Vioxestablishment']['october'] + $vioxestablishment['Vioxestablishment']['november'] + $vioxestablishment['Vioxestablishment']['december'];  ?>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['january']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['february']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['march']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['april']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['may']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['june']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['july']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['august']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['september']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['october']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['november']); ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['december']); ?>&nbsp;</td>
                        <td><?php echo $total; ?>&nbsp;</td>
                        <td><?php echo h($vioxestablishment['Vioxestablishment']['year']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php $region = $vioxestablishment['Vioxestablishment']['regions_id'] ?>
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $vioxestablishment['Vioxestablishment']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vioxestablishment['Vioxestablishment']['id'], $region, $yer)); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vioxestablishment['Vioxestablishment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $vioxestablishment['Vioxestablishment']['id']))); ?>
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