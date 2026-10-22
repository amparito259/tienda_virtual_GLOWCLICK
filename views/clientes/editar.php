<h1 style="color: #e638fd;">Atualizando datos en clientes</h1>

<form action="/cliente/editar" method="POST">
    <input type="hidden" name="id_cliente" value="<?= $clientes['id_cliente'] ?? '' ?>">
    
    <label for="nombre"> Nombre:</label>
    <input type="text" name="nombre" value="<?= $clientes['nombre'] ?? '' ?>"><br>

    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>