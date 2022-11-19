<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Proveedor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedor form content">
            <?= $this->Form->create($proveedor) ?>
            <fieldset>
                <legend><?= __('Add Proveedor') ?></legend>
                <?php
                    echo $this->Form->control('Nombre_Prov');
                    echo $this->Form->control('Telefono_Prov');
                    echo $this->Form->control('Direccion_Prov');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
