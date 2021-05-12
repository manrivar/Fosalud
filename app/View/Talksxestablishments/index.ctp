<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li>
            <span class="fa fa-undo"></span> <?php echo $this->Html->Link('Regresar', array('controller' => 'Talks', 'action' => 'index?yir=' . $yer)); ?>
        </li>
    </ol>
</div>

<div class="talksxestablishments index">
    <h2>
        <center><?php echo __('Charlas - Establecimientos'); ?></center>
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-condensed" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('id'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('sibases_id', 'Sibasis'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('establishments_id', 'Establecimientos'); ?></th>
                    <th class="text-center" rowspan="2" bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total Anual'); ?></th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">ENERO</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">FEBRERO</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">MARZO</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">ABRIL</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">MAYO</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">JUNIO</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">JULIO</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">AGOSTO</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">SEPTIEMBRE</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">OCTUBRE</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">NOVIEMBRE</th>
                    <th class="text-center" colspan="4" bgcolor="#AEEAF1">DICIEMBRE</th>
                </tr>
                <tr>



                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_january', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_january', 'Enfermeria'); ?></th>
                    
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_january', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_february', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_february', 'Enfermeria'); ?></th>
                  
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_february', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_march', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_march', 'Enfermeria'); ?></th>
             
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_march', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_april', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_april', 'Enfermeria'); ?></th>
         
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_april', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_may', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_may', 'Enfermeria'); ?></th>
                  
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_may', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_june', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_june', 'Enfermeria'); ?></th>
                  
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_june', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_july', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_july', 'Enfermeria'); ?></th>
                 
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_july', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_august', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_august', 'Enfermeria'); ?></th>
            
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_august', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_september', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_september', 'Enfermeria'); ?></th>
        
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_september', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_october', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_october', 'Enfermeria'); ?></th>
              
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_october', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_november', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_november', 'Enfermeria'); ?></th>
               
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_november', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('med_december', 'Medicos'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('nur_december', 'Enfermeria'); ?></th>
      
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('ot_december', 'Otros'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
                    <th bgcolor="#AEEAF1"><?php echo $this->Paginator->sort('year', 'Año'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($talksxestablishments as $talksxestablishment) : ?>
                    <tr>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo h($talksxestablishment['Sibase']['sibase_name']); ?>
                        </td>
                        <td>
                        <?php $region = $talksxestablishment['Talksxestablishment']['regions_id'] ?>

                        <?php if($this->Session->read('Auth.User.acceso_id') <= 2):?>
                            <?php echo $this->Html->link($talksxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $talksxestablishment['Talksxestablishment']['id'], $region, $yer)); ?>
                            <?php elseif($this->Session->read('Auth.User.acceso_id') > 2):?>

                            <?php if($this->Session->read('Auth.User.regions_id')==$region && $this->Session->read('Auth.User.acceso_id') <= 3):?>
                                <?php echo $this->Html->link($talksxestablishment['Establishment']['establishment_name'], array('action' => 'edit', $talksxestablishment['Talksxestablishment']['id'], $region, $yer)); ?>
                            <?php else: ?>
                                <?php echo h($talksxestablishment['Establishment']['establishment_name']); ?>
                            <?php endif; ?>
                            <?php endif; ?>
                        </td>
                        <?php $total = $talksxestablishment['Talksxestablishment']['med_january'] + $talksxestablishment['Talksxestablishment']['med_february'] + $talksxestablishment['Talksxestablishment']['med_march'] + $talksxestablishment['Talksxestablishment']['med_april'] + $talksxestablishment['Talksxestablishment']['med_may'] + $talksxestablishment['Talksxestablishment']['med_june'] + $talksxestablishment['Talksxestablishment']['med_july'] + $talksxestablishment['Talksxestablishment']['med_august'] + $talksxestablishment['Talksxestablishment']['med_september'] + $talksxestablishment['Talksxestablishment']['med_october'] + $talksxestablishment['Talksxestablishment']['med_november'] + $talksxestablishment['Talksxestablishment']['med_december'] + $talksxestablishment['Talksxestablishment']['nur_january'] + $talksxestablishment['Talksxestablishment']['nur_february'] + $talksxestablishment['Talksxestablishment']['nur_march'] + $talksxestablishment['Talksxestablishment']['nur_april'] + $talksxestablishment['Talksxestablishment']['nur_may'] + $talksxestablishment['Talksxestablishment']['nur_june'] + $talksxestablishment['Talksxestablishment']['nur_july'] + $talksxestablishment['Talksxestablishment']['nur_august'] + $talksxestablishment['Talksxestablishment']['nur_september'] + $talksxestablishment['Talksxestablishment']['nur_october'] + $talksxestablishment['Talksxestablishment']['nur_november'] + $talksxestablishment['Talksxestablishment']['nur_december'] + $talksxestablishment['Talksxestablishment']['ot_january'] + $talksxestablishment['Talksxestablishment']['ot_february'] + $talksxestablishment['Talksxestablishment']['ot_march'] + $talksxestablishment['Talksxestablishment']['ot_april'] + $talksxestablishment['Talksxestablishment']['ot_may'] + $talksxestablishment['Talksxestablishment']['ot_june'] + $talksxestablishment['Talksxestablishment']['ot_july'] + $talksxestablishment['Talksxestablishment']['ot_august'] + $talksxestablishment['Talksxestablishment']['ot_september'] + $talksxestablishment['Talksxestablishment']['ot_october'] + $talksxestablishment['Talksxestablishment']['ot_november'] + $talksxestablishment['Talksxestablishment']['ot_december'];  ?>
                        <td bgcolor="#CBEEF2"><?php echo $total; ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_january']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_january']); ?>&nbsp;</td>
                        
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_january']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_january'] + $talksxestablishment['Talksxestablishment']['nur_january'] + $talksxestablishment['Talksxestablishment']['ot_january']); ?></td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_february']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_february']); ?>&nbsp;</td>
                        
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_february']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_february'] + $talksxestablishment['Talksxestablishment']['nur_february'] + $talksxestablishment['Talksxestablishment']['ot_february']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_march']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_march']); ?>&nbsp;</td>
                        
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_march']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_march'] + $talksxestablishment['Talksxestablishment']['nur_march'] + $talksxestablishment['Talksxestablishment']['ot_march']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_april']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_april']); ?>&nbsp;</td>
                        
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_april']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_april'] + $talksxestablishment['Talksxestablishment']['nur_april'] + $talksxestablishment['Talksxestablishment']['ot_april']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_may']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_may']); ?>&nbsp;</td>
                        
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_may']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_may'] + $talksxestablishment['Talksxestablishment']['nur_may'] + $talksxestablishment['Talksxestablishment']['ot_may']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_june']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_june']); ?>&nbsp;</td>
                        
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_june']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_june'] + $talksxestablishment['Talksxestablishment']['nur_june'] + $talksxestablishment['Talksxestablishment']['ot_june']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_july']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_july']); ?>&nbsp;</td>
                        
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_july']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_july'] + $talksxestablishment['Talksxestablishment']['nur_july'] + $talksxestablishment['Talksxestablishment']['ot_july']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_august']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_august']); ?>&nbsp;</td>
                        
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_august']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_august'] + $talksxestablishment['Talksxestablishment']['nur_august'] + $talksxestablishment['Talksxestablishment']['ot_august']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_september']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_september']); ?>&nbsp;</td>
                        
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_september']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_september'] + $talksxestablishment['Talksxestablishment']['nur_september'] + $talksxestablishment['Talksxestablishment']['ot_september']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_october']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_october']); ?>&nbsp;</td>
                 
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_october']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_october'] + $talksxestablishment['Talksxestablishment']['nur_october'] + $talksxestablishment['Talksxestablishment']['ot_october']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_november']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_november']); ?>&nbsp;</td>
                       
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_november']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_november'] + $talksxestablishment['Talksxestablishment']['nur_november'] + $talksxestablishment['Talksxestablishment']['ot_november']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['med_december']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['nur_december']); ?>&nbsp;</td>
                        
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['ot_december']); ?>&nbsp;</td>
                        <td bgcolor="#CBEEF2"><?php echo h($talksxestablishment['Talksxestablishment']['med_december'] + $talksxestablishment['Talksxestablishment']['nur_december'] + $talksxestablishment['Talksxestablishment']['ot_december']); ?>&nbsp;</td>
                        <td><?php echo h($talksxestablishment['Talksxestablishment']['year']); ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <?php $total2 = $m_jan + $m_feb + $m_mar + $m_apr + $m_may + $m_jun + $m_jul + $m_aug + $m_sep + $m_oct + $m_nov + $m_decem + $n_jan + $n_feb + $n_mar + $n_apr + $n_may + $n_jun + $n_jul + $n_aug + $n_sep + $n_oct + $n_nov + $n_decem + $o_jan + $o_feb + $o_mar + $o_apr + $o_may + $o_jun + $o_jul + $o_aug + $o_sep + $o_oct + $o_nov + $o_decem; ?>
                <tr>
                    <td colspan="3"> Total </td>
                    <td bgcolor="#AEEAF1"><?php echo $total2;  ?></td>
                    <td><?php echo $m_jan;  ?></td>
                    <td><?php echo $n_jan;  ?></td>
                  
                    <td><?php echo $o_jan;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_jan + $n_jan + $o_jan; ?></td>
                    <td><?php echo $m_feb;  ?></td>
                    <td><?php echo $n_feb;  ?></td>
                    
                    <td><?php echo $o_feb;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_feb + $n_feb + $o_feb; ?></td>
                    <td><?php echo $m_mar;  ?></td>
                    <td><?php echo $n_mar;  ?></td>
                    
                    <td><?php echo $o_mar;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_mar + $n_mar + $o_mar; ?></td>
                    <td><?php echo $m_apr;  ?></td>
                    <td><?php echo $n_apr;  ?></td>
                   
                    <td><?php echo $o_apr;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_apr + $n_apr + $o_apr; ?></td>
                    <td><?php echo $m_may;  ?></td>
                    <td><?php echo $n_may;  ?></td>
                    
                    <td><?php echo $o_may;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_may + $n_may + $o_may; ?></td>
                    <td><?php echo $m_jun;  ?></td>
                    <td><?php echo $n_jun;  ?></td>
                    
                    <td><?php echo $o_jun;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_jun + $n_jun + $o_jun; ?></td>
                    <td><?php echo $m_jul;  ?></td>
                    <td><?php echo $n_jul;  ?></td>
                   
                    <td><?php echo $o_jul;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_jul + $n_jul + $o_jul; ?></td>
                    <td><?php echo $m_aug;  ?></td>
                    <td><?php echo $n_aug;  ?></td>
                   
                    <td><?php echo $o_aug;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_aug + $n_aug + $o_aug; ?></td>
                    <td><?php echo $m_sep;  ?></td>
                    <td><?php echo $n_sep;  ?></td>
                    
                    <td><?php echo $o_sep;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_sep + $n_sep + $o_sep; ?></td>
                    <td><?php echo $m_oct;  ?></td>
                    <td><?php echo $n_oct;  ?></td>
                 
                    <td><?php echo $o_oct;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_oct + $n_oct + $o_oct; ?></td>
                    <td><?php echo $m_nov;  ?></td>
                    <td><?php echo $n_nov;  ?></td>
                  
                    <td><?php echo $o_nov;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_nov + $n_nov + $o_nov; ?></td>
                    <td><?php echo $m_decem;  ?></td>
                    <td><?php echo $n_decem;  ?></td>
                    
                    <td><?php echo $o_decem;  ?></td>
                    <td bgcolor="#AEEAF1"><?php echo $m_decem + $n_decem + $o_decem; ?></td>
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