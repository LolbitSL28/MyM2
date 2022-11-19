<!-- in /templates/Users/login.php 
<div class="users form">
<?/*    
<? = $this->Flash->render() ?>
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
    */?>
</div> 
-->

<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Iniciar Sesión</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Ingresa tu correo electrónico y contraseña') ?></legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Iniciar Sesión')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Registrarse", ['action' => 'add']) ?>
</div>
