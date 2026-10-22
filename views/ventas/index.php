<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1 style="color: #ff0f0f;">Ventas</h1>

    <table border="1">
        <tr>
            <th>ID Venta</th>
            <th>ID Cliente</th>
            <th>Fecha</th>
            <th>Total</th>
             <th>Acciones</th>
        </tr>
        <?php if (!empty($ventas)): ?>
            <?php foreach ($ventas as $ven): ?>
            <tr>
                <td><?= htmlspecialchars($ven['id_venta']) ?></td>
                <td><?= htmlspecialchars($ven['id_cliente']) ?></td>
                <td><?= htmlspecialchars($ven['fecha']) ?></td>
                <td>$<?= htmlspecialchars(number_format($ven['total'], 2)) ?></td>
                <td>
                     <a href="/ventas/editar?id=<?= htmlspecialchars($ven['id_venta']); ?>">Guardar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4">No hay ventas registradas.</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>