<!-- <button><a href="/categoria" style="color: #be43fb;">Categoria</a></button>
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
<button><a href="/venta/crear" style="color: #be43fb;">crearVenta</a></button> -->



<?php

// require_once __DIR__ . "/../app/controllers/CategoriaController.php";
// require_once __DIR__ . '/../app/controllers/ClienteController.php';
// require_once __DIR__ . "/../app/controllers/ProductoController.php";
// require_once __DIR__ . '/../app/controllers/proveedorControllers.php';
// require_once __DIR__ . "/../app/controllers/UsuarioController.php";
// require_once __DIR__ . "/../app/controllers/VentaController.php";



// $method = $_SERVER['REQUEST_METHOD']; 
// $uri = $_SERVER['REQUEST_URI'];

// $ruta=parse_url($uri, PHP_URL_PATH);

// //CATEGORIAS
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

// //CLIENTES
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

// //PRODUCTOS

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


// //PROVEEDORES

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

// //USUARIOS

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


// //VENTAS

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

?>


<?php

// 1. Almacenar cinco lenguajes de programación en un arreglo indexado
$lenguajes = ["PHP", "JavaScript", "Python", "Java", "C++"];

echo "<h3>Ejercicio Práctico 1</h3>";
// 2. Mostrar el segundo (índice 1), el quinto (índice 4) y el primer lenguaje (índice 0)
echo "Segundo lenguaje: " . $lenguajes[1] . "<br>";
echo "Quinto lenguaje: " . $lenguajes[4] . "<br>";
echo "Primer lenguaje: " . $lenguajes[0] . "<br>";





// 1. Almacenar cuatro categorías de productos en un arreglo indexado
$categorias = ["Labiales", "Polvos", "Rubores", "Sombras"];

echo "<h3>Ejercicio Práctico 2</h3>";
// 2. Mostrar únicamente la tercera categoría registrada (índice 2)
echo "Tercera categoría registrada: " . $categorias[2];


echo "<h3>Ejercicio Práctico </h3>";
$frutas = ["Manzana", "Pera", "Mango"];
echo $frutas[0]; // Muestra: Manzana
echo "<br>";
echo $frutas[2]; // Muestra: Mango



// 1. Representar la información de un aprendiz usando un arreglo asociativo
$aprendiz = [
    "nombre" => "Carlos Pérez",
    "numero_ficha" => "2875123",
    "programa_formacion" => "Análisis y Desarrollo de Software (ADSO)",
    "edad" => 22
];

echo "<h3>Ejercicio Práctico 3</h3>";
// 2. Mostrar en pantalla el nombre del aprendiz y el programa de formación
echo "Nombre del aprendiz: " . $aprendiz["nombre"] . "<br>";
echo "Programa de formación: " . $aprendiz["programa_formacion"] . "<br>";




// 1. Crear un arreglo asociativo que almacene la información de un proveedor
$proveedor = [
    "nombre" => "Cosméticos y Más S.A.S.",
    "ciudad" => "Bogotá D.C.",
    "telefono" => "3112345678",
    "correo" => "contacto@cosmeticosymas.com"
];

echo "<h3>Ejercicio Práctico 4</h3>";
// 2. Mostrar en pantalla el nombre del proveedor y su ciudad
echo "Nombre del proveedor: " . $proveedor["nombre"] . "<br>";
echo "Ciudad: " . $proveedor["ciudad"] . "<br>";



echo "<h3>Ejercicio Práctico </h3>";
$producto = [
    "nombre" => "Mouse",
    "precio" => 35000,
    "stock" => 12
];
echo $producto["nombre"];
echo "<br>";
echo $producto["precio"];



// 1. Crear un arreglo asociativo con nombre, precio y cantidad disponible
$productoTienda = [
    "nombre" => "Base de Maquillaje",
    "precio" => 45000,
    "cantidad" => 10
];

// 2. Modificar el precio, actualizar la cantidad y agregar la categoría
$productoTienda["precio"] = 42000;          // Modificación de precio
$productoTienda["cantidad"] = 15;         // Actualización de cantidad
$productoTienda["categoria"] = "Cosméticos"; // Adición de nueva clave (categoría)

echo "<h3>Ejercicio Práctico 5 - Información Actualizada</h3>";
echo "Nombre: " . $productoTienda["nombre"] . "<br>";
echo "Precio: $" . $productoTienda["precio"] . "<br>";
echo "Cantidad disponible: " . $productoTienda["cantidad"] . "<br>";
echo "Categoría: " . $productoTienda["categoria"] . "<br>";



// 1. Crear un arreglo indexado que almacene tres marcas
$marcas = ["Asus", "HP", "Lenovo"];

// 2. Agregar dos marcas adicionales
$marcas[] = "Dell";
$marcas[] = "Acer";

