<div class="col-lg-12 col-xs-12 col-sm-12">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-plus-sign"></span> <li><?php echo $this->Html->link(__('Nuevo nivel de acceso'), array('action' => 'add')); ?></li>
    </ol>
</div>
<div class="row">
    <div class="accesos col-lg-8 col-sm-12 col-xs-12 col-md-8">
        <h2><?php echo __('Niveles de Acceso'); ?></h2>
        <table cellpadding="0" cellspacing="0" class="table table-responsive">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('descripcion'); ?></th>
                    <th class="actions"><?php echo __('Opciones'); ?></th>
                </tr>
            </thead>
            <?php foreach ($accesos as $acceso): ?>
                <tr>
                    <td><?php echo h($acceso['Acceso']['id']); ?>&nbsp;</td>
                    <td><?php echo h($acceso['Acceso']['descripcion']); ?>&nbsp;</td>
                    <td class="actions">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Opciones
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $acceso['Acceso']['id'])); ?></li>
                                <li><?php if ($nivel == 0) echo $this->Html->link(__('Editar'), array('action' => 'edit', $acceso['Acceso']['id'])); ?></li>
                            </ul>
                        </div>




                        <?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $acceso['Acceso']['id']), null, __('Are you sure you want to delete # %s?', $acceso['Acceso']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p>
            <?php
            echo $this->Paginator->counter(array(
                'format' => __('Pagina {:page} de {:pages}, Mostrando {:current} registros de {:count}, Empezando en {:start}, terminando en {:end}')
            ));
            ?>	</p>
        <div class="paging">
            <?php
            echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('Seguiente') . ' >', array(), null, array('class' => 'next disabled'));
            ?>
        </div>
    </div>
</div>


