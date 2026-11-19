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



// CATEGORIA//
switch ($uri) {
    case "/categoria":
    if ($method === "GET"){
        $Controller = new CategoriaController();
        $Controller -> index();
        exit;
    }

    if ($method === "POST"){
        $Controller = new CategoriaController();
        $Controller -> guardar();
        exit;
    }
    break;

    case "/categoria/crear":

    if ($method === "GET"){
        $Controller = new CategoriaController();
        $Controller -> crear();
        exit;
    }
     break;

    case "/categoria/editar":
      if ($method === "GET"){
        $Controller = new CategoriaController();
        $Controller -> editar();
        exit;
    }
    break;
        case "/categoria/actualizar":
      if ($method === "POST"){
        $Controller = new CategoriaController();
        $Controller -> actualizar();
        exit;
    }
    break;

    case "/categoria/eliminar":
          if ($method === "POST"){
        $Controller = new CategoriaController();
        $Controller -> eliminar();
        exit;
  
    }
     break;


     //CLIENTE//
    case "/Clientes":
    if ($method === "GET"){
        $Controller = new ClienteController();
        $Controller -> index();
        exit;
    }

    if ($method === "POST"){
        $Controller = new ClienteController();
        $Controller -> guardar();
        exit;
    }
    break;

    case "/Cliente/crear":

    if ($method === "GET"){
        $Controller = new ClienteController();
        $Controller -> crear();
        exit;
    }
     break;

    case "/Cliente/editar":
      if ($method === "GET"){
        $Controller = new ClienteController();
        $Controller -> editar();
        exit;
    }
    break;
        case "/Cliente/actualizar":
      if ($method === "POST"){
        $Controller = new ClienteController();
        $Controller -> actualizar();
        exit;
    }
    break;

    case "/Cliente/eliminar":
          if ($method === "POST"){
        $Controller = new ClienteController();
        $Controller -> eliminar();
        exit;
  
    }
     break;

     //producto//
     case "/producto":
    if ($method === "GET"){
        $Controller = new productoController();
        $Controller -> index();
        exit;
    }

    if ($method === "POST"){
        $Controller = new productoController();
        $Controller -> guardar();
        exit;
    }
    break;

    case "/producto/crear":

    if ($method === "GET"){
        $Controller = new productoController();
        $Controller -> crear();
        exit;
    }
     break;

    case "/producto/editar":
      if ($method === "GET"){
        $Controller = new productoController();
        $Controller -> editar();
        exit;
    }
    break;
        case "/producto/actualizar":
      if ($method === "POST"){
        $Controller = new productoController();
        $Controller -> actualizar();
        exit;
    }
    break;

    case "/producto/eliminar":
          if ($method === "POST"){
        $Controller = new productoController();
        $Controller -> eliminar();
        exit;
  
    }
     break;

     //proveedor//
    case "/proveedor":
    if ($method === "GET"){
        $Controller = new proveedorController();
        $Controller -> index();
        exit;
    }

    if ($method === "POST"){
        $Controller = new proveedorController();
        $Controller -> guardar();
        exit;
    }
    break;

    case "/proveedor/crear":

    if ($method === "GET"){
        $Controller = new proveedorController();
        $Controller -> crear();
        exit;
    }
     break;

    case "/proveedor/editar":
      if ($method === "GET"){
        $Controller = new proveedorController();
        $Controller -> editar();
        exit;
    }
    break;
        case "/proveedor/actualizar":
      if ($method === "POST"){
        $Controller = new proveedorController();
        $Controller -> actualizar();
        exit;
    }
    break;

    case "/proveedor/eliminar":
          if ($method === "POST"){
        $Controller = new proveedorController();
        $Controller -> eliminar();
        exit;
  
    }
     break;  

     //usuario//
     case "/usuario":
    if ($method === "GET"){
        $Controller = new usuarioController();
        $Controller -> index();
        exit;
    }

    if ($method === "POST"){
        $Controller = new usuarioController();
        $Controller -> guardar();
        exit;
    }
    break;

    case "/usuario/crear":

    if ($method === "GET"){
        $Controller = new usuarioController();
        $Controller -> crear();
        exit;
    }
     break;

    case "/usuario/editar":
      if ($method === "GET"){
        $Controller = new usuarioController();
        $Controller -> editar();
        exit;
    }
    break;
        case "/usuario/actualizar":
      if ($method === "POST"){
        $Controller = new usuarioController();
        $Controller -> actualizar();
        exit;
    }
    break;

    case "/usuario/eliminar":
          if ($method === "POST"){
        $Controller = new usuarioController();
        $Controller -> eliminar();
        exit;
  
    }
     break;

     //venta//
     case "/venta":
    if ($method === "GET"){
        $Controller = new ventaController();
        $Controller -> index();
        exit;
    }

    if ($method === "POST"){
        $Controller = new ventaController();
        $Controller -> guardar();
        exit;
    }
    break;

    case "/venta/crear":

    if ($method === "GET"){
        $Controller = new ventaController();
        $Controller -> crear();
        exit;
    }
     break;

    case "/venta/editar":
      if ($method === "GET"){
        $Controller = new ventaController();
        $Controller -> editar();
        exit;
    }
    break;
        case "/venta/actualizar":
      if ($method === "POST"){
        $Controller = new ventaController();
        $Controller -> actualizar();
        exit;
    }
    break;

    case "/venta/eliminar":
          if ($method === "POST"){
        $Controller = new ventaController();
        $Controller -> eliminar();
        exit;
  
    }
     break;
}


