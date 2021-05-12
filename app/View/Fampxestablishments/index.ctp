<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Familyplannings', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="fampxestablishments index">
    <h2>
        <center><?php echo __('Planificacion Familiar - Establecimientos'); ?></center>
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('id'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total Anual'); ?></th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">ENERO</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">FEBRERO</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">MARZO</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">ABRIL</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">MAYO</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">JUNIO</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">JULIO</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">AGOSTO</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">SEPTIEMBRE</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">OCTUBRE</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">NOVIEMBRE</th>
                    <th class="text-center" colspan="3" bgcolor="#AEEAF1">DICIEMBRE</th>
                </tr>
                <tr>



                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_january', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_january', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_february', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_february', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_march', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_march', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_april', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_april', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_may', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_may', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_june', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_june', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_july', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_july', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_august', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_august', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_september', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_september', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_october', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_october', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_november', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_november', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ins_december', 'inscripcion'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_december', 'Control'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fampxestablishments as $fampxestablishment) : ?>
                    <tr>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo h($fampxestablishment['Sibase']['sibase_name']); ?>
                        </td>
                        <td>
<<<<<<< HEAD
                        <?php $region = $fampxestablishment['Fampxestablishment']['regions_id'] ?>

                        <?php if($this->Session->read('Auth.User.acceso_id') <= 2):?>
                            <?php echo $this->Html->link($fampxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $fampxestablishment['Fampxestablishment']['id'], $region, $yer)); ?>
                            <?php elseif($this->Session->read('Auth.User.acceso_id') > 2):?>

                            <?php if($this->Session->read('Auth.User.regions_id')==$region && $this->Session->read('Auth.User.acceso_id') <= 3):?>
                                <?php echo $this->Html->link($fampxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $fampxestablishment['Fampxestablishment']['id'], $region, $yer)); ?>
                            <?php else: ?>
                                <?php echo h($fampxestablishment['Establishment']['establishment_name']); ?>
                            <?php endif; ?>
                            <?php endif; ?>
=======
                            <?php $region = $fampxestablishment['Fampxestablishment']['regions_id'] ?>
                            <?php echo $this->Html->link($fampxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $fampxestablishment['Fampxestablishment']['id'], $region, $yer)); ?>
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
                        </td>
                        <?php $total = $fampxestablishment['Fampxestablishment']['ins_january'] + $fampxestablishment['Fampxestablishment']['ins_february'] + $fampxestablishment['Fampxestablishment']['ins_march'] + $fampxestablishment['Fampxestablishment']['ins_april'] + $fampxestablishment['Fampxestablishment']['ins_may'] + $fampxestablishment['Fampxestablishment']['ins_june'] + $fampxestablishment['Fampxestablishment']['ins_july'] + $fampxestablishment['Fampxestablishment']['ins_august'] + $fampxestablishment['Fampxestablishment']['ins_september'] + $fampxestablishment['Fampxestablishment']['ins_october'] + $fampxestablishment['Fampxestablishment']['ins_november'] + $fampxestablishment['Fampxestablishment']['ins_december'] + $fampxestablishment['Fampxestablishment']['con_january'] + $fampxestablishment['Fampxestablishment']['con_february'] + $fampxestablishment['Fampxestablishment']['con_march'] + $fampxestablishment['Fampxestablishment']['con_april'] + $fampxestablishment['Fampxestablishment']['con_may'] + $fampxestablishment['Fampxestablishment']['con_june'] + $fampxestablishment['Fampxestablishment']['con_july'] + $fampxestablishment['Fampxestablishment']['con_august'] + $fampxestablishment['Fampxestablishment']['con_september'] + $fampxestablishment['Fampxestablishment']['con_october'] + $fampxestablishment['Fampxestablishment']['con_november'] + $fampxestablishment['Fampxestablishment']['con_december'];  ?>
                        <td bgcolor="#CBEEF2"><?php echo $total; ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_january']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_january']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_january'] + $fampxestablishment['Fampxestablishment']['con_january']); ?></td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_february']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_february']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_february'] + $fampxestablishment['Fampxestablishment']['con_february']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_march']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_march']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_march'] + $fampxestablishment['Fampxestablishment']['con_march']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_april']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_april']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_april'] + $fampxestablishment['Fampxestablishment']['con_april']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_may']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_may']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_may'] + $fampxestablishment['Fampxestablishment']['con_may']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_june']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_june']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_june'] + $fampxestablishment['Fampxestablishment']['con_june']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_july']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_july']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_july'] + $fampxestablishment['Fampxestablishment']['con_july']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_august']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_august']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_august'] + $fampxestablishment['Fampxestablishment']['con_august']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_september']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_september']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_september'] + $fampxestablishment['Fampxestablishment']['con_september']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_october']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_october']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_october'] + $fampxestablishment['Fampxestablishment']['con_october']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_november']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_november']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_november'] + $fampxestablishment['Fampxestablishment']['con_november']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['ins_december']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['con_december']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($fampxestablishment['Fampxestablishment']['ins_december'] + $fampxestablishment['Fampxestablishment']['con_december']); ?>&nbsp;</td>
                        <td><?php echo h($fampxestablishment['Fampxestablishment']['year']); ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $i_jan + $i_feb + $i_mar + $i_apr + $i_may + $i_jun + $i_jul + $i_aug + $i_sep + $i_oct + $i_nov + $i_decem + $c_jan + $c_feb + $c_mar + $c_apr + $c_may + $c_jun + $c_jul + $c_aug + $c_sep + $c_oct + $c_nov + $c_decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td bgcolor="#AEEAF1"><?php echo $total2;  ?></td>
                    <td><?php echo $i_jan;  ?></td>
                    <td><?php echo $c_jan;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_jan + $c_jan; ?></td>
                    <td><?php echo $i_feb;  ?></td>
                    <td><?php echo $c_feb;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_feb + $c_feb; ?></td>
                    <td><?php echo $i_mar;  ?></td>
                    <td><?php echo $c_mar;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_mar + $c_mar; ?></td>
                    <td><?php echo $i_apr;  ?></td>
                    <td><?php echo $c_apr;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_apr + $c_apr; ?></td>
                    <td><?php echo $i_may;  ?></td>
                    <td><?php echo $c_may;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_may + $c_may; ?></td>
                    <td><?php echo $i_jun;  ?></td>
                    <td><?php echo $c_jun;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_jun + $c_jun; ?></td>
                    <td><?php echo $i_jul;  ?></td>
                    <td><?php echo $c_jul;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_jul + $c_jul; ?></td>
                    <td><?php echo $i_aug;  ?></td>
                    <td><?php echo $c_aug;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_aug + $c_aug; ?></td>
                    <td><?php echo $i_sep;  ?></td>
                    <td><?php echo $c_sep;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_sep + $c_sep; ?></td>
                    <td><?php echo $i_oct;  ?></td>
                    <td><?php echo $c_oct;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_oct + $c_oct; ?></td>
                    <td><?php echo $i_nov;  ?></td>
                    <td><?php echo $c_nov;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_nov + $c_nov; ?></td>
                    <td><?php echo $i_decem;  ?></td>
                    <td><?php echo $c_decem;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_decem + $c_decem; ?></td>
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