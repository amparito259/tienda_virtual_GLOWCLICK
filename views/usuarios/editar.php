<h1 style="color: #e638fd;">Atualizando datos de usuario</h1>

<form action="/usuarios/editar" method="POST">
    <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?? '' ?>">
    
    <label for="nombre"> Nombre:</label>
    <input type="text" name="nombre" value="<?= $usuario['nombre'] ?? '' ?>"><br>

    <label for="correo"> correo:</label>
    <input type="number" name="correo" step="0" value="<?= $usuario['correo'] ?? '' ?>"><br> 
    
    <label for="contrasena"> contraseña:</label>
    <input type="number" name="contrasena" value="<?= $usuario['contraseña'] ?? '' ?>"><br>

     <label for="estado"> estado:</label>
    <input type="number" name="estado" value="<?= $usuario['estado'] ?? '' ?>"><br>

    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>