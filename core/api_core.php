<?php

defined('INDEX_DIR') OR exit('Ocrend software says .i.');

#definimos desde donde se accede a los controllers
define('IS_API',true);

#carga de constantes
require('../core/config.php');

#implementación de autoloaders
require('../core/kernel/Ocrend.php');
require('../vendor/autoload.php');

#router para URL's amigables
$router = new Router;

?>
