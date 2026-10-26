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
            <?php foreach ($categorias as $cat): ?>
            <tr>
                <td><?= $cat['id_categoria'] ?></td>
                <td><?= $cat['nombre'] ?></td>
                <td><?= $cat['descripcion'] ?></td>
                <td>
                    <a href="/categoria/editar?id=<?= htmlspecialchars($cat['id_categoria']) ?>" style="color: #c748fa;" >Editar</a>
                    <form action="/categoria/eliminar" method="POST" onsubmit="return confirm('Deseas eliminar la categoria?')">
                    <input type="hidden" name="id_categoria" value="<?= $cat['id_categoria']  ?>">
                    <button type="submit">Eliminar</button>
                    </form>
    
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