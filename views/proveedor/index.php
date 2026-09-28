<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Proveedores</h1>
    
    <table border="1">
        <tr><th>id_proveedor</th><th>nombre</th><th>ciudad</th><th>direccion</th></tr>
        <?php if (!empty($proveedores)): ?>
            <?php foreach ($proveedores as $prov): ?>
            <tr>
                <td><?= $prov['id'] ?></td>
                <td><?= htmlspecialchars($prov['id_proveedor']) ?></td>
                <td><?= htmlspecialchars($prov['nombre']) ?></td>
                <td><?= htmlspecialchars($prov['ciudad']) ?></td>
                <td><?= htmlspecialchars($prov['direccion']) ?></td>
                <td>
                
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">No hay proveedores registrados.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>