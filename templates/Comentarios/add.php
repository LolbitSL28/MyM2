<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentario $comentario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Comentarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comentarios form content">
            <?= $this->Form->create($comentario) ?>
            <fieldset>
                <legend><?= __('Add Comentario') ?></legend>
                <?php
                    echo $this->Form->control('Id_Usuario', ['type' => 'hidden', 'value' => 3]);
                    //echo $this->Form->control('Id_Usuario');
                    echo $this->Form->control('Contenido');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
