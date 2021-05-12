<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>

            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Tubers', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="tubersxestablishments index">
    <h2>
        <center><?php echo __('Tuberculosis - Establecimientos'); ?></center>
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
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_january', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_january', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_february', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_february', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_march', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_march', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_april', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_april', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_may', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_may', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_june', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_june', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_july', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_july', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_august', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_august', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_september', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_september', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_october', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_october', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_november', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_november', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ide_december', 'Identificado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inv_december', 'Investigado'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tubersxestablishments as $tubersxestablishment) : ?>
                    <tr>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo h($tubersxestablishment['Sibase']['sibase_name']); ?>
                        </td>
                        <td>
                        <?php $region = $tubersxestablishment['Tubersxestablishment']['regions_id'] ?>

                        <?php if($this->Session->read('Auth.User.acceso_id') <= 2):?>
                            <?php echo $this->Html->link($tubersxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $tubersxestablishment['Tubersxestablishment']['id'], $region, $yer)); ?>
                            <?php elseif($this->Session->read('Auth.User.acceso_id') > 2):?>

                            <?php if($this->Session->read('Auth.User.regions_id')==$region && $this->Session->read('Auth.User.acceso_id') <= 3):?>
                                <?php echo $this->Html->link($tubersxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $tubersxestablishment['Tubersxestablishment']['id'], $region, $yer)); ?>
                            <?php else: ?>
                                <?php echo h($tubersxestablishment['Establishment']['establishment_name']); ?>
                            <?php endif; ?>
                            <?php endif; ?>
                        </td>
                        <?php $total = $tubersxestablishment['Tubersxestablishment']['ide_january'] + $tubersxestablishment['Tubersxestablishment']['ide_february'] + $tubersxestablishment['Tubersxestablishment']['ide_march'] + $tubersxestablishment['Tubersxestablishment']['ide_april'] + $tubersxestablishment['Tubersxestablishment']['ide_may'] + $tubersxestablishment['Tubersxestablishment']['ide_june'] + $tubersxestablishment['Tubersxestablishment']['ide_july'] + $tubersxestablishment['Tubersxestablishment']['ide_august'] + $tubersxestablishment['Tubersxestablishment']['ide_september'] + $tubersxestablishment['Tubersxestablishment']['ide_october'] + $tubersxestablishment['Tubersxestablishment']['ide_november'] + $tubersxestablishment['Tubersxestablishment']['ide_december'] + $tubersxestablishment['Tubersxestablishment']['inv_january'] + $tubersxestablishment['Tubersxestablishment']['inv_february'] + $tubersxestablishment['Tubersxestablishment']['inv_march'] + $tubersxestablishment['Tubersxestablishment']['inv_april'] + $tubersxestablishment['Tubersxestablishment']['inv_may'] + $tubersxestablishment['Tubersxestablishment']['inv_june'] + $tubersxestablishment['Tubersxestablishment']['inv_july'] + $tubersxestablishment['Tubersxestablishment']['inv_august'] + $tubersxestablishment['Tubersxestablishment']['inv_september'] + $tubersxestablishment['Tubersxestablishment']['inv_october'] + $tubersxestablishment['Tubersxestablishment']['inv_november'] + $tubersxestablishment['Tubersxestablishment']['inv_december'];  ?>
                        <td bgcolor="#CBEEF2"><?php echo $total; ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_january']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_january']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_january'] + $tubersxestablishment['Tubersxestablishment']['inv_january']); ?></td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_february']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_february']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_february'] + $tubersxestablishment['Tubersxestablishment']['inv_february']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_march']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_march']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_march'] + $tubersxestablishment['Tubersxestablishment']['inv_march']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_april']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_april']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_april'] + $tubersxestablishment['Tubersxestablishment']['inv_april']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_may']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_may']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_may'] + $tubersxestablishment['Tubersxestablishment']['inv_may']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_june']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_june']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_june'] + $tubersxestablishment['Tubersxestablishment']['inv_june']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_july']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_july']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_july'] + $tubersxestablishment['Tubersxestablishment']['inv_july']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_august']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_august']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_august'] + $tubersxestablishment['Tubersxestablishment']['inv_august']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_september']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_september']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_september'] + $tubersxestablishment['Tubersxestablishment']['inv_september']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_october']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_october']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_october'] + $tubersxestablishment['Tubersxestablishment']['inv_october']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_november']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_november']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_november'] + $tubersxestablishment['Tubersxestablishment']['inv_november']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_december']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['inv_december']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($tubersxestablishment['Tubersxestablishment']['ide_december'] + $tubersxestablishment['Tubersxestablishment']['inv_december']); ?>&nbsp;</td>
                        <td><?php echo h($tubersxestablishment['Tubersxestablishment']['year']); ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $i_jan + $i_feb + $i_mar + $i_apr + $i_may + $i_jun + $i_jul + $i_aug + $i_sep + $i_oct + $i_nov + $i_decem + $in_jan + $in_feb + $in_mar + $in_apr + $in_may + $in_jun + $in_jul + $in_aug + $in_sep + $in_oct + $in_nov + $in_decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td bgcolor="#AEEAF1"><?php echo $total2;  ?></td>
                    <td><?php echo $i_jan;  ?></td>
                    <td><?php echo $in_jan;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_jan + $in_jan; ?></td>
                    <td><?php echo $i_feb;  ?></td>
                    <td><?php echo $in_feb;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_feb + $in_feb; ?></td>
                    <td><?php echo $i_mar;  ?></td>
                    <td><?php echo $in_mar;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_mar + $in_mar; ?></td>
                    <td><?php echo $i_apr;  ?></td>
                    <td><?php echo $in_apr;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_apr + $in_apr; ?></td>
                    <td><?php echo $i_may;  ?></td>
                    <td><?php echo $in_may;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_may + $in_may; ?></td>
                    <td><?php echo $i_jun;  ?></td>
                    <td><?php echo $in_jun;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_jun + $in_jun; ?></td>
                    <td><?php echo $i_jul;  ?></td>
                    <td><?php echo $in_jul;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_jul + $in_jul; ?></td>
                    <td><?php echo $i_aug;  ?></td>
                    <td><?php echo $in_aug;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_aug + $in_aug; ?></td>
                    <td><?php echo $i_sep;  ?></td>
                    <td><?php echo $in_sep;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_sep + $in_sep; ?></td>
                    <td><?php echo $i_oct;  ?></td>
                    <td><?php echo $in_oct;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_oct + $in_oct; ?></td>
                    <td><?php echo $i_nov;  ?></td>
                    <td><?php echo $in_nov;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_nov + $in_nov; ?></td>
                    <td><?php echo $i_decem;  ?></td>
                    <td><?php echo $in_decem;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $i_decem + $in_decem; ?></td>
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