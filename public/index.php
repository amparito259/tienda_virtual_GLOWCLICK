<a href="/categoria">Categoria</a>
<a href="/cliente">Cliente</a>
<a href="/producto">Producto</a>
<a href="/proveedor">proveedor</a>
<a href="/usuario">usuario</a>
<a href="/venta">Venta</a>

<br></br>

<a href="/categoria/crear">crearCategoria</a> 
<a href="/cliente/crear" >crearCliente</a>
<a href="/producto/crear" >crearProducto</a>
<a href="/proveedor/crear" >crearProveedor</a>
<a href="/usuario/crear" >crearUsuario</a>
<a href="/venta/crear" >crearVenta</a>



<?php

require_once __DIR__ . "/../app/controllers/CategoriaController.php";
require_once __DIR__ . '/../app/controllers/ClienteController.php';
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . '/../app/controllers/proveedorControllers.php';
require_once __DIR__ . "/../app/controllers/UsuarioController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";



$method = $_SERVER['REQUEST_METHOD']; 
$uri = $_SERVER['REQUEST_URI'];

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








