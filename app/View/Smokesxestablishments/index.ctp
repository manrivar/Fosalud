<div class="col-lg-12 col-xs-12 col-sm-12">
  <ol class="breadcrumb">
    <li>
      <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Smokes', 'action' => 'index?yir='.$yer)); ?>
    </li>
  </ol>
</div>

<div class="smokesxestablishments index">
  <h2><?php echo __('Establecimientos'); ?></h2>
  <div class="table-responsive">
    <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th><?php echo $this->Paginator->sort('id'); ?></th>
          <th><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
          <th><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
          <th><?php echo $this->Paginator->sort('regions_id', 'Regiones'); ?></th>
          <th><?php echo $this->Paginator->sort('january', 'Enero'); ?></th>
          <th><?php echo $this->Paginator->sort('february', 'Febrero'); ?></th>
          <th><?php echo $this->Paginator->sort('march', 'Marzo'); ?></th>
          <th><?php echo $this->Paginator->sort('april', 'Abril'); ?></th>
          <th><?php echo $this->Paginator->sort('may', 'Mayo'); ?></th>
          <th><?php echo $this->Paginator->sort('june', 'Junio'); ?></th>
          <th><?php echo $this->Paginator->sort('july', 'Julio'); ?></th>
          <th><?php echo $this->Paginator->sort('august', 'Agosto'); ?></th>
          <th><?php echo $this->Paginator->sort('september', 'Septiembre'); ?></th>
          <th><?php echo $this->Paginator->sort('october', 'Octubre'); ?></th>
          <th><?php echo $this->Paginator->sort('november', 'Noviembre'); ?></th>
          <th><?php echo $this->Paginator->sort('december', 'Diciembre'); ?></th>
          <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
          <th><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
          <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($smokesxestablishments as $smokesxestablishment) : ?>
          <tr>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['id']); ?>&nbsp;</td>
            <td>
              <?php echo $this->Html->link($smokesxestablishment['Establishment']['establishment_name'], array('controller' => 'establishments', 'action' => 'view', $smokesxestablishment['Establishment']['id'])); ?>
            </td>
            <td>
              <?php echo $this->Html->link($smokesxestablishment['Sibase']['sibase_name'], array('controller' => 'sibases', 'action' => 'view', $smokesxestablishment['Sibase']['id'])); ?>
            </td>
            <td>
              <?php echo $this->Html->link($smokesxestablishment['Region']['region_name'], array('controller' => 'regions', 'action' => 'view', $smokesxestablishment['Region']['id'])); ?>
            </td>
            <?php $total = $smokesxestablishment['Smokesxestablishment']['january'] + $smokesxestablishment['Smokesxestablishment']['february'] + $smokesxestablishment['Smokesxestablishment']['march'] + $smokesxestablishment['Smokesxestablishment']['april'] + $smokesxestablishment['Smokesxestablishment']['may'] + $smokesxestablishment['Smokesxestablishment']['june'] + $smokesxestablishment['Smokesxestablishment']['july'] + $smokesxestablishment['Smokesxestablishment']['august'] + $smokesxestablishment['Smokesxestablishment']['september'] + $smokesxestablishment['Smokesxestablishment']['october'] + $smokesxestablishment['Smokesxestablishment']['november'] + $smokesxestablishment['Smokesxestablishment']['december'];  ?>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['january']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['february']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['march']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['april']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['may']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['june']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['july']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['august']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['september']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['october']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['november']); ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['december']); ?>&nbsp;</td>
            <td><?php echo $total; ?>&nbsp;</td>
            <td><?php echo h($smokesxestablishment['Smokesxestablishment']['year']); ?>&nbsp;</td>
            <td class="actions">
              <?php $region = $smokesxestablishment['Smokesxestablishment']['regions_id'] ?>
              <?php echo $this->Html->link(__('View'), array('action' => 'view', $smokesxestablishment['Smokesxestablishment']['id'])); ?>
              <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $smokesxestablishment['Smokesxestablishment']['id'], $region, $yer)); ?>
              <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $smokesxestablishment['Smokesxestablishment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $smokesxestablishment['Smokesxestablishment']['id']))); ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <?php $total2 = $jan + $feb + $mar + $apr + $may + $jun + $jul + $aug + $sep + $oct + $nov + $decem; ?>
        <tr>
          <td colspan="4"> Total </td>
          <td><?php echo $jan;  ?></td>
          <td><?php echo $feb;  ?></td>
          <td><?php echo $mar;  ?></td>
          <td><?php echo $apr;  ?></td>
          <td><?php echo $may;  ?></td>
          <td><?php echo $jun;  ?></td>
          <td><?php echo $jul;  ?></td>
          <td><?php echo $aug;  ?></td>
          <td><?php echo $sep;  ?></td>
          <td><?php echo $oct;  ?></td>
          <td><?php echo $nov;  ?></td>
          <td><?php echo $decem;  ?></td>
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