<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Usuarios</h1>
 
    <table border="1">
        <tr><th>id_usuario</th><th>nombre</th><th>correo</th><th>contrasena</th><th>estado</th></tr>
        <?php if (!empty($usuarios)): ?>
            <?php foreach ($usuarios as $usu): ?>
            <tr>
                <td><?= htmlspecialchars($usu['id_usuario']) ?></td>
                <td><?= htmlspecialchars($usu['nombre']) ?></td>
                <td><?= htmlspecialchars($usu['correo']) ?></td>
                <td><?= htmlspecialchars($usu['contrasena']) ?></td>
                <td><?= htmlspecialchars($usu['estado']) ?></td>
                <td>
              
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







