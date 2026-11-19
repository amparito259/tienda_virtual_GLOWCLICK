<?php
require_once __DIR__ . "/../app/controllers/CategoriaController.php";
require_once __DIR__ . '/../app/controllers/ClienteController.php';
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . '/../app/controllers/proveedorControllers.php';
require_once __DIR__ . "/../app/controllers/UsuarioController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";
require_once __DIR__ . "/../rutas/wed.php";



$method = $_SERVER['REQUEST_METHOD']; 
$uri = $_SERVER['REQUEST_URI'];
$ruta=parse_url($uri, PHP_URL_PATH);

$rutas = require dirname(__DIR__) . '/rutas/wed.php';



$enrutamiento = $rutas[$method][$ruta] ?? null;

if ($enrutamiento !== null){
    $nControlador= $enrutamiento[0];
    $nMetodo = $enrutamiento[1];

    $controlador = new $nControlador();
    $controlador->$nMetodo();
} else {
    echo "error 404 pagina no encontrada";
}
    
    
    

?>



<button><a href="/categoria" style="color: #be43fb;">Categoria</a></button>
<button><a href="/clientes" style="color: #be43fb;">Cliente</a></button>
<button><a href="/producto" style="color: #be43fb;">Producto</a></button>
<button><a href="/proveedor" style="color: #be43fb;">proveedor</a></button>
<button><a href="/usuario" style="color: #be43fb;">usuario</a></button>
<button><a href="/venta" style="color: #be43fb;">Venta</a></button>

<br><br>
<button><a href="/categoria/crear"style="color: #be43fb;">crearCategoria</a> </button>
<button><a href="/clientes/crear" style="color: #be43fb;">crearCliente</a></button>
<button><a href="/producto/crear" style="color: #be43fb;">crearProducto</a></button>
<button><a href="/proveedor/crear" style="color: #be43fb;">crearProveedor</a></button>
<button><a href="/usuario/crear" style="color: #be43fb;">crearUsuario</a></button>
<button><a href="/venta/crear" style="color: #be43fb;">crearVenta</a></button>