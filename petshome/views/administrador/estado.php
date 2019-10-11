<form action="?controller=administrador&method=cambiar" method="POST">
<h1>Activa o Inactiva usuarios</h1>
<input type="hidden" name="id_user" value=<?= $variable ?>>
<select name="estado" id="">
<option value="">estado...</option>
<option value="1">Activo</option>
<option value="2">Inactivo</option>
</select>
<input type="submit" value="Guardar">
</form>