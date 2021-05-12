<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Vaccines', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="vaccinesxestablishments index">
    <h2>
        <center><?php echo __('Vacunas - Establecimientos'); ?></center>
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('id'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total Anual'); ?></th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">ENERO</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">FEBRERO</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">MARZO</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">ABRIL</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">MAYO</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">JUNIO</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">JULIO</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">AGOSTO</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">SEPTIEMBRE</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">OCTUBRE</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">NOVIEMBRE</th>
                    <th class="text-center" colspan="6" bgcolor="#AEEAF1">DICIEMBRE</th>
                </tr>
                <tr>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_january', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_january', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_january', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_january', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_january', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_february', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_february', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_february', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_february', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_february', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_march', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_march', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_march', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_march', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_march', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_april', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_april', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_april', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_april', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_april', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_may', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_may', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_may', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_may', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_may', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_june', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_june', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_june', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_june', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_june', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_july', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_july', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_july', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_july', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_july', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_august', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_august', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_august', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_august', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_august', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_september', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_september', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_september', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_september', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_september', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_october', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_october', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_october', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_october', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_november', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_november', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_november', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_november', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_november', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('niñ_december', 'Niños'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('adu_december', 'Adultos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('inf_december', 'Influenza'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ant_december', 'Antirrabica'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('c19_december', 'Covid-19') ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vaccinesxestablishments as $vaccinesxestablishment) : ?>
                    <tr>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo h($vaccinesxestablishment['Sibase']['sibase_name']); ?>
                        </td>
                        <td>
<<<<<<< HEAD
                        <?php $region = $vaccinesxestablishment['Vaccinesxestablishment']['regions_id'] ?>

                        <?php if($this->Session->read('Auth.User.acceso_id') <= 2):?>
                            <?php echo $this->Html->link($vaccinesxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $vaccinesxestablishment['Vaccinesxestablishment']['id'], $region, $yer)); ?>
                            <?php elseif($this->Session->read('Auth.User.acceso_id') > 2):?>

                            <?php if($this->Session->read('Auth.User.regions_id')==$region && $this->Session->read('Auth.User.acceso_id') <= 3):?>
                                <?php echo $this->Html->link($vaccinesxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $vaccinesxestablishment['Vaccinesxestablishment']['id'], $region, $yer)); ?>
                            <?php else: ?>
                                <?php echo h($vaccinesxestablishment['Establishment']['establishment_name']); ?>
                            <?php endif; ?>
                            <?php endif; ?>
=======
                            <?php $region = $vaccinesxestablishment['Vaccinesxestablishment']['regions_id'] ?>
                            <?php echo $this->Html->link($vaccinesxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $vaccinesxestablishment['Vaccinesxestablishment']['id'], $region, $yer)); ?>
