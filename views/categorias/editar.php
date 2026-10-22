<h1 style="color: #e638fd;">Atualizando datos en categoria</h1>

<form action="/categoria/editar" method="POST">
    <input type="hidden" name="id_categoria" value="<?= $categorias['id_categoria'] ?? '' ?>">
    
    
    <label for="nombre"> Nombre:</label>
    <input type="text" name="nombre" value="<?= $categorias['nombre'] ?? '' ?>"><br>
    
    <label for="descripcion"> Descripción:</label>
    <input type="text" name="descripcion" value="<?= $categorias['descripcion'] ?? '' ?>"><br>

    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>