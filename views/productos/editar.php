<h1 style="color: #e638fd;">Atualizando datos</h1>

<form action="producto/editar" method="POST">

    <input type="hidden" name="id_producto" value="<?= $producto->id_producto ?? '' ?>">
    <label for="nombre"> nombre:</label>
    <input type="text" name="nombre" value="<?= $producto->nombre ?? '' ?>">

    <input type="number" name="precio" value="<?= $producto->precio ?? '' ?>">
    <label for="precio"> precio:</label>
    <input type="number" name="precio" value="<?= $producto->precio ?? '' ?>">

    <input type="number" name="stock" value="<?= $producto->stock ?? '' ?>">
    <label for="stock"> stock:</label>
    <input type="number" name="stock" value="<?= $producto->stock ?? '' ?>">

    <input type="number" name="id_categoria" value="<?= $producto->id_categoria ?? '' ?>">
    <label for="id_categoria"> id_categoria:</label>
    <input type="number" name="id_categoria" value="<?= $producto->id_categoria ?? '' ?>">

    <input type="number" name="id_proveedor" value="<?= $producto->id_proveedor ?? '' ?>">
    <label for="id_proveedor"> id_proveedor:</label>
    <input type="number" name="id_proveedor" value="<?= $producto->id_proveedor ?? '' ?>">

    <button type="submit" style="color: #e638fd;">editar</button>

</form>