<?php
require_once __DIR__ . "/../app/controllers/CategoriaController.php";
require_once __DIR__ . '/../app/controllers/ClienteController.php';
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . '/../app/controllers/proveedorControllers.php';
require_once __DIR__ . "/../app/controllers/UsuarioController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";
require_once __DIR__ . "/../app/controllers/HomeController.php";

$method = $_SERVER['REQUEST_METHOD']; 
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);

$rutas = require dirname(__DIR__) . '/rutas/wed.php';

$enrutamiento = $rutas[$method][$ruta] ?? null;

if ($enrutamiento !== null) {
    $nControlador = $enrutamiento[0];
    $nMetodo = $enrutamiento[1];

    $controlador = new $nControlador();
    $controlador->$nMetodo();
} else {
    echo "error 404 pagina no encontrada";
}
?>