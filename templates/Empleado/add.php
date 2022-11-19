<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleado $empleado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Empleado'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empleado form content">
            <?= $this->Form->create($empleado) ?>
            <fieldset>
                <legend><?= __('Add Empleado') ?></legend>
                <?php
                    echo $this->Form->control('Nombre_Empl');
                    echo $this->Form->control('Rol_Empl');
                    echo $this->Form->control('Telefono_Empl');
                    echo $this->Form->control('Direccion_Empl');
                    echo $this->Form->control('Sueldo_Empl');
                    echo $this->Form->control('Id_Usuario');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
