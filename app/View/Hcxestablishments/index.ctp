<div class="col-lg-12 col-xs-12 col-sm-12">
  <ol class="breadcrumb">
    <li>
      <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Healingcares', 'action' => 'index?yir=' . $yer)); ?>
    </li>
  </ol>
</div>

<div class="hcxestablishments index">
  <h2>
    <center><?php echo __('Atencion Curativa - Establecimientos'); ?></center>
  </h2>
  <div class="table-responsive">
    <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th class="text-center" rowspan="2"><?php echo $this->Paginator->sort('id'); ?></th>
          <th class="text-center" rowspan="2"><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
          <th class="text-center" rowspan="2"><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
          <th class="text-center" colspan="4">ENERO</th>
          <th class="text-center" colspan="4">FEBRERO</th>
          <th class="text-center" colspan="4">MARZO</th>
          <th class="text-center" colspan="4">ABRIL</th>
          <th class="text-center" colspan="4">MAYO</th>
          <th class="text-center" colspan="4">JUNIO</th>
          <th class="text-center" colspan="4">JULIO</th>
          <th class="text-center" colspan="4">AGOSTO</th>
          <th class="text-center" colspan="4">SEPTIEMBRE</th>
          <th class="text-center" colspan="4">OCTUBRE</th>
          <th class="text-center" colspan="4">NOVIEMBRE</th>
          <th class="text-center" colspan="4">DICIEMBRE</th>
          <th class="text-center" colspan="3">TOTAL ANUAL</th>
        </tr>
        <tr>



          <th><?php echo $this->Paginator->sort('con_january', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_january', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_january', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_february', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_february', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_february', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_march', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_march', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_march', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_april', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_april', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_april', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_may', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_may', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_may', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_june', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_june', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_june', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_july', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_july', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_july', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_august', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_august', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_august', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_september', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_september', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_september', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_october', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_october', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_october', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_november', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_november', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_november', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('con_december', 'Consulta Externa'); ?></th>
          <th><?php echo $this->Paginator->sort('eme_december', 'Emergencia'); ?></th>
          <th><?php echo $this->Paginator->sort('ext_december', 'Extramural'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
          <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hcxestablishments as $hcxestablishment) : ?>
          <tr>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['id']); ?>&nbsp;</td>
            <td>
              <?php echo $this->Html->link($hcxestablishment['Sibase']['sibase_name'], array('controller' => 'sibases', 'action' => 'view', $hcxestablishment['Sibase']['id'])); ?>
            </td>
            <td>
              <?php echo $this->Html->link($hcxestablishment['Establishment']['establishment_name'], array('controller' => 'establishments', 'action' => 'view', $hcxestablishment['Establishment']['id'])); ?>
            </td>
            <?php $total = $hcxestablishment['Hcxestablishment']['con_january'] + $hcxestablishment['Hcxestablishment']['con_february'] + $hcxestablishment['Hcxestablishment']['con_march'] + $hcxestablishment['Hcxestablishment']['con_april'] + $hcxestablishment['Hcxestablishment']['con_may'] + $hcxestablishment['Hcxestablishment']['con_june'] + $hcxestablishment['Hcxestablishment']['con_july'] + $hcxestablishment['Hcxestablishment']['con_august'] + $hcxestablishment['Hcxestablishment']['con_september'] + $hcxestablishment['Hcxestablishment']['con_october'] + $hcxestablishment['Hcxestablishment']['con_november'] + $hcxestablishment['Hcxestablishment']['con_december'] + $hcxestablishment['Hcxestablishment']['eme_january'] + $hcxestablishment['Hcxestablishment']['eme_february'] + $hcxestablishment['Hcxestablishment']['eme_march'] + $hcxestablishment['Hcxestablishment']['eme_april'] + $hcxestablishment['Hcxestablishment']['eme_may'] + $hcxestablishment['Hcxestablishment']['eme_june'] + $hcxestablishment['Hcxestablishment']['eme_july'] + $hcxestablishment['Hcxestablishment']['eme_august'] + $hcxestablishment['Hcxestablishment']['eme_september'] + $hcxestablishment['Hcxestablishment']['eme_october'] + $hcxestablishment['Hcxestablishment']['eme_november'] + $hcxestablishment['Hcxestablishment']['eme_december'];  ?>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_january']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_january']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_january']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_january'] + $hcxestablishment['Hcxestablishment']['eme_january'] + $hcxestablishment['Hcxestablishment']['ext_january']); ?></td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_february']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_february']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_february']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_february'] + $hcxestablishment['Hcxestablishment']['eme_february'] + $hcxestablishment['Hcxestablishment']['ext_february']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_march']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_march']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_march']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_march'] + $hcxestablishment['Hcxestablishment']['eme_march'] + $hcxestablishment['Hcxestablishment']['ext_march']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_april']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_april']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_april']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_april'] + $hcxestablishment['Hcxestablishment']['eme_april'] + $hcxestablishment['Hcxestablishment']['ext_april']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_may']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_may']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_may']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_may'] + $hcxestablishment['Hcxestablishment']['eme_may'] + $hcxestablishment['Hcxestablishment']['ext_may']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_june']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_june']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_june']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_june'] + $hcxestablishment['Hcxestablishment']['eme_june'] + $hcxestablishment['Hcxestablishment']['ext_june']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_july']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_july']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_july']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_july'] + $hcxestablishment['Hcxestablishment']['eme_july'] + $hcxestablishment['Hcxestablishment']['ext_july']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_august']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_august']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_august']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_august'] + $hcxestablishment['Hcxestablishment']['eme_august'] + $hcxestablishment['Hcxestablishment']['ext_august']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_september']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_september']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_september']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_september'] + $hcxestablishment['Hcxestablishment']['eme_september'] + $hcxestablishment['Hcxestablishment']['ext_september']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_october']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_october']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_october']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_october'] + $hcxestablishment['Hcxestablishment']['eme_october'] + $hcxestablishment['Hcxestablishment']['ext_october']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_november']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_november']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_november']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_november'] + $hcxestablishment['Hcxestablishment']['eme_november'] + $hcxestablishment['Hcxestablishment']['ext_november']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_december']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['eme_december']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['ext_december']); ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['con_december'] + $hcxestablishment['Hcxestablishment']['eme_december'] + $hcxestablishment['Hcxestablishment']['ext_december']); ?>&nbsp;</td>
            <td><?php echo $total; ?>&nbsp;</td>
            <td><?php echo h($hcxestablishment['Hcxestablishment']['year']); ?>&nbsp;</td>
            <td class="actions">
              <?php $region = $hcxestablishment['Hcxestablishment']['regions_id'] ?>
              <?php echo $this->Html->link(__('View'), array('action' => 'view', $hcxestablishment['Hcxestablishment']['id'])); ?>
              <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hcxestablishment['Hcxestablishment']['id'], $region, $yer)); ?>
              <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hcxestablishment['Hcxestablishment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hcxestablishment['Hcxestablishment']['id']))); ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <?php $total2 = $c_jan + $c_feb + $c_mar + $c_apr + $c_may + $c_jun + $c_jul + $c_aug + $c_sep + $c_oct + $c_nov + $c_decem + $em_jan + $em_feb + $em_mar + $em_apr + $em_may + $em_jun + $em_jul + $em_aug + $em_sep + $em_oct + $em_nov + $em_decem + $ex_jan + $ex_feb + $ex_mar + $ex_apr + $ex_may + $ex_jun + $ex_jul + $ex_aug + $ex_sep + $ex_oct + $ex_nov + $ex_decem; ?>
        <tr>
          <td colspan="3"> Total </td>
          <td><?php echo $c_jan;  ?></td>
          <td><?php echo $em_jan;  ?></td>
          <td><?php echo $ex_jan;  ?></td>
          <td><?php echo $c_jan + $ex_jan + $ex_jan; ?></td>
          <td><?php echo $c_feb;  ?></td>
          <td><?php echo $em_feb;  ?></td>
          <td><?php echo $ex_feb;  ?></td>
          <td><?php echo $c_feb + $ex_feb + $ex_feb; ?></td>
          <td><?php echo $c_mar;  ?></td>
          <td><?php echo $em_mar;  ?></td>
          <td><?php echo $ex_mar;  ?></td>
          <td><?php echo $c_mar + $ex_mar + $ex_mar; ?></td>
          <td><?php echo $c_apr;  ?></td>
          <td><?php echo $ex_apr;  ?></td>
          <td><?php echo $em_apr;  ?></td>
          <td><?php echo $c_apr + $ex_apr + $ex_apr; ?></td>
          <td><?php echo $c_may;  ?></td>
          <td><?php echo $em_may;  ?></td>
          <td><?php echo $ex_may;  ?></td>
          <td><?php echo $c_may + $ex_may + $ex_may; ?></td>
          <td><?php echo $c_jun;  ?></td>
          <td><?php echo $em_jun;  ?></td>
          <td><?php echo $ex_jun;  ?></td>
          <td><?php echo $c_jun + $ex_jun + $ex_jun; ?></td>
          <td><?php echo $c_jul;  ?></td>
          <td><?php echo $em_jul;  ?></td>
          <td><?php echo $ex_jul;  ?></td>
          <td><?php echo $c_jul + $ex_jul + $ex_jul; ?></td>
          <td><?php echo $c_aug;  ?></td>
          <td><?php echo $em_aug;  ?></td>
          <td><?php echo $ex_aug;  ?></td>
          <td><?php echo $c_aug + $ex_aug + $ex_aug; ?></td>
          <td><?php echo $c_sep;  ?></td>
          <td><?php echo $em_sep;  ?></td>
          <td><?php echo $ex_sep;  ?></td>
          <td><?php echo $c_sep + $ex_sep + $ex_sep; ?></td>
          <td><?php echo $c_oct;  ?></td>
          <td><?php echo $em_oct;  ?></td>
          <td><?php echo $ex_oct;  ?></td>
          <td><?php echo $c_oct + $ex_oct + $ex_oct; ?></td>
          <td><?php echo $c_nov;  ?></td>
          <td><?php echo $em_nov;  ?></td>
          <td><?php echo $ex_nov;  ?></td>
          <td><?php echo $c_nov + $ex_nov + $ex_nov; ?></td>
          <td><?php echo $c_decem;  ?></td>
          <td><?php echo $em_decem;  ?></td>
          <td><?php echo $ex_decem;  ?></td>
          <td><?php echo $c_decem + $ex_decem + $ex_decem; ?></td>
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