<h1 style="color: #e638fd;">Atualizando datos en ventas</h1>

<form action="/ventas/editar" method="POST">
    <input type="hidden" name="id_venta" value="<?= $venta['id_venta'] ?? '' ?>">
    
    <label for="id_cliente"> cliente:</label>
    <input type="text" name="id_cliente" value="<?= $venta['id_cliente'] ?? '' ?>"><br>

    <label for="fecha"> fecha:</label>
    <input type="number" name="fecha" step="0" value="<?= $venta['fecha'] ?? '' ?>"><br> 

    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>