//CATEGORIA//
// if ($method === 'GET' && $uri === "/categoria"){
//     $categoriaController = new CategoriaController();
//     $categoriaController->index();
// }

// if ($method === 'GET' && $uri === "/categoria/crear"){
//     $categoriaController = new CategoriaController();
//     $categoriaController->crear();
// }
// if ($method === 'POST' && $uri === "/categoria"){
//     $categoriaController = new CategoriaController();
//     $categoriaController->guardar();
// }

// //ACTUALIZAR categoria 22/10/26
// if ($ruta === "/categoria/editar" && $method === "POST"){
//     $categoriaController = new CategoriaController();
//     $categoriaController->editar();
// }
// //editar categoria 22/10/26
// if ($ruta === "/categoria/editar" && $method === "GET"){
//     $categoriaController = new CategoriaController();
//     $categoriaController->editar();
// }
// // elinimar categoria 26/10/2026
// if ($uri === "/categoria/eliminar" && $method === "POST"){
//     $categoriaController = new CategoriaController();
//     $categoriaController->eliminar();
// }




//CLIENTE
// if ($method === 'GET' && $uri === "/cliente"){
//     $clienteController = new ClienteController();
//     $clienteController->index();
// }
// if ($method === 'GET' && $uri === "/cliente/crear"){
//     $clienteController = new ClienteController();
//     $clienteController->crear();
// }
// if ($method === 'POST' && $uri === "/cliente"){
//     $clienteController = new ClienteController();
//     $clienteController->guardar();
// }

// //ACTUALIZAR cliente 22/10/26
// if ($ruta === "/cliente/editar" && $method === "POST"){
//     $clienteController = new ClienteController();
//     $clienteController->editar();
// }

// //EDITAR cliente 22/10/26
// if ($ruta === "/cliente/editar" && $method === "GET"){
//     $clienteController = new ClienteController();
//     $clienteController->editar();
// }

// // elinimar cliente 12/11/2026
// if ($uri === "/cliente/eliminar" && $method === "POST"){
//     $clienteController = new ClienteController();
//     $clienteController->eliminar();
// }




//PRODUCTO

