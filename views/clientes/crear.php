<link rel="stylesheet" href="tienda_virtual_GLOWCLICK/public/css/categoria/crear.css">
<h1 style="color: #ff0f0f;">Lista de clientes</h1>

<form action="/cliente" method="POST">

    <label for="nombre">nombre:</label>
    <input type="text" 
           id="nombre"
           name="nombre" 
           placeholder="Ingrese el nombre del cliente"
           required><br><br>

    <button type="submit" style="color: #e638fd;">Guardar</button>

</form>