<?php
$rutas=[
    "GET" => [
        "/categoria" => ['categoriaController', 'listar'],
        "/clientes" => ['clienteController', 'listar'],
        "/producto" => ['productoController', 'listar'],
        "/proveedor" => ['proveedorController', 'listar'],
        "/usuario" => ['usuarioController', 'listar'],
        "/venta" => ['ventaController', 'listar'],

        "/categoria/crear" => ['categoriaController', 'crear'],
        "/clientes/crear" => ['clienteController', 'crear'],
        "/proveedor/crear" => ['proveedorController', 'crear'],
        "/usuario/crear" => ['usuarioController', 'crear'],
        "/venta/crear" => ['ventaController', 'crear'],
        "/producto/crear" => ['productoController', 'crear'],

        "/categoria/editar" => ['categoriaController', 'editar'],
        "/clientes/editar" => ['clienteController', 'editar'],
        "/producto/editar" => ['productoController', 'editar'],
        "/proveedor/editar" => ['proveedorController', 'editar'],
        "/usuario/editar" => ['usuarioController', 'editar'],
        "/venta/editar" => ['ventaController', 'editar'],
      
    ],

     "POST" =>[
        "/categoria/guardar" => ['categoriaController', 'guardar'],
        "/categoria/actualizar" => ['categoriaController', 'actualizar'],
        "/categoria/eliminar" => ['categoriaController', 'eliminar'],

        "/clientes/guardar" => ['clienteController', 'guardar'],
        "/clientes/actualizar" => ['clienteController', 'actualizar'],
        "/clientes/eliminar" => ['clienteController', 'eliminar'],

        "/producto/guardar" => ['productoController', 'guardar'],
        "/producto/actualizar" => ['productoController', 'actualizar'],
        "/producto/eliminar" => ['productoController', 'eliminar'],

        "/proveedor/guardar" => ['proveedorController', 'guardar'],
        "/proveedor/actualizar" => ['proveedorController', 'actualizar'],
        "/proveedor/eliminar" => ['proveedorController', 'eliminar'],

        "/usuario/guardar" => ['usuarioController', 'guardar'],
        "/usuario/actualizar" => ['usuarioController', 'actualizar'],
        "/usuario/eliminar" => ['usuarioController', 'eliminar'],
        
        "/venta/guardar" => ['ventaController', 'guardar'],
        "/venta/actualizar" => ['ventaController', 'actualizar'],
        "/venta/eliminar" => ['ventaController', 'eliminar'],
 
    ]
];

return $rutas;
?>