<div class="col-lg-12 col-xs-12 col-sm-12">
  <ol class="breadcrumb">
    <li>
      <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Clinicalexams', 'action' => 'index?yir=' . $yer)); ?>
    </li>
  </ol>
</div>

<div class="cexestablishments index">
  <h2>
    <center><?php echo __('Examenes Clinicos - Establecimientos'); ?></center>
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
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_january', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_january', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_february', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_february', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_march', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_march', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_april', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_april', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_may', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_may', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_june', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_june', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_july', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_july', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_august', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_august', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_september', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_september', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_october', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_october', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_november', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_november', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('cit_december', 'Citologia'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('mam_december', 'Examenes de Mama'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cexestablishments as $cexestablishment) : ?>
          <tr>
            <td><?php echo h($cexestablishment['Cexestablishment']['id']); ?>&nbsp;</td>
            <td>
              <?php echo h($cexestablishment['Sibase']['sibase_name']); ?>
            </td>
            <td>
              <?php $region = $cexestablishment['Cexestablishment']['regions_id'] ?>
              <?php echo $this->Html->link($cexestablishment['Establishment']['establishment_name'], array('action' => 'edit', $cexestablishment['Cexestablishment']['id'], $region, $yer)); ?>
            </td>
            <?php $total = $cexestablishment['Cexestablishment']['cit_january'] + $cexestablishment['Cexestablishment']['cit_february'] + $cexestablishment['Cexestablishment']['cit_march'] + $cexestablishment['Cexestablishment']['cit_april'] + $cexestablishment['Cexestablishment']['cit_may'] + $cexestablishment['Cexestablishment']['cit_june'] + $cexestablishment['Cexestablishment']['cit_july'] + $cexestablishment['Cexestablishment']['cit_august'] + $cexestablishment['Cexestablishment']['cit_september'] + $cexestablishment['Cexestablishment']['cit_october'] + $cexestablishment['Cexestablishment']['cit_november'] + $cexestablishment['Cexestablishment']['cit_december'] + $cexestablishment['Cexestablishment']['mam_january'] + $cexestablishment['Cexestablishment']['mam_february'] + $cexestablishment['Cexestablishment']['mam_march'] + $cexestablishment['Cexestablishment']['mam_april'] + $cexestablishment['Cexestablishment']['mam_may'] + $cexestablishment['Cexestablishment']['mam_june'] + $cexestablishment['Cexestablishment']['mam_july'] + $cexestablishment['Cexestablishment']['mam_august'] + $cexestablishment['Cexestablishment']['mam_september'] + $cexestablishment['Cexestablishment']['mam_october'] + $cexestablishment['Cexestablishment']['mam_november'] + $cexestablishment['Cexestablishment']['mam_december'];  ?>
            <td bgcolor="#CBEEF2"><?php echo $total; ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_january']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_january']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_january'] + $cexestablishment['Cexestablishment']['mam_january']); ?></td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_february']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_february']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_february'] + $cexestablishment['Cexestablishment']['mam_february']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_march']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_march']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_march'] + $cexestablishment['Cexestablishment']['mam_march']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_april']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_april']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_april'] + $cexestablishment['Cexestablishment']['mam_april']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_may']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_may']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_may'] + $cexestablishment['Cexestablishment']['mam_may']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_june']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_june']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_june'] + $cexestablishment['Cexestablishment']['mam_june']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_july']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_july']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_july'] + $cexestablishment['Cexestablishment']['mam_july']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_august']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_august']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_august'] + $cexestablishment['Cexestablishment']['mam_august']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_september']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_september']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_september'] + $cexestablishment['Cexestablishment']['mam_september']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_october']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_october']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_october'] + $cexestablishment['Cexestablishment']['mam_october']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_november']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_november']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_november'] + $cexestablishment['Cexestablishment']['mam_november']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['cit_december']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['mam_december']); ?>&nbsp;</td>
            <td bgcolor="#CBEEF2"><?php echo h($cexestablishment['Cexestablishment']['cit_december'] + $cexestablishment['Cexestablishment']['mam_december']); ?>&nbsp;</td>
            <td><?php echo h($cexestablishment['Cexestablishment']['year']); ?>&nbsp;</td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <?php $total2 = $ci_jan + $ci_feb + $ci_mar + $ci_apr + $ci_may + $ci_jun + $ci_jul + $ci_aug + $ci_sep + $ci_oct + $ci_nov + $ci_decem + $mam_jan + $mam_feb + $mam_mar + $mam_apr + $mam_may + $mam_jun + $mam_jul + $mam_aug + $mam_sep + $mam_oct + $mam_nov + $mam_decem; ?>
        <tr>
          <td colspan="3"> Total </td>
          <td bgcolor="#AEEAF1"><?php echo $total2;  ?></td>
          <td><?php echo $ci_jan;  ?></td>
          <td><?php echo $mam_jan;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_jan + $mam_jan; ?></td>
          <td><?php echo $ci_feb;  ?></td>
          <td><?php echo $mam_feb;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_feb + $mam_feb; ?></td>
          <td><?php echo $ci_mar;  ?></td>
          <td><?php echo $mam_mar;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_mar + $mam_mar; ?></td>
          <td><?php echo $ci_apr;  ?></td>
          <td><?php echo $mam_apr;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_apr + $mam_apr; ?></td>
          <td><?php echo $ci_may;  ?></td>
          <td><?php echo $mam_may;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_may + $mam_may; ?></td>
          <td><?php echo $ci_jun;  ?></td>
          <td><?php echo $mam_jun;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_jun + $mam_jun; ?></td>
          <td><?php echo $ci_jul;  ?></td>
          <td><?php echo $mam_jul;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_jul + $mam_jul; ?></td>
          <td><?php echo $ci_aug;  ?></td>
          <td><?php echo $mam_aug;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_aug + $mam_aug; ?></td>
          <td><?php echo $ci_sep;  ?></td>
          <td><?php echo $mam_sep;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_sep + $mam_sep; ?></td>
          <td><?php echo $ci_oct;  ?></td>
          <td><?php echo $mam_oct;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_oct + $mam_oct; ?></td>
          <td><?php echo $ci_nov;  ?></td>
          <td><?php echo $mam_nov;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_nov + $mam_nov; ?></td>
          <td><?php echo $ci_decem;  ?></td>
          <td><?php echo $mam_decem;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $ci_decem + $mam_decem; ?></td>
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