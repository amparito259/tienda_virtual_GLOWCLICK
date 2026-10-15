<h1 style="color: #ff0f0f;">Crear Venta</h1>

<form action="/venta" method="POST">
    <label for="id_cliente">ID Cliente:</label>
    <input type="number" id="id_cliente" name="id_cliente" placeholder="Ingrese el ID del cliente" required><br><br>

    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required><br><br>

    <label for="total">Total:</label>
    <input type="number" step="0.01" id="total" name="total" placeholder="0.00" required><br><br>

    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>