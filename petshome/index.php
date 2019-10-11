<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';

require_once 'models/Database.php';
require_once 'models/usuarios.php';
require_once 'models/security.php';
require_once 'models/administrador.php';
require_once 'models/usuario.php';

require_once 'controllers/securityController.php';
require_once 'controllers/indexController.php';
require_once 'controllers/administradorController.php';
require_once 'controllers/usuarioController.php';

/**
 * https://www.php.net/manual/en/function.call-user-func.php
 * Basicamente recibe una clase y un method como parametros que se necesitan ejecutar, luego hace el llamado.
 */
call_user_func(["{$controller}Controller" , $method]);
?>