>>>>>>> 8b50ffdec22aa4aec5e5dba4191863e7c8b039d1
                        </td>
                        <?php $total = $vaccinesxestablishment['Vaccinesxestablishment']['niñ_january'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_february'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_march'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_april'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_may'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_june'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_july'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_august'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_september'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_october'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_november'] + $vaccinesxestablishment['Vaccinesxestablishment']['niñ_december'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_january'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_february'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_march'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_april'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_may'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_june'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_july'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_august'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_september'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_october'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_november'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_december'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_january'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_february'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_march'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_april'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_may'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_june'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_july'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_august'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_september'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_october'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_november'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_december'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_january'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_february'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_march'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_april'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_may'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_june'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_july'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_august'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_september'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_october'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_november'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_december'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_january'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_february'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_march'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_april'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_may'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_june'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_july'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_august'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_september'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_october'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_november'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_december'];  ?>

                        <td bgcolor="#CBEEF2"><?php echo $total; ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_january']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_january']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_january']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_january']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_january']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_january'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_january'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_january'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_january'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_january']); ?></td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_february']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_february']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_february']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_february']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_february']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_february'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_february'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_february'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_february'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_february']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_march']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_march']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_march']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_march']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_march']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_march'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_march'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_march'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_march'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_march']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_april']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_april']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_april']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_april']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_april']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_april'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_april'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_april'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_april'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_april']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_may']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_may']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_may']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_may']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_may']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_may'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_may'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_may'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_may'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_may']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_june']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_june']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_june']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_june']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_june']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_june'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_june'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_june'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_june'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_june']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_july']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_july']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_july']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_july']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_july']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_july'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_july'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_july'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_july'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_july']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_august']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_august']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_august']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_august']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_august']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_august'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_august'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_august'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_august'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_august']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_september']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_september']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_september']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_september']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_september']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_september'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_september'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_september'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_september'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_september']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_october']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_october']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_october']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_october']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_october']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_october'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_october'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_october'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_october'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_october']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_november']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_november']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_november']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_november']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_november']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_november'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_november'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_november'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_november'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_november']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_december']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['adu_december']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['inf_december']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['ant_december']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['c19_december']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['niñ_december'] + $vaccinesxestablishment['Vaccinesxestablishment']['adu_december'] + $vaccinesxestablishment['Vaccinesxestablishment']['inf_december'] + $vaccinesxestablishment['Vaccinesxestablishment']['ant_december'] + $vaccinesxestablishment['Vaccinesxestablishment']['c19_december']); ?>&nbsp;</td>
                        <td><?php echo h($vaccinesxestablishment['Vaccinesxestablishment']['year']); ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $n_jan + $n_feb + $n_mar + $n_apr + $n_may + $n_jun + $n_jul + $n_aug + $n_sep + $n_oct + $n_nov + $n_decem + $a_jan + $a_feb + $a_mar + $a_apr + $a_may + $a_jun + $a_jul + $a_aug + $a_sep + $a_oct + $a_nov + $a_decem + $i_jan + $i_feb + $i_mar + $i_apr + $i_may + $i_jun + $i_jul + $i_aug + $i_sep + $i_oct + $i_nov + $i_decem + $an_jan + $an_feb + $an_mar + $an_apr + $an_may + $an_jun + $an_jul + $an_aug + $an_sep + $an_oct + $an_nov + $an_decem + $c_jan + $c_feb + $c_mar + $c_apr + $c_may + $c_jun + $c_jul + $c_aug + $c_sep + $c_oct + $c_nov + $c_decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td bgcolor="#AEEAF1"><?php echo $total2;  ?></td>
                    <td><?php echo $n_jan;  ?></td>
                    <td><?php echo $a_jan;  ?></td>
                    <td><?php echo $i_jan;  ?></td>
                    <td><?php echo $an_jan;  ?></td>
                    <td><?php echo $c_jan;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_jan + $a_jan + $i_jan + $an_jan + $c_jan; ?></td>
                    <td><?php echo $n_feb;  ?></td>
                    <td><?php echo $a_feb;  ?></td>
                    <td><?php echo $i_feb;  ?></td>
                    <td><?php echo $an_feb;  ?></td>
                    <td><?php echo $c_feb;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_feb + $a_feb + $i_feb + $an_feb + $c_feb; ?></td>
                    <td><?php echo $n_mar;  ?></td>
                    <td><?php echo $a_mar;  ?></td>
                    <td><?php echo $i_mar;  ?></td>
                    <td><?php echo $an_mar;  ?></td>
                    <td><?php echo $c_mar;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_mar + $a_mar + $i_mar + $an_mar + $c_mar; ?></td>
                    <td><?php echo $n_apr;  ?></td>
                    <td><?php echo $a_apr;  ?></td>
                    <td><?php echo $i_apr;  ?></td>
                    <td><?php echo $an_apr;  ?></td>
                    <td><?php echo $c_apr;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_apr + $a_apr + $i_apr + $an_apr + $c_apr; ?></td>
                    <td><?php echo $n_may;  ?></td>
                    <td><?php echo $a_may;  ?></td>
                    <td><?php echo $i_may;  ?></td>
                    <td><?php echo $an_may;  ?></td>
                    <td><?php echo $c_may;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_may + $a_may + $i_may + $an_may + $c_may; ?></td>
                    <td><?php echo $n_jun;  ?></td>
                    <td><?php echo $a_jun;  ?></td>
                    <td><?php echo $i_jun;  ?></td>
                    <td><?php echo $an_jun;  ?></td>
                    <td><?php echo $c_jun;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_jun + $a_jun + $i_jun + $an_jun + $c_jun; ?></td>
                    <td><?php echo $n_jul;  ?></td>
                    <td><?php echo $a_jul;  ?></td>
                    <td><?php echo $i_jul;  ?></td>
                    <td><?php echo $an_jul;  ?></td>
                    <td><?php echo $c_jul;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_jul + $a_jul + $i_jul + $an_jul + $c_jul; ?></td>
                    <td><?php echo $n_aug;  ?></td>
                    <td><?php echo $a_aug;  ?></td>
                    <td><?php echo $i_aug;  ?></td>
                    <td><?php echo $an_aug;  ?></td>
                    <td><?php echo $c_aug;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_aug + $a_aug + $i_aug + $an_aug + $c_aug; ?></td>
                    <td><?php echo $n_sep;  ?></td>
                    <td><?php echo $a_sep;  ?></td>
                    <td><?php echo $i_sep;  ?></td>
                    <td><?php echo $an_sep;  ?></td>
                    <td><?php echo $c_sep;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_sep + $a_sep + $i_sep + $an_sep + $c_sep; ?></td>
                    <td><?php echo $n_oct;  ?></td>
                    <td><?php echo $a_oct;  ?></td>
                    <td><?php echo $i_oct;  ?></td>
                    <td><?php echo $an_oct;  ?></td>
                    <td><?php echo $c_oct;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_oct + $a_oct + $i_oct + $an_oct + $c_oct; ?></td>
                    <td><?php echo $n_nov;  ?></td>
                    <td><?php echo $a_nov;  ?></td>
                    <td><?php echo $i_nov;  ?></td>
                    <td><?php echo $an_nov;  ?></td>
                    <td><?php echo $c_nov;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_nov + $a_nov + $i_nov + $an_nov + $c_nov; ?></td>
                    <td><?php echo $n_decem;  ?></td>
                    <td><?php echo $a_decem;  ?></td>
                    <td><?php echo $i_decem;  ?></td>
                    <td><?php echo $an_decem;  ?></td>
                    <td><?php echo $c_decem;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $n_decem + $a_decem + $i_decem + $an_decem + $c_decem; ?></td>
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