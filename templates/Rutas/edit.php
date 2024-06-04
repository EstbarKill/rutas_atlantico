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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ruta->ruta_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ruta->ruta_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rutas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rutas form content">
            <?= $this->Form->create($ruta) ?>
            <fieldset>
                <legend><?= __('Edit Ruta') ?></legend>
                <?php
                    echo $this->Form->control('ruta_nombre');
                    echo $this->Form->control('ruta_descripcion');
                    echo $this->Form->control('ruta_parada_inicio_id');
                    echo $this->Form->control('ruta_parada_final_id');
                    echo $this->Form->control('id_estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
