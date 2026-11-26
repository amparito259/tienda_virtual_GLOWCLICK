<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Detalle de la Venta</h1>
    <a href="/venta">Volver a Ventas</a>
    
    <table border="1">
        <tr>
            <th>ID Detalle</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
        </tr>
        <?php if (!empty($detalles)): ?>
            <?php foreach ($detalles as $det): ?>
            <tr>
                <td><?= htmlspecialchars($det['id']) ?></td>
                <td><?= htmlspecialchars($det['producto']) ?></td>
                <td><?= htmlspecialchars($det['cantidad']) ?></td>
                <td>$<?= htmlspecialchars(number_format($det['precio_unitario'], 2)) ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No hay detalles para esta venta.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>