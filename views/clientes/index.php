<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Clientes</h1>
   
    <table border="1">
        <tr><th>id_cliente</th><th>nombre</th></tr>
        <?php if (!empty($cliente)): ?>
            <?php foreach ($cliente as $cli): ?>
            <tr>
                <td><?= htmlspecialchars($cli['id_cliente']) ?></td>
                <td><?= htmlspecialchars($cli['nombre']) ?></td>
                <td>
            
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">No hay clientes registrados.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>

