<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Events', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="eventsxestablishments index">
    <h2>
        <center><?php echo __('Eventos de Notificacion - Establecimientos'); ?></center>
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th class="text-center" rowspan="2"><?php echo $this->Paginator->sort('id'); ?></th>
                    <th class="text-center" rowspan="2"><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
                    <th class="text-center" rowspan="2"><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
                    <th class="text-center" colspan="5">ENERO</th>
                    <th class="text-center" colspan="5">FEBRERO</th>
                    <th class="text-center" colspan="5">MARZO</th>
                    <th class="text-center" colspan="5">ABRIL</th>
                    <th class="text-center" colspan="5">MAYO</th>
                    <th class="text-center" colspan="5">JUNIO</th>
                    <th class="text-center" colspan="5">JULIO</th>
                    <th class="text-center" colspan="5">AGOSTO</th>
                    <th class="text-center" colspan="5">SEPTIEMBRE</th>
                    <th class="text-center" colspan="5">OCTUBRE</th>
                    <th class="text-center" colspan="5">NOVIEMBRE</th>
                    <th class="text-center" colspan="5">DICIEMBRE</th>
                    <th class="text-center" colspan="5">TOTAL ANUAL</th>
                </tr>
                <tr>
                    <th><?php echo $this->Paginator->sort('den_january', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_january', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_january', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_january', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_february', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_february', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_february', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_february', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_march', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_march', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_march', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_march', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_april', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_april', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_april', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_april', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_may', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_may', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_may', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_may', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_june', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_june', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_june', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_june', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_july', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_july', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_july', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_july', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_august', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_august', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_august', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_august', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_september', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_september', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_september', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_september', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_october', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_october', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_october', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_october', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_november', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_november', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_november', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_november', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_december', 'Dengue'); ?></th>
                    <th><?php echo $this->Paginator->sort('chi_december', 'Chikunguya'); ?></th>
                    <th><?php echo $this->Paginator->sort('zik_december', 'Zika'); ?></th>
                    <th><?php echo $this->Paginator->sort('c19_december', 'Covid-19'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventsxestablishments as $eventsxestablishment) : ?>
                    <tr>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo $this->Html->link($eventsxestablishment['Sibase']['sibase_name'], array('controller' => 'sibases', 'action' => 'view', $eventsxestablishment['Sibase']['id'])); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($eventsxestablishment['Establishment']['establishment_name'], array('controller' => 'establishments', 'action' => 'view', $eventsxestablishment['Establishment']['id'])); ?>
                        </td>
                        <?php $total = $eventsxestablishment['Eventsxestablishment']['den_january'] + $eventsxestablishment['Eventsxestablishment']['den_february'] + $eventsxestablishment['Eventsxestablishment']['den_march'] + $eventsxestablishment['Eventsxestablishment']['den_april'] + $eventsxestablishment['Eventsxestablishment']['den_may'] + $eventsxestablishment['Eventsxestablishment']['den_june'] + $eventsxestablishment['Eventsxestablishment']['den_july'] + $eventsxestablishment['Eventsxestablishment']['den_august'] + $eventsxestablishment['Eventsxestablishment']['den_september'] + $eventsxestablishment['Eventsxestablishment']['den_october'] + $eventsxestablishment['Eventsxestablishment']['den_november'] + $eventsxestablishment['Eventsxestablishment']['den_december'] + $eventsxestablishment['Eventsxestablishment']['chi_january'] + $eventsxestablishment['Eventsxestablishment']['chi_february'] + $eventsxestablishment['Eventsxestablishment']['chi_march'] + $eventsxestablishment['Eventsxestablishment']['chi_april'] + $eventsxestablishment['Eventsxestablishment']['chi_may'] + $eventsxestablishment['Eventsxestablishment']['chi_june'] + $eventsxestablishment['Eventsxestablishment']['chi_july'] + $eventsxestablishment['Eventsxestablishment']['chi_august'] + $eventsxestablishment['Eventsxestablishment']['chi_september'] + $eventsxestablishment['Eventsxestablishment']['chi_october'] + $eventsxestablishment['Eventsxestablishment']['chi_november'] + $eventsxestablishment['Eventsxestablishment']['chi_december'] + $eventsxestablishment['Eventsxestablishment']['zik_january'] + $eventsxestablishment['Eventsxestablishment']['zik_february'] + $eventsxestablishment['Eventsxestablishment']['zik_march'] + $eventsxestablishment['Eventsxestablishment']['zik_april'] + $eventsxestablishment['Eventsxestablishment']['zik_may'] + $eventsxestablishment['Eventsxestablishment']['zik_june'] + $eventsxestablishment['Eventsxestablishment']['zik_july'] + $eventsxestablishment['Eventsxestablishment']['zik_august'] + $eventsxestablishment['Eventsxestablishment']['zik_september'] + $eventsxestablishment['Eventsxestablishment']['zik_october'] + $eventsxestablishment['Eventsxestablishment']['zik_november'] + $eventsxestablishment['Eventsxestablishment']['zik_december'] + $eventsxestablishment['Eventsxestablishment']['c19_january'] + $eventsxestablishment['Eventsxestablishment']['c19_february'] + $eventsxestablishment['Eventsxestablishment']['c19_march'] + $eventsxestablishment['Eventsxestablishment']['c19_april'] + $eventsxestablishment['Eventsxestablishment']['c19_may'] + $eventsxestablishment['Eventsxestablishment']['c19_june'] + $eventsxestablishment['Eventsxestablishment']['c19_july'] + $eventsxestablishment['Eventsxestablishment']['c19_august'] + $eventsxestablishment['Eventsxestablishment']['c19_september'] + $eventsxestablishment['Eventsxestablishment']['c19_october'] + $eventsxestablishment['Eventsxestablishment']['c19_november'] + $eventsxestablishment['Eventsxestablishment']['c19_december'];  ?>

                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_january']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_january']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_january']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_january']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_january'] + $eventsxestablishment['Eventsxestablishment']['chi_january'] + $eventsxestablishment['Eventsxestablishment']['zik_january'] + $eventsxestablishment['Eventsxestablishment']['c19_january']); ?></td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_february']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_february']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_february']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_february']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_february'] + $eventsxestablishment['Eventsxestablishment']['chi_february'] + $eventsxestablishment['Eventsxestablishment']['zik_february'] + $eventsxestablishment['Eventsxestablishment']['c19_february']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_march']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_march']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_march']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_march']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_march'] + $eventsxestablishment['Eventsxestablishment']['chi_march'] + $eventsxestablishment['Eventsxestablishment']['zik_march'] + $eventsxestablishment['Eventsxestablishment']['c19_march']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_april']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_april']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_april']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_april']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_april'] + $eventsxestablishment['Eventsxestablishment']['chi_april'] + $eventsxestablishment['Eventsxestablishment']['zik_april'] + $eventsxestablishment['Eventsxestablishment']['c19_april']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_may']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_may']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_may']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_may']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_may'] + $eventsxestablishment['Eventsxestablishment']['chi_may'] + $eventsxestablishment['Eventsxestablishment']['zik_may'] + $eventsxestablishment['Eventsxestablishment']['c19_may']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_june']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_june']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_june']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_june']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_june'] + $eventsxestablishment['Eventsxestablishment']['chi_june'] + $eventsxestablishment['Eventsxestablishment']['zik_june'] + $eventsxestablishment['Eventsxestablishment']['c19_june']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_july']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_july']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_july']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_july']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_july'] + $eventsxestablishment['Eventsxestablishment']['chi_july'] + $eventsxestablishment['Eventsxestablishment']['zik_july'] + $eventsxestablishment['Eventsxestablishment']['c19_july']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_august']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_august']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_august']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_august']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_august'] + $eventsxestablishment['Eventsxestablishment']['chi_august'] + $eventsxestablishment['Eventsxestablishment']['zik_august'] + $eventsxestablishment['Eventsxestablishment']['c19_august']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_september']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_september']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_september']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_september']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_september'] + $eventsxestablishment['Eventsxestablishment']['chi_september'] + $eventsxestablishment['Eventsxestablishment']['zik_september'] + $eventsxestablishment['Eventsxestablishment']['c19_september']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_october']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_october']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_october']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_october']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_october'] + $eventsxestablishment['Eventsxestablishment']['chi_october'] + $eventsxestablishment['Eventsxestablishment']['zik_october'] + $eventsxestablishment['Eventsxestablishment']['c19_october']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_november']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_november']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_november']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_november']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_november'] + $eventsxestablishment['Eventsxestablishment']['chi_november'] + $eventsxestablishment['Eventsxestablishment']['zik_november'] + $eventsxestablishment['Eventsxestablishment']['c19_november']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_december']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['chi_december']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['zik_december']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['c19_december']); ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['den_december'] + $eventsxestablishment['Eventsxestablishment']['chi_december'] + $eventsxestablishment['Eventsxestablishment']['zik_december'] + $eventsxestablishment['Eventsxestablishment']['c19_december']); ?>&nbsp;</td>
                        <td><?php echo $total; ?>&nbsp;</td>
                        <td><?php echo h($eventsxestablishment['Eventsxestablishment']['year']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php $region = $eventsxestablishment['Eventsxestablishment']['regions_id'] ?>
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $eventsxestablishment['Eventsxestablishment']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventsxestablishment['Eventsxestablishment']['id'], $region, $yer)); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventsxestablishment['Eventsxestablishment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $eventsxestablishment['Eventsxestablishment']['id']))); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $d_jan + $d_feb + $d_mar + $d_apr + $d_may + $d_jun + $d_jul + $d_aug + $d_sep + $d_oct + $d_nov + $d_decem + $c_jan + $c_feb + $c_mar + $c_apr + $c_may + $c_jun + $c_jul + $c_aug + $c_sep + $c_oct + $c_nov + $c_decem + $z_jan + $z_feb + $z_mar + $z_apr + $z_may + $z_jun + $z_jul + $z_aug + $z_sep + $z_oct + $z_nov + $z_decem + $c1_jan + $c1_feb + $c1_mar + $c1_apr + $c1_may + $c1_jun + $c1_jul + $c1_aug + $c1_sep + $c1_oct + $c1_nov + $c1_decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td><?php echo $d_jan;  ?></td>
                    <td><?php echo $c_jan;  ?></td>
                    <td><?php echo $z_jan;  ?></td>
                    <td><?php echo $c1_jan;  ?></td>
                    <td><?php echo $d_jan + $c_jan + $z_jan + $c1_jan; ?></td>
                    <td><?php echo $d_feb;  ?></td>
                    <td><?php echo $c_feb;  ?></td>
                    <td><?php echo $z_feb;  ?></td>
                    <td><?php echo $c1_feb;  ?></td>
                    <td><?php echo $d_feb + $c_feb + $z_feb + $c1_feb; ?></td>
                    <td><?php echo $d_mar;  ?></td>
                    <td><?php echo $c_mar;  ?></td>
                    <td><?php echo $z_mar;  ?></td>
                    <td><?php echo $c1_mar;  ?></td>
                    <td><?php echo $d_mar + $c_mar + $z_mar + $c1_mar; ?></td>
                    <td><?php echo $d_apr;  ?></td>
                    <td><?php echo $c_apr;  ?></td>
                    <td><?php echo $z_apr;  ?></td>
                    <td><?php echo $c1_apr;  ?></td>
                    <td><?php echo $d_apr + $c_apr + $z_apr + $c1_apr; ?></td>
                    <td><?php echo $d_may;  ?></td>
                    <td><?php echo $c_may;  ?></td>
                    <td><?php echo $z_may;  ?></td>
                    <td><?php echo $c1_may;  ?></td>
                    <td><?php echo $d_may + $c_may + $z_may + $c1_may; ?></td>
                    <td><?php echo $d_jun;  ?></td>
                    <td><?php echo $c_jun;  ?></td>
                    <td><?php echo $z_jun;  ?></td>
                    <td><?php echo $c1_jun;  ?></td>
                    <td><?php echo $d_jun + $c_jun + $z_jun + $c1_jun; ?></td>
                    <td><?php echo $d_jul;  ?></td>
                    <td><?php echo $c_jul;  ?></td>
                    <td><?php echo $z_jul;  ?></td>
                    <td><?php echo $c1_jul;  ?></td>
                    <td><?php echo $d_jul + $c_jul + $z_jul + $c1_jul; ?></td>
                    <td><?php echo $d_aug;  ?></td>
                    <td><?php echo $c_aug;  ?></td>
                    <td><?php echo $z_aug;  ?></td>
                    <td><?php echo $c1_aug;  ?></td>
                    <td><?php echo $d_aug + $c_aug + $z_aug + $c1_aug; ?></td>
                    <td><?php echo $d_sep;  ?></td>
                    <td><?php echo $c_sep;  ?></td>
                    <td><?php echo $z_sep;  ?></td>
                    <td><?php echo $c1_sep;  ?></td>
                    <td><?php echo $d_sep + $c_sep + $z_sep + $c1_sep; ?></td>
                    <td><?php echo $d_oct;  ?></td>
                    <td><?php echo $c_oct;  ?></td>
                    <td><?php echo $z_oct;  ?></td>
                    <td><?php echo $c1_oct;  ?></td>
                    <td><?php echo $d_oct + $c_oct + $z_oct + $c1_oct; ?></td>
                    <td><?php echo $d_nov;  ?></td>
                    <td><?php echo $c_nov;  ?></td>
                    <td><?php echo $z_nov;  ?></td>
                    <td><?php echo $c1_nov;  ?></td>
                    <td><?php echo $d_nov + $c_nov + $z_nov + $c1_nov; ?></td>
                    <td><?php echo $d_decem;  ?></td>
                    <td><?php echo $c_decem;  ?></td>
                    <td><?php echo $z_decem;  ?></td>
                    <td><?php echo $c1_decem;  ?></td>
                    <td><?php echo $d_decem + $c_decem + $z_decem + $c1_decem; ?></td>
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