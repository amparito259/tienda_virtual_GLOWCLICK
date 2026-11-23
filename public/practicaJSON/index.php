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
echo "<pre>" . json_encode($productos, JSON_PRETTY_PRINT) . "</pre>";


echo "<br> <br>";
echo "<br>3. Ejercicio 2. De JSON a PHP <br>";
$json = file_get_contents(__DIR__ . "/productos.json");
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

$json = file_get_contents(__DIR__ . "/productos.json");
$productos = json_decode($json, true);

foreach ($productos as &$producto) {
    if ($producto["id"] == 2) {
        $producto["precio"] = 125000;
        break;
    }
}
unset($producto);

echo "<pre>" . json_encode($productos, JSON_PRETTY_PRINT) . "</pre>";

?>



