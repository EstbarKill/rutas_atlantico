<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ruta $ruta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ruta'), ['action' => 'edit', $ruta->ruta_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ruta'), ['action' => 'delete', $ruta->ruta_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ruta->ruta_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rutas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ruta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rutas view content">
            <h3><?= h($ruta->ruta_nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ruta Nombre') ?></th>
                    <td><?= h($ruta->ruta_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ruta Id') ?></th>
                    <td><?= $this->Number->format($ruta->ruta_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ruta Parada Inicio Id') ?></th>
                    <td><?= $this->Number->format($ruta->ruta_parada_inicio_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ruta Parada Final Id') ?></th>
                    <td><?= $this->Number->format($ruta->ruta_parada_final_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Estado') ?></th>
                    <td><?= $this->Number->format($ruta->id_estado) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Ruta Descripcion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ruta->ruta_descripcion)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
