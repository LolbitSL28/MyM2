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
            <?= $this->Html->link(__('Edit Proveedor'), ['action' => 'edit', $proveedor->Id_Prov], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Proveedor'), ['action' => 'delete', $proveedor->Id_Prov], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->Id_Prov), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Proveedor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Proveedor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="proveedor view content">
            <h3><?= h($proveedor->Id_Prov) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre Prov') ?></th>
                    <td><?= h($proveedor->Nombre_Prov) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion Prov') ?></th>
                    <td><?= h($proveedor->Direccion_Prov) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Prov') ?></th>
                    <td><?= $this->Number->format($proveedor->Id_Prov) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono Prov') ?></th>
                    <td><?= $this->Number->format($proveedor->Telefono_Prov) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
