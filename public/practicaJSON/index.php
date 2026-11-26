<?php
echo "<br>2. Ejercicio 1. De PHP a JSON <br>";
echo "<br> <br>";
$productos = [
["id" => 1, "nombre" => "labial mate", "precio" =>22000, "stock" => 15, "disponibilidad" => true] ,
["id" => 2, "nombre" => "rubor compacto", "precio" => 28000, "stock" => 10, "disponibilidad" => true ],
["id" => 3, "nombre" => "polvo suento", "precio" => 34000, "stock" => 0, "disponibilidad" => false]
];
echo json_encode($productos);
$productos[] = ["id" => 4, "nombre" => "paleta de sombras", "precio" => 45000, "stock" =>8, "disponibilidad" => true];

echo "<pre>" . json_encode($productos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "</pre>";


echo "<br> <br>";
echo "<br>3. Ejercicio 2. De JSON a PHP <br>";
echo "<br> <br>";
$json = file_get_contents(__DIR__ . "/productos.json" );
$productos = json_decode($json, true);

foreach ($productos as $producto) {
    echo $producto["nombre"] . " - $" . $producto["precio"] . "<br>";
}

echo "<br>Mayores a $100.000:<br>";
foreach ($productos as $producto) {
    if ($producto["precio"] > 100000) {
        echo $producto["nombre"] . " - $" . $producto["precio"] . "<br>";
    }
}


echo "<br> <br>";
echo "<br>4. Ejercicio 3. Modificar y convertir información <br>";
echo "<br> <br>";

$json = file_get_contents(__DIR__ . "/productos.json");
$productos = json_decode($json, true);

foreach ($productos as &$producto) {
    if ($producto["id"] == 2) {
        $producto["precio"] = 125000;
        break;
    }
}
unset($producto);

echo "<pre>" . json_encode($productos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "</pre>";





echo "<br> <br>";
echo "<br>Actividad 2. Ejercicio guiado (index.php) <br>";
echo "<br> <br>";
header("Content-Type: application/json; charset=utf-8");

$producto = [
    "id" => 1,
    "nombre" => "Mouse",
    "precio" => 35000
];

$idBuscado = 1;

if ($idBuscado === $producto["id"]) {
    http_response_code(200);
    echo json_encode($producto);
} else {
    http_response_code(404);
    echo json_encode([
        "mensaje" => "Producto no encontrado"
    ]);
}



echo "<br> <br>";
echo "<br>Actividad 3. Práctica individual guiada <br>";
echo "<br> <br>";
header("Content-Type: application/json; charset=utf-8");

$producto = [
    "id" => 3,
    "nombre" => "Monitor",
    "precio" => 780000,
    "stock" => 6
];

$idBuscado = 3; 

if ($idBuscado === $producto["id"]) {
    http_response_code(200);
    echo json_encode($producto);
} else {
    http_response_code(404);
    echo json_encode([
        "mensaje" => "El producto no existe"
    ]);
}

?>




