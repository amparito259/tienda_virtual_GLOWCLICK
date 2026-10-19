<button><a href="/categoria" style="color: #be43fb;">Categoria</a></button>
<button><a href="/cliente" style="color: #be43fb;">Cliente</a></button>
<button><a href="/producto" style="color: #be43fb;">Producto</a></button>
<button><a href="/proveedor" style="color: #be43fb;">proveedor</a></button>
<button><a href="/usuario" style="color: #be43fb;">usuario</a></button>
<button><a href="/venta" style="color: #be43fb;">Venta</a></button>

<br><br>
<button><a href="/categoria/crear"style="color: #be43fb;">crearCategoria</a> </button>
<button><a href="/cliente/crear" style="color: #be43fb;">crearCliente</a></button>
<button><a href="/producto/crear" style="color: #be43fb;">crearProducto</a></button>
<button><a href="/proveedor/crear" style="color: #be43fb;">crearProveedor</a></button>
<button><a href="/usuario/crear" style="color: #be43fb;">crearUsuario</a></button>
<button><a href="/venta/crear" style="color: #be43fb;">crearVenta</a></button>



<?php

require_once __DIR__ . "/../app/controllers/CategoriaController.php";
require_once __DIR__ . '/../app/controllers/ClienteController.php';
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . '/../app/controllers/proveedorControllers.php';
require_once __DIR__ . "/../app/controllers/UsuarioController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";



$method = $_SERVER['REQUEST_METHOD']; 
$uri = $_SERVER['REQUEST_URI'];

$ruta=parse_url($uri, PHP_URL_PATH);

//CATEGORIAS
if ($method === 'GET' && $uri === "/categoria"){
    $categoriaController = new CategoriaController();
    $categoriaController->index();
}
if ($method === 'GET' && $uri === "/categoria/crear"){
    $categoriaController = new CategoriaController();
    $categoriaController->crear();
}
if ($method === 'POST' && $uri === "/categoria"){
    $categoriaController = new CategoriaController();
    $categoriaController->guardar();
}

//CLIENTES
if ($method === 'GET' && $uri === "/cliente"){
    $clienteController = new ClienteController();
    $clienteController->index();
}
if ($method === 'GET' && $uri === "/cliente/crear"){
    $clienteController = new ClienteController();
    $clienteController->crear();
}
if ($method === 'POST' && $uri === "/cliente"){
    $clienteController = new ClienteController();
    $clienteController->guardar();
}

//PRODUCTOS

if ($method === 'GET' && $uri === "/producto"){
    $ProductoController = new ProductoController();
    $ProductoController->index();
}
if ($method === 'GET' && $uri === "/producto/crear"){
    $ProductoController = new ProductoController();
    $ProductoController->crear();
}
if ($method === 'POST' && $uri === "/producto"){
    $ProductoController = new ProductoController();
    $ProductoController->guardar();
}
 
//EDITAR PRODUCTOS 19/10/26
if ($ruta === "/producto/editar" && $method === "GET"){
    $productoController = new ProductoController();
    $productoController->editar();
}


//PROVEEDORES

if ($method === 'GET' && $uri === "/proveedor"){
    $ProveedorController = new ProveedorController();
    $ProveedorController->index();
}
if ($method === 'GET' && $uri === "/proveedor/crear"){
    $ProveedorController = new ProveedorController();
    $ProveedorController->crear();
}
if ($method === 'POST' && $uri === "/proveedor"){
    $ProveedorController = new ProveedorController();
    $ProveedorController->guardar();
}

//USUARIOS

if ($method === 'GET' && $uri === "/usuario"){
    $UsuarioController = new UsuarioController();
    $UsuarioController->index();
}
if ($method === 'GET' && $uri === "/usuario/crear"){
    $UsuarioController = new UsuarioController();
    $UsuarioController->crear();
}
if ($method === 'POST' && $uri === "/usuario"){
    $UsuarioController = new UsuarioController();
    $UsuarioController->guardar();
}

//VENTAS


if ($method === 'GET' && $uri === "/venta"){
    $VentaController = new VentaController();
    $VentaController->index();
}
if ($method === 'GET' && $uri === "/venta/crear"){
    $VentaController = new VentaController();
    $VentaController->crear();
}
if ($method === 'POST' && $uri === "/venta"){
    $VentaController = new VentaController();
    $VentaController->guardar();
}

?>








