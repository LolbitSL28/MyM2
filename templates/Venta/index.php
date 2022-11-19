<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ventum> $venta
 */
?>
<div class="venta index content">
    <?= $this->Html->link(__('New Ventum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Venta') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Venta') ?></th>
                    <th><?= $this->Paginator->sort('Id_Producto') ?></th>
                    <th><?= $this->Paginator->sort('Cantidad') ?></th>
                    <th><?= $this->Paginator->sort('Fecha') ?></th>
                    <th><?= $this->Paginator->sort('Nombre_Empl') ?></th>
                    <th><?= $this->Paginator->sort('Oferta') ?></th>
                    <th><?= $this->Paginator->sort('Descuento') ?></th>
                    <th><?= $this->Paginator->sort('Precio_Total') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($venta as $ventum): ?>
                <tr>
                    <td><?= $this->Number->format($ventum->Id_Venta) ?></td>
                    <td><?= $this->Number->format($ventum->Id_Producto) ?></td>
                    <td><?= $this->Number->format($ventum->Cantidad) ?></td>
                    <td><?= h($ventum->Fecha) ?></td>
                    <td><?= h($ventum->Nombre_Empl) ?></td>
                    <td><?= h($ventum->Oferta) ?></td>
                    <td><?= h($ventum->Descuento) ?></td>
                    <td><?= $this->Number->format($ventum->Precio_Total) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ventum->Id_Venta]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ventum->Id_Venta]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ventum->Id_Venta], ['confirm' => __('Are you sure you want to delete # {0}?', $ventum->Id_Venta)]) ?>
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
