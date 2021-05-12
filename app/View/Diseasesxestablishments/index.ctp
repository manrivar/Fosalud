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
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('id'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('Total', 'Total Anual'); ?></th>
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
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_january', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_january', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_february', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_february', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_march', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_march', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_april', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_april', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_may', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_may', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_june', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_june', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_july', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_july', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_august', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_august', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_september', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_september', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_october', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_october', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_november', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_november', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('hip_december', 'Hipertension'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('dia_december', 'Diabetes Mellitus'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($diseasesxestablishments as $diseasesxestablishment) : ?>
                    <tr>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo h($diseasesxestablishment['Sibase']['sibase_name']); ?>
                        </td>
                        <td>
                            <?php $region = $diseasesxestablishment['Diseasesxestablishment']['regions_id'] ?>
<<<<<<< HEAD

                            <?php if($this->Session->read('Auth.User.acceso_id') <= 2):?>
                            <?php echo $this->Html->link($diseasesxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $diseasesxestablishment['Diseasesxestablishment']['id'], $region, $yer)); ?>
                            <?php elseif($this->Session->read('Auth.User.acceso_id') > 2):?>

                            <?php if($this->Session->read('Auth.User.regions_id')==$region && $this->Session->read('Auth.User.acceso_id') <= 3):?>
                                <?php echo $this->Html->link($diseasesxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $diseasesxestablishment['Diseasesxestablishment']['id'], $region, $yer)); ?>
                            <?php else: ?>
                                <?php echo h($diseasesxestablishment['Establishment']['establishment_name']); ?>
                            <?php endif; ?>
                            <?php endif; ?>

=======
                            <?php echo $this->Html->link($diseasesxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $diseasesxestablishment['Diseasesxestablishment']['id'], $region, $yer)); ?>
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
                        </td>
                        <?php $total = $diseasesxestablishment['Diseasesxestablishment']['hip_january'] + $diseasesxestablishment['Diseasesxestablishment']['hip_february'] + $diseasesxestablishment['Diseasesxestablishment']['hip_march'] + $diseasesxestablishment['Diseasesxestablishment']['hip_april'] + $diseasesxestablishment['Diseasesxestablishment']['hip_may'] + $diseasesxestablishment['Diseasesxestablishment']['hip_june'] + $diseasesxestablishment['Diseasesxestablishment']['hip_july'] + $diseasesxestablishment['Diseasesxestablishment']['hip_august'] + $diseasesxestablishment['Diseasesxestablishment']['hip_september'] + $diseasesxestablishment['Diseasesxestablishment']['hip_october'] + $diseasesxestablishment['Diseasesxestablishment']['hip_november'] + $diseasesxestablishment['Diseasesxestablishment']['hip_december'] + $diseasesxestablishment['Diseasesxestablishment']['dia_january'] + $diseasesxestablishment['Diseasesxestablishment']['dia_february'] + $diseasesxestablishment['Diseasesxestablishment']['dia_march'] + $diseasesxestablishment['Diseasesxestablishment']['dia_april'] + $diseasesxestablishment['Diseasesxestablishment']['dia_may'] + $diseasesxestablishment['Diseasesxestablishment']['dia_june'] + $diseasesxestablishment['Diseasesxestablishment']['dia_july'] + $diseasesxestablishment['Diseasesxestablishment']['dia_august'] + $diseasesxestablishment['Diseasesxestablishment']['dia_september'] + $diseasesxestablishment['Diseasesxestablishment']['dia_october'] + $diseasesxestablishment['Diseasesxestablishment']['dia_november'] + $diseasesxestablishment['Diseasesxestablishment']['dia_december'];  ?>
                        <td bgcolor="#CBEEF2"><?php echo $total; ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_january']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_january']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_january'] + $diseasesxestablishment['Diseasesxestablishment']['dia_january']); ?></td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_february']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_february']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_february'] + $diseasesxestablishment['Diseasesxestablishment']['dia_february']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_march']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_march']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_march'] + $diseasesxestablishment['Diseasesxestablishment']['dia_march']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_april']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_april']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_april'] + $diseasesxestablishment['Diseasesxestablishment']['dia_april']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_may']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_may']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_may'] + $diseasesxestablishment['Diseasesxestablishment']['dia_may']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_june']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_june']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_june'] + $diseasesxestablishment['Diseasesxestablishment']['dia_june']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_july']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_july']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_july'] + $diseasesxestablishment['Diseasesxestablishment']['dia_july']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_august']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_august']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_august'] + $diseasesxestablishment['Diseasesxestablishment']['dia_august']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_september']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_september']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_september'] + $diseasesxestablishment['Diseasesxestablishment']['dia_september']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_october']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_october']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_october'] + $diseasesxestablishment['Diseasesxestablishment']['dia_october']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_november']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_november']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_november'] + $diseasesxestablishment['Diseasesxestablishment']['dia_november']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_december']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['dia_december']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($diseasesxestablishment['Diseasesxestablishment']['hip_december'] + $diseasesxestablishment['Diseasesxestablishment']['dia_december']); ?>&nbsp;</td>
                        <td><?php echo h($diseasesxestablishment['Diseasesxestablishment']['year']); ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $h_jan + $h_feb + $h_mar + $h_apr + $h_may + $h_jun + $h_jul + $h_aug + $h_sep + $h_oct + $h_nov + $h_decem + $d_jan + $d_feb + $d_mar + $d_apr + $d_may + $d_jun + $d_jul + $d_aug + $d_sep + $d_oct + $d_nov + $d_decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td bgcolor="#AEEAF1"><?php echo $total2;  ?></td>
                    <td><?php echo $h_jan;  ?></td>
                    <td><?php echo $d_jan;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_jan + $d_jan; ?></td>
                    <td><?php echo $h_feb;  ?></td>
                    <td><?php echo $d_feb;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_feb + $d_feb; ?></td>
                    <td><?php echo $h_mar;  ?></td>
                    <td><?php echo $d_mar;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_mar + $d_mar; ?></td>
                    <td><?php echo $h_apr;  ?></td>
                    <td><?php echo $d_apr;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_apr + $d_apr; ?></td>
                    <td><?php echo $h_may;  ?></td>
                    <td><?php echo $d_may;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_may + $d_may; ?></td>
                    <td><?php echo $h_jun;  ?></td>
                    <td><?php echo $d_jun;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_jun + $d_jun; ?></td>
                    <td><?php echo $h_jul;  ?></td>
                    <td><?php echo $d_jul;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_jul + $d_jul; ?></td>
                    <td><?php echo $h_aug;  ?></td>
                    <td><?php echo $d_aug;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_aug + $d_aug; ?></td>
                    <td><?php echo $h_sep;  ?></td>
                    <td><?php echo $d_sep;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_sep + $d_sep; ?></td>
                    <td><?php echo $h_oct;  ?></td>
                    <td><?php echo $d_oct;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_oct + $d_oct; ?></td>
                    <td><?php echo $h_nov;  ?></td>
                    <td><?php echo $d_nov;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_nov + $d_nov; ?></td>
                    <td><?php echo $h_decem;  ?></td>
                    <td><?php echo $d_decem;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $h_decem + $d_decem; ?></td>
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