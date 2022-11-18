<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Comentario> $comentarios
 */
?>
<div class="comentarios index content">
    <?= $this->Html->link(__('New Comentario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comentarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Comentario') ?></th>
                    <th><?= $this->Paginator->sort('Id_Usuario') ?></th>
                    <th><?= $this->Paginator->sort('Contenido') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comentarios as $comentario): ?>
                <tr>
                    <td><?= $this->Number->format($comentario->Id_Comentario) ?></td>
                    <td><?= $this->Number->format($comentario->Id_Usuario) ?></td>
                    <td><?= h($comentario->Contenido) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $comentario->Id_Comentario]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comentario->Id_Comentario]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comentario->Id_Comentario], ['confirm' => __('Are you sure you want to delete # {0}?', $comentario->Id_Comentario)]) ?>
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
