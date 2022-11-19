<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Producto> $producto
 */
?>
<div class="producto index content">
    <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Producto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Producto') ?></th>
                    <th><?= $this->Paginator->sort('Id_Categoria') ?></th>
                    <th><?= $this->Paginator->sort('Nombre_Prod') ?></th>
                    <th><?= $this->Paginator->sort('Descripcion_Producto') ?></th>
                    <th><?= $this->Paginator->sort('Marca') ?></th>
                    <th><?= $this->Paginator->sort('Cant_Prod') ?></th>
                    <th><?= $this->Paginator->sort('Precio') ?></th>
                    <th><?= $this->Paginator->sort('Id_Prov') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($producto as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->Id_Producto) ?></td>
                    <td><?= $this->Number->format($producto->Id_Categoria) ?></td>
                    <td><?= h($producto->Nombre_Prod) ?></td>
                    <td><?= h($producto->Descripcion_Producto) ?></td>
                    <td><?= h($producto->Marca) ?></td>
                    <td><?= $this->Number->format($producto->Cant_Prod) ?></td>
                    <td><?= $this->Number->format($producto->Precio) ?></td>
                    <td><?= $this->Number->format($producto->Id_Prov) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $producto->Id_Producto]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->Id_Producto]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->Id_Producto], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->Id_Producto)]) ?>
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
