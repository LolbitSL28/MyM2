<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Proveedor> $proveedor
 */
?>
<div class="proveedor index content">
    <?= $this->Html->link(__('New Proveedor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Proveedor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Prov') ?></th>
                    <th><?= $this->Paginator->sort('Nombre_Prov') ?></th>
                    <th><?= $this->Paginator->sort('Telefono_Prov') ?></th>
                    <th><?= $this->Paginator->sort('Direccion_Prov') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proveedor as $proveedor): ?>
                <tr>
                    <td><?= $this->Number->format($proveedor->Id_Prov) ?></td>
                    <td><?= h($proveedor->Nombre_Prov) ?></td>
                    <td><?= $this->Number->format($proveedor->Telefono_Prov) ?></td>
                    <td><?= h($proveedor->Direccion_Prov) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $proveedor->Id_Prov]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proveedor->Id_Prov]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proveedor->Id_Prov], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->Id_Prov)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
