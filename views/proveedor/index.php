<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1 style="color: #ff0f0f;">Proveedores</h1>
    
    <table border="1">
        <tr>
            <th>id_proveedor</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Dirección</th>
        </tr>
        <?php if (!empty($proveedor)): ?>
            <?php foreach ($proveedor as $prov): ?>
            <tr>
                <td><?= htmlspecialchars($prov['id_proveedor']) ?></td>
                <td><?= htmlspecialchars($prov['nombre']) ?></td>
                <td><?= htmlspecialchars($prov['ciudad']) ?></td>
                <td><?= htmlspecialchars($prov['direccion']) ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No hay proveedores registrados.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>