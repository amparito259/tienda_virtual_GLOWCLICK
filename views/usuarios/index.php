<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1 style="color: #ff0f0f;">Usuarios</h1>
 
    <table border="1">
        <tr>
            <th>id_usuario</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php if (!empty($usuarios)): ?>
            <?php foreach ($usuarios as $usu): ?>
            <tr>
                <td><?= htmlspecialchars($usu['id_usuario']) ?></td>
                <td><?= htmlspecialchars($usu['nombre']) ?></td>
                <td><?= htmlspecialchars($usu['correo']) ?></td>
                <td>••••••••</td>
                <td><?= htmlspecialchars($usu['estado']) ?></td>
                <td>
                   <a href="/usuarios/editar?id=<?= htmlspecialchars($usu['id_usuario']); ?>">Editar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">No hay usuarios registrados.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>