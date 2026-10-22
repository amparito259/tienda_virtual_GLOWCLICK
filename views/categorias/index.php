<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="color: #ff0f0f;">Categorias</h1>
  
    <table border="1" >
        <tr><th>id_categoria</th>
        <th>Nombre</th>
        <th>descripcion</th>
        <th>Acciones</th></tr>

        <?php if (!empty($categorias)): ?>
            <?php foreach ($categorias as $prod): ?>
            <tr>
                <td><?= $prod['id_categoria'] ?></td>
                <td><?= $prod['nombre'] ?></td>
                <td><?= $prod['descripcion'] ?></td>
                <td>
                    <a href="/categoria/editar?id=<?= htmlspecialchars($prod['id_categoria']) ?>">Guardar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">No hay categorias disponibles</td></tr>
        <?php endif; ?>
    </table>
    <script src="js/script.js"></script>
</body>
</html>