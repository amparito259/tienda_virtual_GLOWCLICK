<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1 style="color: #ff0f0f;">Productos</h1>
  
    <table border="1">
        <tr>
            <th>id_producto</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>id_Categoría</th>
            <th>id_proveedor</th>
        </tr>
        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $prod): ?>
            <tr>
                <td><?= htmlspecialchars($prod['id_producto']) ?></td>
                <td><?= htmlspecialchars($prod['nombre']) ?></td>
                <td>$<?= htmlspecialchars($prod['precio']) ?></td>
                <td><?= htmlspecialchars($prod['stock']) ?></td>
                <td><?= htmlspecialchars($prod['id_categoria']) ?></td>
                <td><?= htmlspecialchars($prod['id_proveedor']) ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">No hay productos disponibles en GLOWCLICK.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>