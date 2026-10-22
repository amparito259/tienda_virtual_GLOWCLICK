<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1 style="color: #ff0f0f;">Clientes</h1>
   
    <table border="1">
        <tr>
            <th>id_cliente</th>
            <th>nombre</th>
            <th>Acciones</th></tr>

        <?php if (!empty($clientes)): ?>
            <?php foreach ($clientes as $cli): ?>
            <tr>
                <td><?= htmlspecialchars($cli['id_cliente']) ?></td>
                <td><?= htmlspecialchars($cli['nombre']) ?></td>
                <td>
                    <a href="/cliente/editar?id=<?= htmlspecialchars($cli['id_cliente']) ?>">Guardar</a>
                </td>
            </tr>
            
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="3">No hay clientes registrados.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>