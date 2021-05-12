<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Odons', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>
<div class="odonxestablishments index">
    <h2>
        <center><?php echo __('Odontologia - Establecimientos'); ?></center>
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



                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_january', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_january', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_january', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_january', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_january', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_february', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_february', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_february', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_february', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_february', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_march', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_march', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_march', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_march', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_march', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_april', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_april', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_april', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_april', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_april', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_may', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_may', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_may', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_may', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_may', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_june', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_june', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_june', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_june', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_june', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_july', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_july', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_july', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_july', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_july', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_august', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_august', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_august', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_august', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_august', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_september', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_september', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_september', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_september', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_september', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_october', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_october', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_october', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_october', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_october', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_november', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_november', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_november', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_november', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_november', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpac_december', 'Total de Pacientes'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('totpro_december', 'Total de Procedimientos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('rec_december', 'Recetas Despachadas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cha_december', 'Charlas'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('con_december', 'Consejerias'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($odonxestablishments as $odonxestablishment) : ?>
                    <tr>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo h($odonxestablishment['Sibase']['sibase_name']); ?>
                        </td>
                        <td>
                        <?php $region = $odonxestablishment['Odonxestablishment']['regions_id'] ?>

                        <?php if($this->Session->read('Auth.User.acceso_id') <= 2):?>
                            <?php echo $this->Html->link($odonxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $odonxestablishment['Odonxestablishment']['id'], $region, $yer)); ?>
                            <?php elseif($this->Session->read('Auth.User.acceso_id') > 2):?>

                            <?php if($this->Session->read('Auth.User.regions_id')==$region && $this->Session->read('Auth.User.acceso_id') <= 3):?>
                                <?php echo $this->Html->link($odonxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $odonxestablishment['Odonxestablishment']['id'], $region, $yer)); ?>
                            <?php else: ?>
                                <?php echo h($odonxestablishment['Establishment']['establishment_name']); ?>
                            <?php endif; ?>
                            <?php endif; ?>
                        </td>
                         <?php $total = $odonxestablishment['Odonxestablishment']['totpac_january'] + $odonxestablishment['Odonxestablishment']['totpac_february'] + $odonxestablishment['Odonxestablishment']['totpac_march'] + $odonxestablishment['Odonxestablishment']['totpac_april'] + $odonxestablishment['Odonxestablishment']['totpac_may'] + $odonxestablishment['Odonxestablishment']['totpac_june'] + $odonxestablishment['Odonxestablishment']['totpac_july'] + $odonxestablishment['Odonxestablishment']['totpac_august'] + $odonxestablishment['Odonxestablishment']['totpac_september'] + $odonxestablishment['Odonxestablishment']['totpac_october'] + $odonxestablishment['Odonxestablishment']['totpac_november'] + $odonxestablishment['Odonxestablishment']['totpac_december'] + $odonxestablishment['Odonxestablishment']['totpro_january'] + $odonxestablishment['Odonxestablishment']['totpro_february'] + $odonxestablishment['Odonxestablishment']['totpro_march'] + $odonxestablishment['Odonxestablishment']['totpro_april'] + $odonxestablishment['Odonxestablishment']['totpro_may'] + $odonxestablishment['Odonxestablishment']['totpro_june'] + $odonxestablishment['Odonxestablishment']['totpro_july'] + $odonxestablishment['Odonxestablishment']['totpro_august'] + $odonxestablishment['Odonxestablishment']['totpro_september'] + $odonxestablishment['Odonxestablishment']['totpro_october'] + $odonxestablishment['Odonxestablishment']['totpro_november'] + $odonxestablishment['Odonxestablishment']['totpro_december'] + $odonxestablishment['Odonxestablishment']['rec_january'] + $odonxestablishment['Odonxestablishment']['rec_february'] + $odonxestablishment['Odonxestablishment']['rec_march'] + $odonxestablishment['Odonxestablishment']['rec_april'] + $odonxestablishment['Odonxestablishment']['rec_may'] + $odonxestablishment['Odonxestablishment']['rec_june'] + $odonxestablishment['Odonxestablishment']['rec_july'] + $odonxestablishment['Odonxestablishment']['rec_august'] + $odonxestablishment['Odonxestablishment']['rec_september'] + $odonxestablishment['Odonxestablishment']['rec_october'] + $odonxestablishment['Odonxestablishment']['rec_november'] + $odonxestablishment['Odonxestablishment']['rec_december'] + $odonxestablishment['Odonxestablishment']['cha_january'] + $odonxestablishment['Odonxestablishment']['cha_february'] + $odonxestablishment['Odonxestablishment']['cha_march'] + $odonxestablishment['Odonxestablishment']['cha_april'] + $odonxestablishment['Odonxestablishment']['cha_may'] + $odonxestablishment['Odonxestablishment']['cha_june'] + $odonxestablishment['Odonxestablishment']['cha_july'] + $odonxestablishment['Odonxestablishment']['cha_august'] + $odonxestablishment['Odonxestablishment']['cha_september'] + $odonxestablishment['Odonxestablishment']['cha_october'] + $odonxestablishment['Odonxestablishment']['cha_november'] + $odonxestablishment['Odonxestablishment']['cha_december'] + $odonxestablishment['Odonxestablishment']['con_january'] + $odonxestablishment['Odonxestablishment']['con_february'] + $odonxestablishment['Odonxestablishment']['con_march'] + $odonxestablishment['Odonxestablishment']['con_april'] + $odonxestablishment['Odonxestablishment']['con_may'] + $odonxestablishment['Odonxestablishment']['con_june'] + $odonxestablishment['Odonxestablishment']['con_july'] + $odonxestablishment['Odonxestablishment']['con_august'] + $odonxestablishment['Odonxestablishment']['con_september'] + $odonxestablishment['Odonxestablishment']['con_october'] + $odonxestablishment['Odonxestablishment']['con_november'] + $odonxestablishment['Odonxestablishment']['con_december'];  ?>
                        <td bgcolor="#CBEEF2"><?php echo $total; ?>&nbsp;</td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_january']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_january']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_january']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_january']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_january']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_january'] + $odonxestablishment['Odonxestablishment']['totpro_january'] + $odonxestablishment['Odonxestablishment']['rec_january'] + $odonxestablishment['Odonxestablishment']['cha_january'] + $odonxestablishment['Odonxestablishment']['con_january']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_february']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_february']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_february']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_february']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_february']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_february'] + $odonxestablishment['Odonxestablishment']['totpro_february'] + $odonxestablishment['Odonxestablishment']['rec_february'] + $odonxestablishment['Odonxestablishment']['cha_february'] + $odonxestablishment['Odonxestablishment']['con_february']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_march']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_march']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_march']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_march']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_march']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_march'] + $odonxestablishment['Odonxestablishment']['totpro_march'] + $odonxestablishment['Odonxestablishment']['rec_march'] + $odonxestablishment['Odonxestablishment']['cha_march'] + $odonxestablishment['Odonxestablishment']['con_march']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_april']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_april']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_april']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_april']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_april']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_april'] + $odonxestablishment['Odonxestablishment']['totpro_april'] + $odonxestablishment['Odonxestablishment']['rec_april'] + $odonxestablishment['Odonxestablishment']['cha_april'] + $odonxestablishment['Odonxestablishment']['con_april']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_may']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_may']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_may']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_may']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_may']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_may'] + $odonxestablishment['Odonxestablishment']['totpro_may'] + $odonxestablishment['Odonxestablishment']['rec_may'] + $odonxestablishment['Odonxestablishment']['cha_may'] + $odonxestablishment['Odonxestablishment']['con_may']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_june']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_june']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_june']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_june']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_june']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_june'] + $odonxestablishment['Odonxestablishment']['totpro_june'] + $odonxestablishment['Odonxestablishment']['rec_june'] + $odonxestablishment['Odonxestablishment']['cha_june'] + $odonxestablishment['Odonxestablishment']['con_june']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_july']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_july']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_july']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_july']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_july']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_july'] + $odonxestablishment['Odonxestablishment']['totpro_july'] + $odonxestablishment['Odonxestablishment']['rec_july'] + $odonxestablishment['Odonxestablishment']['cha_july'] + $odonxestablishment['Odonxestablishment']['con_july']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_august']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_august']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_august']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_august']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_august']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_august'] + $odonxestablishment['Odonxestablishment']['totpro_august'] + $odonxestablishment['Odonxestablishment']['rec_august'] + $odonxestablishment['Odonxestablishment']['cha_august'] + $odonxestablishment['Odonxestablishment']['con_august']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_september']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_september']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_september']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_september']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_september']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_september'] + $odonxestablishment['Odonxestablishment']['totpro_september'] + $odonxestablishment['Odonxestablishment']['rec_september'] + $odonxestablishment['Odonxestablishment']['cha_september'] + $odonxestablishment['Odonxestablishment']['con_september']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_october']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_october']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_october']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_october']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_october']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_october'] + $odonxestablishment['Odonxestablishment']['totpro_october'] + $odonxestablishment['Odonxestablishment']['rec_october'] + $odonxestablishment['Odonxestablishment']['cha_october'] + $odonxestablishment['Odonxestablishment']['con_october']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_november']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_november']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_november']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_november']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_november']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_november'] + $odonxestablishment['Odonxestablishment']['totpro_november'] + $odonxestablishment['Odonxestablishment']['rec_november'] + $odonxestablishment['Odonxestablishment']['cha_november'] + $odonxestablishment['Odonxestablishment']['con_november']); ?></td>

                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpac_december']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['totpro_december']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['rec_december']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['cha_december']); ?>&nbsp;</td>
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['con_december']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($odonxestablishment['Odonxestablishment']['totpac_december'] + $odonxestablishment['Odonxestablishment']['totpro_december'] + $odonxestablishment['Odonxestablishment']['rec_december'] + $odonxestablishment['Odonxestablishment']['cha_december'] + $odonxestablishment['Odonxestablishment']['con_december']); ?></td> 
                        <td><?php echo h($odonxestablishment['Odonxestablishment']['year']); ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $totpac_jan + $totpac_feb + $totpac_mar + $totpac_apr + $totpac_may + $totpac_jun + $totpac_jul + $totpac_aug + $totpac_sep + $totpac_oct + $totpac_nov + $totpac_decem + $totpro_jan + $totpro_feb + $totpro_mar + $totpro_apr + $totpro_may + $totpro_jun + $totpro_jul + $totpro_aug + $totpro_sep + $totpro_oct + $totpro_nov + $totpro_decem + $rec_jan + $rec_feb + $rec_mar + $rec_apr + $rec_may + $rec_jun + $rec_jul + $rec_aug + $rec_sep + $rec_oct + $rec_nov + $rec_decem + $cha_jan + $cha_feb + $cha_mar + $cha_apr + $cha_may + $cha_jun + $cha_jul + $cha_aug + $cha_sep + $cha_oct + $cha_nov + $cha_decem + $con_jan + $con_feb + $con_mar + $con_apr + $con_may + $con_jun + $con_jul + $con_aug + $con_sep + $con_oct + $con_nov + $con_decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td bgcolor="#AEEAF1"><?php echo $total2;  ?></td>
                    <td><?php echo $totpac_jan;  ?></td>
                    <td><?php echo $totpro_jan;  ?></td>
                    <td><?php echo $rec_jan;  ?></td>
                    <td><?php echo $cha_jan;  ?></td>
                    <td><?php echo $con_jan;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_jan + $totpro_jan + $rec_jan + $cha_jan + $con_jan; ?></td>
                    <td><?php echo $totpac_feb;  ?></td>
                    <td><?php echo $totpro_feb;  ?></td>
                    <td><?php echo $rec_feb;  ?></td>
                    <td><?php echo $cha_feb;  ?></td>
                    <td><?php echo $con_feb;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_feb + $totpro_feb + $rec_feb + $cha_feb + $con_feb; ?></td>
                    <td><?php echo $totpac_mar;  ?></td>
                    <td><?php echo $totpro_mar;  ?></td>
                    <td><?php echo $rec_mar;  ?></td>
                    <td><?php echo $cha_mar;  ?></td>
                    <td><?php echo $con_mar;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_mar + $totpro_mar + $rec_mar + $cha_mar + $con_mar; ?></td>
                    <td><?php echo $totpac_apr;  ?></td>
                    <td><?php echo $totpro_apr;  ?></td>
                    <td><?php echo $rec_apr;  ?></td>
                    <td><?php echo $cha_apr;  ?></td>
                    <td><?php echo $con_apr;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_apr + $totpro_apr + $rec_apr + $cha_apr + $con_apr; ?></td>
                    <td><?php echo $totpac_may;  ?></td>
                    <td><?php echo $totpro_may;  ?></td>
                    <td><?php echo $rec_may;  ?></td>
                    <td><?php echo $cha_may;  ?></td>
                    <td><?php echo $con_may;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_may + $totpro_may + $rec_may + $cha_may + $con_may; ?></td>
                    <td><?php echo $totpac_jun;  ?></td>
                    <td><?php echo $totpro_jun;  ?></td>
                    <td><?php echo $rec_jun;  ?></td>
                    <td><?php echo $cha_jun;  ?></td>
                    <td><?php echo $con_jun;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_jun + $totpro_jun + $rec_jun + $cha_jun + $con_jun; ?></td>
                    <td><?php echo $totpac_jul;  ?></td>
                    <td><?php echo $totpro_jul;  ?></td>
                    <td><?php echo $rec_jul;  ?></td>
                    <td><?php echo $cha_jul;  ?></td>
                    <td><?php echo $con_jul;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_jul + $totpro_jul + $rec_jul + $cha_jul + $con_jul; ?></td>
                    <td><?php echo $totpac_aug;  ?></td>
                    <td><?php echo $totpro_aug;  ?></td>
                    <td><?php echo $rec_aug;  ?></td>
                    <td><?php echo $cha_aug;  ?></td>
                    <td><?php echo $con_aug;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_aug + $totpro_aug + $rec_aug + $cha_aug + $con_aug; ?></td>
                    <td><?php echo $totpac_sep;  ?></td>
                    <td><?php echo $totpro_sep;  ?></td>
                    <td><?php echo $rec_sep;  ?></td>
                    <td><?php echo $cha_sep;  ?></td>
                    <td><?php echo $con_sep;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_sep + $totpro_sep + $rec_sep + $cha_sep + $con_sep; ?></td>
                    <td><?php echo $totpac_oct;  ?></td>
                    <td><?php echo $totpro_oct;  ?></td>
                    <td><?php echo $rec_oct;  ?></td>
                    <td><?php echo $cha_oct;  ?></td>
                    <td><?php echo $con_oct;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_oct + $totpro_oct + $rec_oct + $cha_oct + $con_oct; ?></td>
                    <td><?php echo $totpac_nov;  ?></td>
                    <td><?php echo $totpro_nov;  ?></td>
                    <td><?php echo $rec_nov;  ?></td>
                    <td><?php echo $cha_nov;  ?></td>
                    <td><?php echo $con_nov;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_nov + $totpro_nov + $rec_nov + $cha_nov + $con_nov; ?></td>
                    <td><?php echo $totpac_decem;  ?></td>
                    <td><?php echo $totpro_decem;  ?></td>
                    <td><?php echo $rec_decem;  ?></td>
                    <td><?php echo $cha_decem;  ?></td>
                    <td><?php echo $con_decem;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $totpac_decem + $totpro_decem + $rec_decem + $con_decem; ?></td>
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