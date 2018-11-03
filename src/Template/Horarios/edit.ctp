<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Horario $horario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $horario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $horario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Horarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="horarios form large-9 medium-8 columns content">
    <?= $this->Form->create($horario) ?>
    <fieldset>
        <legend><?= __('Edit Horario') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
            echo $this->Form->control('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
