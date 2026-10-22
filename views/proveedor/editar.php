<h1 style="color: #e638fd;">Actualizando datos</h1>

<form action="/proveedor/editar" method="POST">
    <input type="hidden" name="id_proveedor" value="<?= $proveedor['id_proveedor'] ?? '' ?>">
    
    <label for="nombre"> Nombre:</label>
    <input type="text" name="nombre" value="<?= $proveedor['nombre'] ?? '' ?>"><br>

    <label for="ciudad"> Ciudad:</label>
    <input type="text" name="ciudad" value="<?= $proveedor['ciudad'] ?? '' ?>"><br> <!-- Cambiado a type="text" -->
    
    <label for="direccion"> Dirección:</label>
    <input type="text" name="direccion" value="<?= $proveedor['direccion'] ?? '' ?>"><br> <!-- Cambiado a type="text" -->

    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>