<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estado->id_estado],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id_estado), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Estados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estados form content">
            <?= $this->Form->create($estado) ?>
            <fieldset>
                <legend><?= __('Edit Estado') ?></legend>
                <?php
                    echo $this->Form->control('estado_nombre');
                    echo $this->Form->control('estado_descripcion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
