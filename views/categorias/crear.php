<link rel="stylesheet" href="tienda_virtual_GLOWCLICK/public/css/categoria/crear.css">
<h1 style="color: #ff0f0f;">Lista de Categorias</h1>

<form action="/categoria" method="POST">

    <label for="nombre">nombre:</label>
    <input type="text" 
    id="nombre"
    name="nombre" 
    placeholder="Ingrese el nombre de la categoría"><br><br>

    <label for="descripcion">descripcion:</label>
    <input type="text"
     name="descripcion" 
     id="descripcion" 
     placeholder="Ingrese la descripción de la categoría"><br><br>

  <button type="submit" style="color: #e638fd;">Guardar</button>

</form>