<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Recipes', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="recipesxestablishments index">
    <h2>
        <center><?php echo __('Recetas - Establecimientos'); ?></center>
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



                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_january', 'Medico'); ?></th>
                    
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_january', 'Enfermeria'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_february', 'Medico'); ?></th>
                    
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_february', 'Enfermeria'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_march', 'Medico'); ?></th>
                    
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_march', 'Enfermeria'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_april', 'Medico'); ?></th>
                    
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_april', 'Enfermeria'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_may', 'Medico'); ?></th>
                    
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_may', 'Enfermeria'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_june', 'Medico'); ?></th>
         
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_june', 'Enfermeria'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_july', 'Medico'); ?></th>
           
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_july', 'Enfermeria'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_august', 'Medico'); ?></th>
    
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_august', 'Enfermeria'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_september', 'Medico'); ?></th>

                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_september', 'Enfermeria'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_october', 'Medico'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_october', 'Odontologo'); ?></th>
                 
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_november', 'Medico'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_november', 'Odontologo'); ?></th>
                  
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_december', 'Medico'); ?></th>
                    
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_december', 'Enfermeria'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipesxestablishments as $recipesxestablishment) : ?>
                    <tr>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo h($recipesxestablishment['Sibase']['sibase_name']); ?>
                        </td>
                        <td>
                        <?php $region = $recipesxestablishment['Recipesxestablishment']['regions_id'] ?>

                        <?php if($this->Session->read('Auth.User.acceso_id') <= 2):?>
                            <?php echo $this->Html->link($recipesxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $recipesxestablishment['Recipesxestablishment']['id'], $region, $yer)); ?>
                            <?php elseif($this->Session->read('Auth.User.acceso_id') > 2):?>

                            <?php if($this->Session->read('Auth.User.regions_id')==$region && $this->Session->read('Auth.User.acceso_id') <= 3):?>
                                <?php echo $this->Html->link($recipesxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $recipesxestablishment['Recipesxestablishment']['id'], $region, $yer)); ?>
                            <?php else: ?>
                                <?php echo h($recipesxestablishment['Establishment']['establishment_name']); ?>
                            <?php endif; ?>
                            <?php endif; ?>
                        </td>
                        <?php $total = $recipesxestablishment['Recipesxestablishment']['med_january'] + $recipesxestablishment['Recipesxestablishment']['med_february'] + $recipesxestablishment['Recipesxestablishment']['med_march'] + $recipesxestablishment['Recipesxestablishment']['med_april'] + $recipesxestablishment['Recipesxestablishment']['med_may'] + $recipesxestablishment['Recipesxestablishment']['med_june'] + $recipesxestablishment['Recipesxestablishment']['med_july'] + $recipesxestablishment['Recipesxestablishment']['med_august'] + $recipesxestablishment['Recipesxestablishment']['med_september'] + $recipesxestablishment['Recipesxestablishment']['med_october'] + $recipesxestablishment['Recipesxestablishment']['med_november'] + $recipesxestablishment['Recipesxestablishment']['med_december'] + $recipesxestablishment['Recipesxestablishment']['nur_january'] + $recipesxestablishment['Recipesxestablishment']['nur_february'] + $recipesxestablishment['Recipesxestablishment']['nur_march'] + $recipesxestablishment['Recipesxestablishment']['nur_april'] + $recipesxestablishment['Recipesxestablishment']['nur_may'] + $recipesxestablishment['Recipesxestablishment']['nur_june'] + $recipesxestablishment['Recipesxestablishment']['nur_july'] + $recipesxestablishment['Recipesxestablishment']['nur_august'] + $recipesxestablishment['Recipesxestablishment']['nur_september'] + $recipesxestablishment['Recipesxestablishment']['nur_october'] + $recipesxestablishment['Recipesxestablishment']['nur_november'] + $recipesxestablishment['Recipesxestablishment']['nur_december'];  ?>
                        <td bgcolor="#CBEEF2"><?php echo $total; ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_january']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_january']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_january'] + $recipesxestablishment['Recipesxestablishment']['nur_january']); ?></td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_february']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_february']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_february'] + $recipesxestablishment['Recipesxestablishment']['nur_february']); ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_march']); ?>&nbsp;</td>
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_march']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_march'] + $recipesxestablishment['Recipesxestablishment']['nur_march']); ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_april']); ?>&nbsp;</td>                        
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_april']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_april'] + $recipesxestablishment['Recipesxestablishment']['nur_april']); ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_may']); ?>&nbsp;</td>                      
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_may']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_may'] + $recipesxestablishment['Recipesxestablishment']['nur_may']); ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_june']); ?>&nbsp;</td>                    
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_june']); ?>&nbsp;</td>
                        
                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_june'] + $recipesxestablishment['Recipesxestablishment']['nur_june']); ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_july']); ?>&nbsp;</td>                      
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_july']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_july'] + $recipesxestablishment['Recipesxestablishment']['nur_july']); ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_august']); ?>&nbsp;</td>                       
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_august']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_august'] + $recipesxestablishment['Recipesxestablishment']['nur_august']); ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_september']); ?>&nbsp;</td>                      
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_september']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_september'] + $recipesxestablishment['Recipesxestablishment']['nur_september']); ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_october']); ?>&nbsp;</td>                      
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_october']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_october'] + $recipesxestablishment['Recipesxestablishment']['nur_october']); ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_november']); ?>&nbsp;</td>                    
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_november']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_november'] + $recipesxestablishment['Recipesxestablishment']['nur_november']); ?>&nbsp;</td>

                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['med_december']); ?>&nbsp;</td>                        
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['nur_december']); ?>&nbsp;</td>

                        <td bgcolor="#CBEEF2"><?php echo h($recipesxestablishment['Recipesxestablishment']['med_december'] + $recipesxestablishment['Recipesxestablishment']['nur_december']); ?>&nbsp;</td>
                        
                        <td><?php echo h($recipesxestablishment['Recipesxestablishment']['year']); ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $m_jan + $m_feb + $m_mar + $m_apr + $m_may + $m_jun + $m_jul + $m_aug + $m_sep + $m_oct + $m_nov + $m_decem + $n_jan + $n_feb + $n_mar + $n_apr + $n_may + $n_jun + $n_jul + $n_aug + $n_sep + $n_oct + $n_nov + $n_decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td bgcolor="#AEEAF1"><?php echo $total2;  ?></td>
                    <td><?php echo $m_jan;  ?></td>
                    
                    <td><?php echo $n_jan;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_jan + $n_jan; ?></td>
                    <td><?php echo $m_feb;  ?></td>
                    
                    <td><?php echo $n_feb;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_feb + $n_feb; ?></td>
                    <td><?php echo $m_mar;  ?></td>
                    
                    <td><?php echo $n_mar;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_mar + $n_mar; ?></td>
                    <td><?php echo $m_apr;  ?></td>
                    
                    <td><?php echo $n_apr;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_apr + $n_apr; ?></td>
                    <td><?php echo $m_may;  ?></td>
                    
                    <td><?php echo $n_may;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_may + $n_may; ?></td>
                    <td><?php echo $m_jun;  ?></td>
                    
                    <td><?php echo $n_jun;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_jun + $n_jun; ?></td>
                    <td><?php echo $m_jul;  ?></td>
                    
                    <td><?php echo $n_jul;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_jul + $n_jul; ?></td>
                    <td><?php echo $m_aug;  ?></td>
                    
                    <td><?php echo $n_aug;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_aug + $n_aug; ?></td>
                    <td><?php echo $m_sep;  ?></td>
                    
                    <td><?php echo $n_sep;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_sep + $n_sep; ?></td>
                    <td><?php echo $m_oct;  ?></td>
                    
                    <td><?php echo $n_oct;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_oct + $n_oct; ?></td>
                    <td><?php echo $m_nov;  ?></td>
                    
                    <td><?php echo $n_nov;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_nov + $n_nov; ?></td>
                    <td><?php echo $m_decem;  ?></td>
                    
                    <td><?php echo $n_decem;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_decem + $n_decem; ?></td>
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