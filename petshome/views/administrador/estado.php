<form action="?controller=administrador&method=cambiar" method="POST">
<h1>Usuario <?=$user->nombre_user?> <?=$user->apellido_user?></h1>
<h3>Por seguridad activa o inactiva usuarios en el sistema</h3>
<input type="hidden" name="id_user" value="<?=$user->id_user?>">
<select name="estado">
<option value="">estado...</option>
<option value="1">Activo</option>
<option value="2">Inactivo</option>
</select>
<input type="submit" value="Guardar">
</form>