<!-- in /templates/Users/login.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Iniciar Sesion</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Ingresa tu Correo Electronico') ?></legend>
        <?= $this->Form->control('Correo Electronico', ['required' => true]) ?>
        <?= $this->Form->control('Contraseña', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Iniciar Sesion')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Registrarse", ['action' => 'add']) ?>
</div> 