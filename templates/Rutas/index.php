<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ruta> $rutas
 */
?>
<div class="rutas index content">
    <?= $this->Html->link(__('New Ruta'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rutas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Descripcion') ?></th>
                    <th><?= $this->Paginator->sort('Parada inicio') ?></th>
                    <th><?= $this->Paginator->sort('Parada final') ?></th>
                    <th><?= $this->Paginator->sort('Estado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rutas as $ruta):?>
                <tr>
                    <td><?= $this->Number->format($ruta->ruta_id) ?></td>
                    <td><?= h($ruta->ruta_nombre) ?></td>
                    <td><?= h($ruta->ruta_descripcion) ?></td>
                    <td><?= $this->Number->format($ruta->ruta_parada_inicio_id) ?></td>
                    <td><?= $this->Number->format($ruta->ruta_parada_final_id) ?></td>         
                    <td>
                        <?php
                        foreach ($estados as $estado) {
                            if ($this->Number->format($ruta->id_estado) == $this->Number->format($estado->id_estado)) {
                                ?>
                                    <?=h($estado->estado_nombre)?>
                                <?php
                            }else {
                                echo "f";
                            }
                        }
                        ?>
                        
                    </td>       
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ruta->ruta_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ruta->ruta_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ruta->ruta_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ruta->ruta_id)]) ?>
                    </td>
                </tr>  
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