// if ($method === 'GET' && $uri === "/producto"){
//     $ProductoController = new ProductoController();
//     $ProductoController->index();
// }
// if ($method === 'GET' && $uri === "/producto/crear"){
//     $ProductoController = new ProductoController();
//     $ProductoController->crear();
// }
// if ($method === 'POST' && $uri === "/producto"){
//     $ProductoController = new ProductoController();
//     $ProductoController->guardar();
// }


// //ACTUALIZAR producto 19/10/26
// if ($ruta === "/producto/editar" && $method === "POST"){
//     $productoController = new ProductoController();
//     $productoController->editar();
// }

// //EDITAR producto 19/10/26
// if ($ruta === "/producto/editar" && $method === "GET"){
//     $productoController = new ProductoController();
//     $productoController->editar();
// }

// // elinimar producto 12/11/2026
// if ($uri === "/producto/eliminar" && $method === "POST"){
//     $productoController = new productoController();
//     $productoController->eliminar();
// }




//PROVEEDOR

// if ($method === 'GET' && $uri === "/proveedor"){
//     $ProveedorController = new ProveedorController();
//     $ProveedorController->index();
// }
// if ($method === 'GET' && $uri === "/proveedor/crear"){
//     $ProveedorController = new ProveedorController();
//     $ProveedorController->crear();
// }
// if ($method === 'POST' && $uri === "/proveedor"){
//     $ProveedorController = new ProveedorController();
//     $ProveedorController->guardar();
// }

// //ACTUALIZAR proveedor 22/10/26
// if ($ruta === "/proveedor/editar" && $method === "POST"){
//     $proveedorController = new ProveedorController();
//     $proveedorController->editar();
// }

// //editar proveedor 22/10/2026
// if ($ruta === "/proveedor/editar" && $method === "GET"){
//     $proveedorController = new ProveedorController();
//     $proveedorController->editar();
// }

// // elinimar proveedor 12/11/2026
// if ($uri === "/proveedor/eliminar" && $method === "POST"){
//     $proveedorController = new proveedorController();
//     $proveedorController->eliminar();
// }




//USUARIO

// if ($method === 'GET' && $uri === "/usuario"){
//     $UsuarioController = new UsuarioController();
//     $UsuarioController->index();
// }
// if ($method === 'GET' && $uri === "/usuario/crear"){
//     $UsuarioController = new UsuarioController();
//     $UsuarioController->crear();
// }
// if ($method === 'POST' && $uri === "/usuario"){
//     $UsuarioController = new UsuarioController();
//     $UsuarioController->guardar();
// }

// //actualizar usuario 22/10/2026
// if ($ruta === "/usuarios/editar" && $method === "POST"){
//     $usuarioController = new UsuarioController();
//     $usuarioController->editar();
// }

// //editar usuario 22/10/2026
// if ($ruta === "/usuarios/editar" && $method === "GET"){
//     $usuarioController = new UsuarioController();
//     $usuarioController->editar();
// }

// // elinimar usuarios 12/11/2026
// if ($uri === "/usuarios/eliminar" && $method === "POST"){
//     $usuariosController = new UsuarioController();
//     $usuariosController->eliminar();
// }





//VENTA

// if ($method === 'GET' && $uri === "/venta"){
//     $VentaController = new VentaController();
//     $VentaController->index();
// }
// if ($method === 'GET' && $uri === "/venta/crear"){
//     $VentaController = new VentaController();
//     $VentaController->crear();
// }
// if ($method === 'POST' && $uri === "/venta"){
//     $VentaController = new VentaController();
//     $VentaController->guardar();
// }

// //editar ventas 22/10/2026
// if ($ruta === "/ventas/editar" && $method === "POST"){
//     $ventasController = new VentaController();
//     $ventasController->editar();
// }

// //editar ventas 22/10/2026
// if ($ruta === "/ventas/editar" && $method === "GET"){
//     $ventasController = new VentaController();
//     $ventasController->editar();
// }

// // elinimar venta 12/11/2026
// if ($uri === "/venta/eliminar" && $method === "POST"){
//     $ventaController = new VentaController();
//     $ventaController->eliminar();
// }
?>