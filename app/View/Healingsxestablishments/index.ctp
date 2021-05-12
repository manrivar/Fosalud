<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Healings', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="healingsxestablishments index">
    <h2>
        <center><?php echo __('Curaciones - Establecimientos'); ?></center>
    </h2>

    <div class="table-responsive">
        <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('id'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('january', 'Enero'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('february', 'Febrero'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('march', 'Marzo'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('april', 'Abril'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('may', 'Mayo'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('june', 'Junio'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('july', 'Julio'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('august', 'Agosto'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('september', 'Septiembre'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('october', 'Octubre'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('november', 'Noviembre'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('december', 'Diciembre'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($healingsxestablishments as $healingsxestablishment) : ?>
                    <tr>
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo h($healingsxestablishment['Sibase']['sibase_name']); ?>
                        </td>
                        <td>
                        <?php $region = $healingsxestablishment['Healingsxestablishment']['regions_id'] ?>

                        <?php if($this->Session->read('Auth.User.acceso_id') <= 2):?>
                            <?php echo $this->Html->link($healingsxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $healingsxestablishment['Healingsxestablishment']['id'], $region, $yer)); ?>
                            <?php elseif($this->Session->read('Auth.User.acceso_id') > 2):?>

                            <?php if($this->Session->read('Auth.User.regions_id')==$region && $this->Session->read('Auth.User.acceso_id') <= 3):?>
                                <?php echo $this->Html->link($healingsxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $healingsxestablishment['Healingsxestablishment']['id'], $region, $yer)); ?>
                            <?php else: ?>
                                <?php echo h($healingsxestablishment['Establishment']['establishment_name']); ?>
                            <?php endif; ?>
                            <?php endif; ?>
                        </td>
                        <?php $total = $healingsxestablishment['Healingsxestablishment']['january'] + $healingsxestablishment['Healingsxestablishment']['february'] + $healingsxestablishment['Healingsxestablishment']['march'] + $healingsxestablishment['Healingsxestablishment']['april'] + $healingsxestablishment['Healingsxestablishment']['may'] + $healingsxestablishment['Healingsxestablishment']['june'] + $healingsxestablishment['Healingsxestablishment']['july'] + $healingsxestablishment['Healingsxestablishment']['august'] + $healingsxestablishment['Healingsxestablishment']['september'] + $healingsxestablishment['Healingsxestablishment']['october'] + $healingsxestablishment['Healingsxestablishment']['november'] + $healingsxestablishment['Healingsxestablishment']['december'];  ?>
                        <td bgcolor="#CBEEF2"><?php echo $total; ?>&nbsp;</td>
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
                        <td><?php echo h($healingsxestablishment['Healingsxestablishment']['year']); ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $jan + $feb + $mar + $apr + $may + $jun + $jul + $aug + $sep + $oct + $nov + $decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td bgcolor="#AEEAF1"><?php echo $total2;  ?></td>
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