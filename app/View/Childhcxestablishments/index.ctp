<div class="col-lg-12 col-xs-12 col-sm-12">
  <ol class="breadcrumb">
    <li>
    
      <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Childhealingcares', 'action' => 'index?yir='.$yer)); ?>
    </li>
  </ol>
</div>

<div class="childhcxestablishments index">
  <h2><center><?php echo __('Atencion Infantil - Establecimientos'); ?></center></h2>
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

          
         
            <th><?php echo $this->Paginator->sort('ins_january', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_january', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_february', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_february', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_march', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_march', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_april', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_april', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_may', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_may', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_june', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_june', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_july', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_july', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_august', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_august', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_september', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_september', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_october', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_october', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_november', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_november', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
            <th><?php echo $this->Paginator->sort('ins_december', 'inscripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('con_december', 'Control'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
          <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($childhcxestablishments as $childhcxestablishment) : ?>
          <tr>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['id']); ?>&nbsp;</td>
            <td>
              <?php echo $this->Html->link($childhcxestablishment['Sibase']['sibase_name'], array('controller' => 'sibases', 'action' => 'view', $childhcxestablishment['Sibase']['id'])); ?>
            </td>
            <td>
              <?php echo $this->Html->link($childhcxestablishment['Establishment']['establishment_name'], array('controller' => 'establishments', 'action' => 'view', $childhcxestablishment['Establishment']['id'])); ?>
            </td>
            <?php $total = $childhcxestablishment['Childhcxestablishment']['ins_january'] + $childhcxestablishment['Childhcxestablishment']['ins_february'] + $childhcxestablishment['Childhcxestablishment']['ins_march'] + $childhcxestablishment['Childhcxestablishment']['ins_april'] + $childhcxestablishment['Childhcxestablishment']['ins_may'] + $childhcxestablishment['Childhcxestablishment']['ins_june'] + $childhcxestablishment['Childhcxestablishment']['ins_july'] + $childhcxestablishment['Childhcxestablishment']['ins_august'] + $childhcxestablishment['Childhcxestablishment']['ins_september'] + $childhcxestablishment['Childhcxestablishment']['ins_october'] + $childhcxestablishment['Childhcxestablishment']['ins_november'] + $childhcxestablishment['Childhcxestablishment']['ins_december'] + $childhcxestablishment['Childhcxestablishment']['con_january'] + $childhcxestablishment['Childhcxestablishment']['con_february'] + $childhcxestablishment['Childhcxestablishment']['con_march'] + $childhcxestablishment['Childhcxestablishment']['con_april'] + $childhcxestablishment['Childhcxestablishment']['con_may'] + $childhcxestablishment['Childhcxestablishment']['con_june'] + $childhcxestablishment['Childhcxestablishment']['con_july'] + $childhcxestablishment['Childhcxestablishment']['con_august'] + $childhcxestablishment['Childhcxestablishment']['con_september'] + $childhcxestablishment['Childhcxestablishment']['con_october'] + $childhcxestablishment['Childhcxestablishment']['con_november'] + $childhcxestablishment['Childhcxestablishment']['con_december'];  ?>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_january']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_january']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_january'] + $childhcxestablishment['Childhcxestablishment']['con_january']); ?></td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_february']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_february']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_february'] + $childhcxestablishment['Childhcxestablishment']['con_february']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_march']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_march']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_march'] + $childhcxestablishment['Childhcxestablishment']['con_march']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_april']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_april']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_april'] + $childhcxestablishment['Childhcxestablishment']['con_april']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_may']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_may']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_may'] + $childhcxestablishment['Childhcxestablishment']['con_may']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_june']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_june']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_june'] + $childhcxestablishment['Childhcxestablishment']['con_june']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_july']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_july']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_july'] + $childhcxestablishment['Childhcxestablishment']['con_july']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_august']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_august']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_august'] + $childhcxestablishment['Childhcxestablishment']['con_august']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_september']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_september']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_september'] + $childhcxestablishment['Childhcxestablishment']['con_september']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_october']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_october']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_october'] + $childhcxestablishment['Childhcxestablishment']['con_october']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_november']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_november']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_november'] + $childhcxestablishment['Childhcxestablishment']['con_november']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_december']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['con_december']); ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['ins_december'] + $childhcxestablishment['Childhcxestablishment']['con_december']); ?>&nbsp;</td>
            <td><?php echo $total; ?>&nbsp;</td>
            <td><?php echo h($childhcxestablishment['Childhcxestablishment']['year']); ?>&nbsp;</td>
            <td class="actions">
            <?php $region = $childhcxestablishment['Childhcxestablishment']['regions_id'] ?>
              <?php echo $this->Html->link(__('View'), array('action' => 'view', $childhcxestablishment['Childhcxestablishment']['id'])); ?>
              <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $childhcxestablishment['Childhcxestablishment']['id'], $region, $yer)); ?>
              <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $childhcxestablishment['Childhcxestablishment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $childhcxestablishment['Childhcxestablishment']['id']))); ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <?php $total2 = $i_jan + $i_feb + $i_mar + $i_apr + $i_may + $i_jun + $i_jul + $i_aug + $i_sep + $i_oct + $i_nov + $i_decem + $c_jan + $c_feb + $c_mar + $c_apr + $c_may + $c_jun + $c_jul + $c_aug + $c_sep + $c_oct + $c_nov + $c_decem; ?>
        <tr>
          <td colspan="3"> Total </td>
          <td><?php echo $i_jan;  ?></td>
          <td><?php echo $c_jan;  ?></td>
          <td><?php echo $i_jan + $c_jan; ?></td>
          <td><?php echo $i_feb;  ?></td>
          <td><?php echo $c_feb;  ?></td>
          <td><?php echo $i_feb + $c_feb; ?></td>
          <td><?php echo $i_mar;  ?></td>
          <td><?php echo $c_mar;  ?></td>
          <td><?php echo $i_mar + $c_mar; ?></td>
          <td><?php echo $i_apr;  ?></td>
          <td><?php echo $c_apr;  ?></td>
          <td><?php echo $i_apr + $c_apr; ?></td>
          <td><?php echo $i_may;  ?></td>
          <td><?php echo $c_may;  ?></td>
          <td><?php echo $i_may + $c_may; ?></td>
          <td><?php echo $i_jun;  ?></td>
          <td><?php echo $c_jun;  ?></td>
          <td><?php echo $i_jun + $c_jun; ?></td>
          <td><?php echo $i_jul;  ?></td>
          <td><?php echo $c_jul;  ?></td>
          <td><?php echo $i_jul + $c_jul; ?></td>
          <td><?php echo $i_aug;  ?></td>
          <td><?php echo $c_aug;  ?></td>
          <td><?php echo $i_aug + $c_aug; ?></td>
          <td><?php echo $i_sep;  ?></td>
          <td><?php echo $c_sep;  ?></td>
          <td><?php echo $i_sep + $c_sep; ?></td>
          <td><?php echo $i_oct;  ?></td>
          <td><?php echo $c_oct;  ?></td>
          <td><?php echo $i_oct + $c_oct; ?></td>
          <td><?php echo $i_nov;  ?></td>
          <td><?php echo $c_nov;  ?></td>
          <td><?php echo $i_nov + $c_nov; ?></td>
          <td><?php echo $i_decem;  ?></td>
          <td><?php echo $c_decem;  ?></td>
          <td><?php echo $i_decem + $c_decem; ?></td>
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