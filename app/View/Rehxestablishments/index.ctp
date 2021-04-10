<div class="col-lg-12 col-xs-12 col-sm-12">
  <ol class="breadcrumb">
    <li>
      <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Rehydrations', 'action' => 'index?yir=' . $yer)); ?>
    </li>
  </ol>
</div>

<div class="rehxestablishments index">
  <h2>
    <center><?php echo __('Rehidratacion Oral y Endovenosa - Establecimientos'); ?></center>
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



          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_january', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_january', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_february', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_february', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_march', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_march', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_april', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_april', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_may', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_may', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_june', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_june', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_july', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_july', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_august', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_august', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_september', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_september', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_october', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_october', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_november', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_november', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ora_december', 'Oral'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('end_december', 'Endovenosa'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rehxestablishments as $rehxestablishment) : ?>
          <tr>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['id']); ?>&nbsp;</td>
            <td>
              <?php echo h($rehxestablishment['Sibase']['sibase_name']); ?>
            </td>
            <td>
              <?php $region = $rehxestablishment['Rehxestablishment']['regions_id'] ?>
              <?php echo $this->Html->link($rehxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $rehxestablishment['Rehxestablishment']['id'], $region, $yer)); ?>
            </td>
            <?php $total = $rehxestablishment['Rehxestablishment']['ora_january'] + $rehxestablishment['Rehxestablishment']['ora_february'] + $rehxestablishment['Rehxestablishment']['ora_march'] + $rehxestablishment['Rehxestablishment']['ora_april'] + $rehxestablishment['Rehxestablishment']['ora_may'] + $rehxestablishment['Rehxestablishment']['ora_june'] + $rehxestablishment['Rehxestablishment']['ora_july'] + $rehxestablishment['Rehxestablishment']['ora_august'] + $rehxestablishment['Rehxestablishment']['ora_september'] + $rehxestablishment['Rehxestablishment']['ora_october'] + $rehxestablishment['Rehxestablishment']['ora_november'] + $rehxestablishment['Rehxestablishment']['ora_december'] + $rehxestablishment['Rehxestablishment']['end_january'] + $rehxestablishment['Rehxestablishment']['end_february'] + $rehxestablishment['Rehxestablishment']['end_march'] + $rehxestablishment['Rehxestablishment']['end_april'] + $rehxestablishment['Rehxestablishment']['end_may'] + $rehxestablishment['Rehxestablishment']['end_june'] + $rehxestablishment['Rehxestablishment']['end_july'] + $rehxestablishment['Rehxestablishment']['end_august'] + $rehxestablishment['Rehxestablishment']['end_september'] + $rehxestablishment['Rehxestablishment']['end_october'] + $rehxestablishment['Rehxestablishment']['end_november'] + $rehxestablishment['Rehxestablishment']['end_december'];  ?>
            <td bgcolor="#AEEAF1"><?php echo $total; ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_january']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_january']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_january'] + $rehxestablishment['Rehxestablishment']['end_january']); ?></td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_february']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_february']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_february'] + $rehxestablishment['Rehxestablishment']['end_february']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_march']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_march']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_march'] + $rehxestablishment['Rehxestablishment']['end_march']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_april']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_april']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_april'] + $rehxestablishment['Rehxestablishment']['end_april']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_may']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_may']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_may'] + $rehxestablishment['Rehxestablishment']['end_may']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_june']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_june']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_june'] + $rehxestablishment['Rehxestablishment']['end_june']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_july']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_july']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_july'] + $rehxestablishment['Rehxestablishment']['end_july']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_august']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_august']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_august'] + $rehxestablishment['Rehxestablishment']['end_august']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_september']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_september']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_september'] + $rehxestablishment['Rehxestablishment']['end_september']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_october']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_october']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_october'] + $rehxestablishment['Rehxestablishment']['end_october']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_november']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_november']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_november'] + $rehxestablishment['Rehxestablishment']['end_november']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['ora_december']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['end_december']); ?>&nbsp;</td>
            <td bgcolor="#AEEAF1"><?php echo h($rehxestablishment['Rehxestablishment']['ora_december'] + $rehxestablishment['Rehxestablishment']['end_december']); ?>&nbsp;</td>
            <td><?php echo h($rehxestablishment['Rehxestablishment']['year']); ?>&nbsp;</td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <?php $total2 = $o_jan + $o_feb + $o_mar + $o_apr + $o_may + $o_jun + $o_jul + $o_aug + $o_sep + $o_oct + $o_nov + $o_decem + $e_jan + $e_feb + $e_mar + $e_apr + $e_may + $e_jun + $e_jul + $e_aug + $e_sep + $e_oct + $e_nov + $e_decem; ?>
        <tr>
          <td colspan="3"> Total </td>
          <td bgcolor="#AEEAF1"><?php echo $total2;  ?></td>
          <td><?php echo $o_jan;  ?></td>
          <td><?php echo $e_jan;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_jan + $e_jan; ?></td>
          <td><?php echo $o_feb;  ?></td>
          <td><?php echo $e_feb;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_feb + $e_feb; ?></td>
          <td><?php echo $o_mar;  ?></td>
          <td><?php echo $e_mar;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_mar + $e_mar; ?></td>
          <td><?php echo $o_apr;  ?></td>
          <td><?php echo $e_apr;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_apr + $e_apr; ?></td>
          <td><?php echo $o_may;  ?></td>
          <td><?php echo $e_may;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_may + $e_may; ?></td>
          <td><?php echo $o_jun;  ?></td>
          <td><?php echo $e_jun;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_jun + $e_jun; ?></td>
          <td><?php echo $o_jul;  ?></td>
          <td><?php echo $e_jul;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_jul + $e_jul; ?></td>
          <td><?php echo $o_aug;  ?></td>
          <td><?php echo $e_aug;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_aug + $e_aug; ?></td>
          <td><?php echo $o_sep;  ?></td>
          <td><?php echo $e_sep;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_sep + $e_sep; ?></td>
          <td><?php echo $o_oct;  ?></td>
          <td><?php echo $e_oct;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_oct + $e_oct; ?></td>
          <td><?php echo $o_nov;  ?></td>
          <td><?php echo $e_nov;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_nov + $e_nov; ?></td>
          <td><?php echo $o_decem;  ?></td>
          <td><?php echo $e_decem;  ?></td>
          <td bgcolor="#AEEAF1"><?php echo $o_decem + $e_decem; ?></td>
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