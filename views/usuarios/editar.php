<h1 style="color: #e638fd;">Actualizando datos de usuario</h1>

<form action="/usuarios/editar" method="POST">
    <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?? '' ?>">
    
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?= $usuario['nombre'] ?? '' ?>"><br><br>

    <label for="correo">Correo:</label>
    <input type="text" name="correo" value="<?= $usuario['correo'] ?? '' ?>"><br><br>
    
    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" value="<?= $usuario['contraseña'] ?? '' ?>"><br><br>

    <label for="estado">Estado:</label>
    <select id="estado" name="estado" required>
        <option value="Activo" <?= (isset($usuario['estado']) && $usuario['estado'] == 'Activo') ? 'selected' : ''; ?>>Activo</option>
        <option value="Inactivo" <?= (isset($usuario['estado']) && $usuario['estado'] == 'Inactivo') ? 'selected' : ''; ?>>Inactivo</option>
    </select><br><br>
     
    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>