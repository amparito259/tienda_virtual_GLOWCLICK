<h1 style="color: #e638fd;">Atualizando datos en productos</h1>

<form action="/producto/editar" method="POST">
    <input type="hidden" name="id_producto" value="<?= $productos['id_producto'] ?? '' ?>">
    
    <label for="nombre"> Nombre:</label>
    <input type="text" name="nombre" value="<?= $productos['nombre'] ?? '' ?>"><br>

<!-- me faltaba agregar name="precio" -->
    <label for="precio"> Precio:</label>
    <input type="number" id="precio" name="precio" step="0" value="<?= $productos['precio'] ?? '' ?>"><br> 
    
    <label for="stock"> Stock:</label>
    <input type="number" name="stock" value="<?= $productos['stock'] ?? '' ?>"><br>
    
    <label for="id_categoria"> ID Categoría:</label>
    <input type="number" name="id_categoria" value="<?= $productos['id_categoria'] ?? '' ?>"><br>

    <label for="id_proveedor"> ID Proveedor:</label>
    <input type="number" name="id_proveedor" value="<?= $productos['id_proveedor'] ?? '' ?>"> <br><br>

    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>

