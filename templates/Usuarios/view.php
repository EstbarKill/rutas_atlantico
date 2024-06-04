<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id_usuario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id_usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id_usuario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->usuario_nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario Nombre') ?></th>
                    <td><?= h($usuario->usuario_nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario Apellido') ?></th>
                    <td><?= h($usuario->usuario_apellido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario Contrasena') ?></th>
                    <td><?= h($usuario->usuario_contrasena) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario Correo') ?></th>
                    <td><?= h($usuario->usuario_correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Usuario') ?></th>
                    <td><?= $this->Number->format($usuario->id_usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario Telefono') ?></th>
                    <td><?= $this->Number->format($usuario->usuario_telefono) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
