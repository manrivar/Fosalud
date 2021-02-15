<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>

            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Diseases', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="diseasesxestablishments index">
    <h2>
        <center><?php echo __('Enfermedades Cronicas - Establecimientos'); ?></center>
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th class="text-center" rowspan="2"><?php echo $this->Paginator->sort('id'); ?></th>
                    <th class="text-center" rowspan="2"><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
                    <th class="text-center" rowspan="2"><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
                    <th class="text-center" colspan="3">ENERO</th>
                    <th class="text-center" colspan="3">FEBRERO</th>
                    <th class="text-center" colspan="3">MARZO</th>
                    <th class="text-center" colspan="3">ABRIL</th>
                    <th class="text-center" colspan="3">MAYO</th>
                    <th class="text-center" colspan="3">JUNIO</th>
                    <th class="text-center" colspan="3">JULIO</th>
                    <th class="text-center" colspan="3">AGOSTO</th>
                    <th class="text-center" colspan="3">SEPTIEMBRE</th>
                    <th class="text-center" colspan="3">OCTUBRE</th>
                    <th class="text-center" colspan="3">NOVIEMBRE</th>
                    <th class="text-center" colspan="3">DICIEMBRE</th>
                    <th class="text-center" colspan="3">TOTAL ANUAL</th>
                </tr>
                <tr>



                    <th><?php echo $this->Paginator->sort('hip_january', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_january', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_february', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_february', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_march', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_march', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_april', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_april', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_may', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_may', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_june', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_june', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_july', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_july', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_august', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_august', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_september', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_september', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_october', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_october', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_november', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_november', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('hip_december', 'Hipertension'); ?></th>
                    <th><?php echo $this->Paginator->sort('dia_december', 'Diabetes Mellitus'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($diseasesxestablishments as $diseasesxestablishment) : ?>
                    <tr>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo $this->Html->link($diseasesxestablishment['Sibase']['sibase_name'], array('controller' => 'sibases', 'action' => 'view', $diseasesxestablishment['Sibase']['id'])); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($diseasesxestablishment['Establishment']['establishment_name'], array('controller' => 'establishments', 'action' => 'view', $diseasesxestablishment['Establishment']['id'])); ?>
                        </td>
                        <?php $total = $diseasesxestablishment['Diseasesxestablishment']['hip_january'] + $diseasesxestablishment['Diseasesxestablishment']['hip_february'] + $diseasesxestablishment['Diseasesxestablishment']['hip_march'] + $diseasesxestablishment['Diseasesxestablishment']['hip_april'] + $diseasesxestablishment['Diseasesxestablishment']['hip_may'] + $diseasesxestablishment['Diseasesxestablishment']['hip_june'] + $diseasesxestablishment['Diseasesxestablishment']['hip_july'] + $diseasesxestablishment['Diseasesxestablishment']['hip_august'] + $diseasesxestablishment['Diseasesxestablishment']['hip_september'] + $diseasesxestablishment['Diseasesxestablishment']['hip_october'] + $diseasesxestablishment['Diseasesxestablishment']['hip_november'] + $diseasesxestablishment['Diseasesxestablishment']['hip_december'] + $diseasesxestablishment['Diseasesxestablishment']['dia_january'] + $diseasesxestablishment['Diseasesxestablishment']['dia_february'] + $diseasesxestablishment['Diseasesxestablishment']['dia_march'] + $diseasesxestablishment['Diseasesxestablishment']['dia_april'] + $diseasesxestablishment['Diseasesxestablishment']['dia_may'] + $diseasesxestablishment['Diseasesxestablishment']['dia_june'] + $diseasesxestablishment['Diseasesxestablishment']['dia_july'] + $diseasesxestablishment['Diseasesxestablishment']['dia_august'] + $diseasesxestablishment['Diseasesxestablishment']['dia_september'] + $diseasesxestablishment['Diseasesxestablishment']['dia_october'] + $diseasesxestablishment['Diseasesxestablishment']['dia_november'] + $diseasesxestablishment['Diseasesxestablishment']['dia_december'];  ?>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_january']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_january']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_january'] + $diseasesxestablishment['Diseasesxestablishment']['dia_january']); ?></td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_february']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_february']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_february'] + $diseasesxestablishment['Diseasesxestablishment']['dia_february']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_march']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_march']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_march'] + $diseasesxestablishment['Diseasesxestablishment']['dia_march']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_april']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_april']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_april'] + $diseasesxestablishment['Diseasesxestablishment']['dia_april']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_may']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_may']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_may'] + $diseasesxestablishment['Diseasesxestablishment']['dia_may']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_june']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_june']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_june'] + $diseasesxestablishment['Diseasesxestablishment']['dia_june']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_july']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_july']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_july'] + $diseasesxestablishment['Diseasesxestablishment']['dia_july']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_august']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_august']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_august'] + $diseasesxestablishment['Diseasesxestablishment']['dia_august']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_september']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_september']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_september'] + $diseasesxestablishment['Diseasesxestablishment']['dia_september']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_october']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_october']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_october'] + $diseasesxestablishment['Diseasesxestablishment']['dia_october']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_november']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_november']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_november'] + $diseasesxestablishment['Diseasesxestablishment']['dia_november']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_december']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_december']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_december'] + $diseasesxestablishment['Diseasesxestablishment']['dia_december']); ?>&nbsp;</td>
                        <td><?php echo $total; ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['year']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php $region = $diseasesxestablishment['Diseasesxestablishment']['regions_id'] ?>
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $diseasesxestablishment['Diseasesxestablishment']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $diseasesxestablishment['Diseasesxestablishment']['id'], $region, $yer)); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $diseasesxestablishment['Diseasesxestablishment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $diseasesxestablishment['Diseasesxestablishment']['id']))); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $h_jan + $h_feb + $h_mar + $h_apr + $h_may + $h_jun + $h_jul + $h_aug + $h_sep + $h_oct + $h_nov + $h_decem + $d_jan + $d_feb + $d_mar + $d_apr + $d_may + $d_jun + $d_jul + $d_aug + $d_sep + $d_oct + $d_nov + $d_decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td><?php echo $h_jan;  ?></td>
                    <td><?php echo $d_jan;  ?></td>
                    <td><?php echo $h_jan + $d_jan; ?></td>
                    <td><?php echo $h_feb;  ?></td>
                    <td><?php echo $d_feb;  ?></td>
                    <td><?php echo $h_feb + $d_feb; ?></td>
                    <td><?php echo $h_mar;  ?></td>
                    <td><?php echo $d_mar;  ?></td>
                    <td><?php echo $h_mar + $d_mar; ?></td>
                    <td><?php echo $h_apr;  ?></td>
                    <td><?php echo $d_apr;  ?></td>
                    <td><?php echo $h_apr + $d_apr; ?></td>
                    <td><?php echo $h_may;  ?></td>
                    <td><?php echo $d_may;  ?></td>
                    <td><?php echo $h_may + $d_may; ?></td>
                    <td><?php echo $h_jun;  ?></td>
                    <td><?php echo $d_jun;  ?></td>
                    <td><?php echo $h_jun + $d_jun; ?></td>
                    <td><?php echo $h_jul;  ?></td>
                    <td><?php echo $d_jul;  ?></td>
                    <td><?php echo $h_jul + $d_jul; ?></td>
                    <td><?php echo $h_aug;  ?></td>
                    <td><?php echo $d_aug;  ?></td>
                    <td><?php echo $h_aug + $d_aug; ?></td>
                    <td><?php echo $h_sep;  ?></td>
                    <td><?php echo $d_sep;  ?></td>
                    <td><?php echo $h_sep + $d_sep; ?></td>
                    <td><?php echo $h_oct;  ?></td>
                    <td><?php echo $d_oct;  ?></td>
                    <td><?php echo $h_oct + $d_oct; ?></td>
                    <td><?php echo $h_nov;  ?></td>
                    <td><?php echo $d_nov;  ?></td>
                    <td><?php echo $h_nov + $d_nov; ?></td>
                    <td><?php echo $h_decem;  ?></td>
                    <td><?php echo $d_decem;  ?></td>
                    <td><?php echo $h_decem + $d_decem; ?></td>
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