echo "<h3>Ejercicio Práctico 6 - Marcas Registradas</h3>";
// Mostrar las cinco marcas en pantalla
echo "Marca 1: " . $marcas[0] . "<br>";
echo "Marca 2: " . $marcas[1] . "<br>";
echo "Marca 3: " . $marcas[2] . "<br>";
echo "Marca 4: " . $marcas[3] . "<br>";
echo "Marca 5: " . $marcas[4] . "<br>";



echo "<h3>Ejercicio Práctico </h3>";
$producto = [
    "nombre" => "Teclado",
    "precio" => 60000
];

$producto["precio"] = 55000; // Modifica el precio existente
$producto["stock"] = 8;     // Agrega una nueva clave con su valor

echo $producto["nombre"];
echo "<br>";
echo $producto["precio"];
echo "<br>";
echo $producto["stock"];




// 1. Almacenar tres productos con nombre, precio y cantidad disponible mediante arreglos anidados
$productosAlmacen = [
    [
        "nombre" => "Labial Mate",
        "precio" => 25000,
        "cantidad" => 20
    ],
    [
        "nombre" => "Polvo Compacto",
        "precio" => 32000,
        "cantidad" => 15
    ],
    [
        "nombre" => "Paleta de Sombras",
        "precio" => 55000,
        "cantidad" => 10
    ]
];

echo "<h3>Ejercicio Práctico 7</h3>";
// 2. Mostrar el nombre del segundo producto, el precio del tercero y la cantidad disponible del primero
echo "Nombre del segundo producto: " . $productosAlmacen[1]["nombre"] . "<br>";
echo "Precio del tercer producto: $" . $productosAlmacen[2]["precio"] . "<br>";
echo "Cantidad disponible del primer producto: " . $productosAlmacen[0]["cantidad"] . "<br>";



// 1. Almacenar la información de tres aprendices (nombre, ficha, programa de formación)
$aprendices = [
    [
        "nombre" => "Ana Gómez",
        "ficha" => "2875121",
        "programa" => "Análisis y Desarrollo de Software (ADSO)"
    ],
    [
        "nombre" => "Luis Torres",
        "ficha" => "2875122",
        "programa" => "Análisis y Desarrollo de Software (ADSO)"
    ],
    [
        "nombre" => "María Rodríguez",
        "ficha" => "2875123",
        "programa" => "Análisis y Desarrollo de Software (ADSO)"
    ]
];

echo "<h3>Ejercicio Práctico 8</h3>";
// 2. Mostrar en pantalla el nombre del tercer aprendiz y la ficha del primero
echo "Nombre del tercer aprendiz: " . $aprendices[2]["nombre"] . "<br>";
echo "Ficha del primer aprendiz: " . $aprendices[0]["ficha"] . "<br>";


echo "<h3>Ejercicio Práctico </h3>";
$productos = [
    [
        "nombre" => "Mouse",
        "precio" => 35000
    ],
    [
        "nombre" => "Teclado",
        "precio" => 60000
    ]
];

echo $productos[0]["nombre"]; // Muestra: Mouse
echo "<br>";
echo $productos[1]["precio"]; // Muestra: 60000



// 1. Crear un arreglo asociativo con nombre, edad y un arreglo interno 'contacto'
$aprendiz = [
    "nombre" => "Carlos Pérez",
    "edad" => 21,
    "contacto" => [
        "correo" => "carlos.perez@sena.edu.co",
        "telefono" => "3112345678"
    ]
];

echo "<h3>Ejercicio Práctico 9</h3>";
// 2. Mostrar en pantalla el nombre del aprendiz y su correo electrónico
echo "Nombre del aprendiz: " . $aprendiz["nombre"] . "<br>";
echo "Correo electrónico: " . $aprendiz["contacto"]["correo"] . "<br>";



// 1. Crear un arreglo asociativo de producto con nombre, precio y un arreglo interno de fabricante
$productoCosmetico = [
    "nombre" => "Paleta de Sombras",
    "precio" => 55000,
    "fabricante" => [
        "nombre" => "BeautyCorp S.A.S.",
        "pais" => "Colombia"
    ]
];

echo "<h3>Ejercicio Práctico 10</h3>";
// 2. Mostrar en pantalla el nombre del producto y el país de origen del fabricante
echo "Nombre del producto: " . $productoCosmetico["nombre"] . "<br>";
echo "País de origen del fabricante: " . $productoCosmetico["fabricante"]["pais"] . "<br>";



echo "<h3>Ejercicio Práctico </h3>";
$producto = [
    "nombre" => "Monitor",
    "precio" => 750000,
    "proveedor" => [
        "nombre" => "Tecnología SAS",
        "ciudad" => "Bogotá"
    ]
];

echo $producto["nombre"];
echo "<br>";
echo $producto["proveedor"]["nombre"];
echo "<br>";
echo $producto["proveedor"]["ciudad"];

?>





