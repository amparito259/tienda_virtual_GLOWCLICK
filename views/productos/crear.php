<h1 style="color: #ff0f0f;">Crear Producto</h1>

<form action="/producto" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre del producto" required><br><br>

    <label for="precio">Precio:</label>
    <input type="number" step="0.01" id="precio" name="precio" placeholder="Precio" required><br><br>

    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" placeholder="Cantidad disponible" required><br><br>

    <label for="id_categoria">ID Categoría:</label>
    <input type="number" id="id_categoria" name="id_categoria" placeholder="ID de la categoría" required><br><br>

    <label for="id_proveedor">ID Proveedor:</label>
    <input type="number" id="id_proveedor" name="id_proveedor" placeholder="ID del proveedor" required><br><br>

    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>