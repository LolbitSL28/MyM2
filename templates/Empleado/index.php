<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Empleado> $empleado
 */
?>
<div class="empleado index content">
    <?= $this->Html->link(__('New Empleado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empleado') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id_Empleado') ?></th>
                    <th><?= $this->Paginator->sort('Nombre_Empl') ?></th>
                    <th><?= $this->Paginator->sort('Rol_Empl') ?></th>
                    <th><?= $this->Paginator->sort('Telefono_Empl') ?></th>
                    <th><?= $this->Paginator->sort('Direccion_Empl') ?></th>
                    <th><?= $this->Paginator->sort('Sueldo_Empl') ?></th>
                    <th><?= $this->Paginator->sort('Id_Usuario') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleado as $empleado): ?>
                <tr>
                    <td><?= $this->Number->format($empleado->Id_Empleado) ?></td>
                    <td><?= h($empleado->Nombre_Empl) ?></td>
                    <td><?= h($empleado->Rol_Empl) ?></td>
                    <td><?= $this->Number->format($empleado->Telefono_Empl) ?></td>
                    <td><?= h($empleado->Direccion_Empl) ?></td>
                    <td><?= $this->Number->format($empleado->Sueldo_Empl) ?></td>
                    <td><?= $this->Number->format($empleado->Id_Usuario) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empleado->Id_Empleado]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empleado->Id_Empleado]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empleado->Id_Empleado], ['confirm' => __('Are you sure you want to delete # {0}?', $empleado->Id_Empleado)]) ?>
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
