<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    Abarrotes M&M
        <?= $this->fetch('title') ?>
    </title>
    <link rel="icon" href="webroot/Logo M&M (Fatima).ico">

    

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'estilo_home','info']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<nav class="info">
        <div class="cel_email">
            Telefono: 633-107-1341 &nbsp &nbsp Correo Electronico: <a href="aby.mrod@gmail.com">aby.mrod@gmail.com</a>
        </div>
    </nav>
    
    <nav class="menu">
        <div>
            <img class="img_logo" src="webroot/img/Logo M&M (Fatima).jpeg">
        </div>
        <label class="logo">Abarrotes M&M🍎🥑</label>
        <ul class="menu_options">

            <li>
            <?= $this->Html->link(__('Iniciar Sesion'), ['controller' => 'Users', 'action' => 'login']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Articulos'), ['controller' => 'Producto', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Registrar Articulos'), ['controller' => 'Producto', 'action' => 'add']); ?>
            </li>
            <li>
                <a href="#">Servicios</a>
            </li>
            <li>
            <?= $this->Html->link(__('Usuarios Registrados'), ['controller' => 'Users', 'action' => 'index']); ?>
            </li>
            <li>
            <?= $this->Html->link(__('Comentarios'), ['controller' => 'Comentarios', 'action' => 'index']); ?>
            </li>
        </ul>
    </nav>

<!--Nombre de los programadores o cualquier cosa acerca de la empresa?-->
    <div class="main">
        <h1>Desarrolladores</h1>
        <p>
        • Francisco Alonso Bujanda Noriega<br>
        • Jose Armando Campos Castro<br>
        • Mayte Coronado Miranda<br>
        • Lucia Gamez Ballesteros<br>
        • Fatima Isabel Hernandez Garcia<br>
        • Alejandra Murga Benitez<br>
        • Karen Paola Noriega Espinoza<br>
        • Hannah Valeria Rivas Chay
    </div>
<section class="">
    <div class="publicidad">
        
        <h3>Los Mejores Productos a la Vuelta de la Esquina</h3>
        <p>Nuestro abarrotes cuenta con todos los productos que necesitas a la vuelta de la esquina. Cubrimos las necesidades de nuestros clientes ofreciendo productos de la canasta básica a un precio más bajo, comparado al precio de un supermercado.</p>
        
    </div>
</section>    
   
    
</section>
</body>
</html>