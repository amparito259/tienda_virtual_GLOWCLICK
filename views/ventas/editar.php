<h1 style="color: #e638fd;">Actualizando datos en ventas</h1>

<form action="/ventas/editar" method="POST">
    <!-- ¡Este campo oculto es obligatorio para que el sistema sepa qué venta editar! -->
    <input type="hidden" name="id_venta" value="<?= $ventas['id_venta'] ?? '' ?>">
    
    <label for="id_cliente">ID Cliente:</label>
    <input type="number" name="id_cliente" value="<?= $ventas['id_cliente'] ?? '' ?>"><br><br>

    <label for="fecha">Fecha:</label>
    <input type="text" name="fecha" value="<?= $ventas['fecha'] ?? '' ?>"><br><br> 
    
    <label for="total">Total:</label>
    <input type="number" step="0.01" name="total" value="<?= $ventas['total'] ?? '' ?>"><br><br>

    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>