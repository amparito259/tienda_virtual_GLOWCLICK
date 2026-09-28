<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Ventas</h1>

    <table border="1">
        <tr><th>id_venta</th><th>id_cliente</th><th>fecha</th><th>total</th></tr>
        <?php if (!empty($ventas)): ?>
            <?php foreach ($ventas as $ven): ?>
            <tr>
                <td><?= $ven['id'] ?></td>
                <td><?= htmlspecialchars($ven['id_venta']) ?></td>
                <td><?= htmlspecialchars($ven['id_cliente']) ?></td>
                <td><?= htmlspecialchars($ven['fecha']) ?></td>
                <td><?= htmlspecialchars($ven['total']) ?></td>
                <td>
             
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">No hay ventas registradas.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>
