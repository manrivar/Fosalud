<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Recipes', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="recipesxestablishments index">
    <h2><?php echo __('Establecimientos'); ?></h2>
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



                    <th><?php echo $this->Paginator->sort('med_january', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_january', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_february', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_february', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_march', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_march', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_april', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_april', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_may', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_may', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_june', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_june', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_july', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_july', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_august', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_august', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_september', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_september', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_october', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_october', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_november', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_november', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('med_december', 'inscripcion'); ?></th>
                    <th><?php echo $this->Paginator->sort('den_december', 'Control'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipesxestablishments as $recipesxestablishment) : ?>
                    <tr>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo $this->Html->link($recipesxestablishment['Sibase']['sibase_name'], array('controller' => 'sibases', 'action' => 'view', $recipesxestablishment['Sibase']['id'])); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($recipesxestablishment['Establishment']['establishment_name'], array('controller' => 'establishments', 'action' => 'view', $recipesxestablishment['Establishment']['id'])); ?>
                        </td>
                        <?php $total = $recipesxestablishment['Recipesxestablishment']['med_january'] + $recipesxestablishment['Recipesxestablishment']['med_february'] + $recipesxestablishment['Recipesxestablishment']['med_march'] + $recipesxestablishment['Recipesxestablishment']['med_april'] + $recipesxestablishment['Recipesxestablishment']['med_may'] + $recipesxestablishment['Recipesxestablishment']['med_june'] + $recipesxestablishment['Recipesxestablishment']['med_july'] + $recipesxestablishment['Recipesxestablishment']['med_august'] + $recipesxestablishment['Recipesxestablishment']['med_september'] + $recipesxestablishment['Recipesxestablishment']['med_october'] + $recipesxestablishment['Recipesxestablishment']['med_november'] + $recipesxestablishment['Recipesxestablishment']['med_december'] + $recipesxestablishment['Recipesxestablishment']['den_january'] + $recipesxestablishment['Recipesxestablishment']['den_february'] + $recipesxestablishment['Recipesxestablishment']['den_march'] + $recipesxestablishment['Recipesxestablishment']['den_april'] + $recipesxestablishment['Recipesxestablishment']['den_may'] + $recipesxestablishment['Recipesxestablishment']['den_june'] + $recipesxestablishment['Recipesxestablishment']['den_july'] + $recipesxestablishment['Recipesxestablishment']['den_august'] + $recipesxestablishment['Recipesxestablishment']['den_september'] + $recipesxestablishment['Recipesxestablishment']['den_october'] + $recipesxestablishment['Recipesxestablishment']['den_november'] + $recipesxestablishment['Recipesxestablishment']['den_december'];  ?>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_january']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_january']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_january'] + $recipesxestablishment['Recipesxestablishment']['den_january']); ?></td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_february']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_february']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_february'] + $recipesxestablishment['Recipesxestablishment']['den_february']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_march']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_march']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_march'] + $recipesxestablishment['Recipesxestablishment']['den_march']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_april']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_april']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_april'] + $recipesxestablishment['Recipesxestablishment']['den_april']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_may']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_may']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_may'] + $recipesxestablishment['Recipesxestablishment']['den_may']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_june']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_june']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_june'] + $recipesxestablishment['Recipesxestablishment']['den_june']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_july']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_july']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_july'] + $recipesxestablishment['Recipesxestablishment']['den_july']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_august']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_august']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_august'] + $recipesxestablishment['Recipesxestablishment']['den_august']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_september']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_september']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_september'] + $recipesxestablishment['Recipesxestablishment']['den_september']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_october']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_october']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_october'] + $recipesxestablishment['Recipesxestablishment']['den_october']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_november']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_november']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_november'] + $recipesxestablishment['Recipesxestablishment']['den_november']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_december']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['den_december']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_december'] + $recipesxestablishment['Recipesxestablishment']['den_december']); ?>&nbsp;</td>
                        <td><?php echo $total; ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['year']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php $region = $recipesxestablishment['Recipesxestablishment']['regions_id'] ?>
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $recipesxestablishment['Recipesxestablishment']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recipesxestablishment['Recipesxestablishment']['id'], $region, $yer)); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recipesxestablishment['Recipesxestablishment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $recipesxestablishment['Recipesxestablishment']['id']))); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $m_jan + $m_feb + $m_mar + $m_apr + $m_may + $m_jun + $m_jul + $m_aug + $m_sep + $m_oct + $m_nov + $m_decem + $d_jan + $d_feb + $d_mar + $d_apr + $d_may + $d_jun + $d_jul + $d_aug + $d_sep + $d_oct + $d_nov + $d_decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td><?php echo $m_jan;  ?></td>
                    <td><?php echo $d_jan;  ?></td>
                    <td><?php echo $m_jan + $d_jan; ?></td>
                    <td><?php echo $m_feb;  ?></td>
                    <td><?php echo $d_feb;  ?></td>
                    <td><?php echo $m_feb + $d_feb; ?></td>
                    <td><?php echo $m_mar;  ?></td>
                    <td><?php echo $d_mar;  ?></td>
                    <td><?php echo $m_mar + $d_mar; ?></td>
                    <td><?php echo $m_apr;  ?></td>
                    <td><?php echo $d_apr;  ?></td>
                    <td><?php echo $m_apr + $d_apr; ?></td>
                    <td><?php echo $m_may;  ?></td>
                    <td><?php echo $d_may;  ?></td>
                    <td><?php echo $m_may + $d_may; ?></td>
                    <td><?php echo $m_jun;  ?></td>
                    <td><?php echo $d_jun;  ?></td>
                    <td><?php echo $m_jun + $d_jun; ?></td>
                    <td><?php echo $m_jul;  ?></td>
                    <td><?php echo $d_jul;  ?></td>
                    <td><?php echo $m_jul + $d_jul; ?></td>
                    <td><?php echo $m_aug;  ?></td>
                    <td><?php echo $d_aug;  ?></td>
                    <td><?php echo $m_aug + $d_aug; ?></td>
                    <td><?php echo $m_sep;  ?></td>
                    <td><?php echo $d_sep;  ?></td>
                    <td><?php echo $m_sep + $d_sep; ?></td>
                    <td><?php echo $m_oct;  ?></td>
                    <td><?php echo $d_oct;  ?></td>
                    <td><?php echo $m_oct + $d_oct; ?></td>
                    <td><?php echo $m_nov;  ?></td>
                    <td><?php echo $d_nov;  ?></td>
                    <td><?php echo $m_nov + $d_nov; ?></td>
                    <td><?php echo $m_decem;  ?></td>
                    <td><?php echo $d_decem;  ?></td>
                    <td><?php echo $m_decem + $d_decem; ?></td>
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