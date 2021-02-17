<div class="col-lg-12 col-xs-12 col-sm-12">
  <ol class="breadcrumb">
    <li>
      <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Maternalhealingcares', 'action' => 'index?yir=' . $yer)); ?>
    </li>
  </ol>
</div>

<div class="maternalhcxestablishments index">
  <h2>
    <center><?php echo __('Atencion Materna - Establecimientos'); ?></center>
  </h2>
  <div class="table-responsive">
    <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('id'); ?></th>
          <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
          <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
          <th class="text-center" rowspan="3" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total Anual'); ?></th>
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
        <?php foreach ($maternalhcxestablishments as $maternalhcxestablishment) : ?>
          <tr>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['id']); ?>&nbsp;</td>
            <td>
              <?php echo h($maternalhcxestablishment['Sibase']['sibase_name']);?>
            </td>
            <td>
              <?php $region = $maternalhcxestablishment['Maternalhcxestablishment']['regions_id'] ?>
              <?php echo $this->Html->link($maternalhcxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $maternalhcxestablishment['Maternalhcxestablishment']['id'], $region, $yer)); ?>
            </td>
            <?php $total = $maternalhcxestablishment['Maternalhcxestablishment']['ins_january'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_february'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_march'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_april'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_may'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_june'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_july'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_august'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_september'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_october'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_november'] + $maternalhcxestablishment['Maternalhcxestablishment']['ins_december'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_january'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_february'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_march'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_april'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_may'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_june'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_july'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_august'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_september'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_october'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_november'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_december'];  ?>
            <td bgcolor="#AEEAF1"><?php echo $total; ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_january']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_january']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_january'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_january']); ?></td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_february']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_february']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_february'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_february']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_march']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_march']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_march'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_march']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_april']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_april']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_april'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_april']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_may']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_may']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_may'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_may']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_june']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_june']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_june'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_june']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_july']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_july']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_july'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_july']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_august']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_august']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_august'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_august']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_september']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_september']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_september'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_september']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_october']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_october']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_october'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_october']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_november']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_november']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_november'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_november']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_december']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['con_december']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['ins_december'] + $maternalhcxestablishment['Maternalhcxestablishment']['con_december']); ?>&nbsp;</td>
            <td><?php echo h($maternalhcxestablishment['Maternalhcxestablishment']['year']); ?>&nbsp;</td>
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