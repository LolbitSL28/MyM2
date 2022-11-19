<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Categorium> $categoria
 */
?>
<div class="categoria index content">
    <?= $this->Html->link(__('New Categorium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categoria') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Categoria') ?></th>
                    <th><?= $this->Paginator->sort('Nombre_Cat') ?></th>
                    <th><?= $this->Paginator->sort('Descripcion_Cat') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoria as $categorium): ?>
                <tr>
                    <td><?= $this->Number->format($categorium->Id_Categoria) ?></td>
                    <td><?= h($categorium->Nombre_Cat) ?></td>
                    <td><?= h($categorium->Descripcion_Cat) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categorium->Id_Categoria]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categorium->Id_Categoria]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categorium->Id_Categoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->Id_Categoria)]) ?>
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
