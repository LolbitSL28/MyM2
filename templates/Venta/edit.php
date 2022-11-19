<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ventum $ventum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ventum->Id_Venta],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ventum->Id_Venta), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Venta'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venta form content">
            <?= $this->Form->create($ventum) ?>
            <fieldset>
                <legend><?= __('Edit Ventum') ?></legend>
                <?php
                    echo $this->Form->control('Id_Producto');
                    echo $this->Form->control('Cantidad');
                    echo $this->Form->control('Fecha');
                    echo $this->Form->control('Nombre_Empl');
                    echo $this->Form->control('Oferta');
                    echo $this->Form->control('Descuento');
                    echo $this->Form->control('Precio_Total');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
