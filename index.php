<?php


// Mostrar todos los errores en desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Opcional: para evitar que la página se recargue demasiado rápido y no veas el error
ob_start();
register_shutdown_function(function () {
    $error = error_get_last();
    if ($error !== NULL) {
        echo "<pre style='background: black; color: white; padding: 20px;'>";
        print_r($error);
        echo "</pre>";
    }
});



include "core/autoload.php";


// cargamos el modulo iniciar.
$lb = new Lb();
$lb->loadModule("index");

?>