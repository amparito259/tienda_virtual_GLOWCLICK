<h1 style="color: #ff0f0f;">Crear Usuario</h1>

<form action="/usuario" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre del usuario" required><br><br>

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" placeholder="correo@ejemplo.com" required><br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese una contraseña" required><br><br>

    <label for="estado">Estado:</label>
    <select id="estado" name="estado" required>
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select><br><br>

    <button type="submit" style="color: #e638fd;">Guardar</button>
</form>