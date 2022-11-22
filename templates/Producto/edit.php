<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producto->Id_Producto],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producto->Id_Producto), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Producto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="producto form content">
            <?= $this->Form->create($producto) ?>
            <fieldset>
                <legend><?= __('Edit Producto') ?></legend>
                <?php
                    echo $this->Form->control('producto.nombre_cat',['options' => $categoria]);
                    echo $this->Form->control('Nombre_Prod');
                    echo $this->Form->control('Descripcion_Producto');
                    echo $this->Form->control('Marca');
                    echo $this->Form->control('Cant_Prod');
                    echo $this->Form->control('Precio');
                    echo $this->Form->control('producto.nombre_prov',['options' => $proveedores]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
