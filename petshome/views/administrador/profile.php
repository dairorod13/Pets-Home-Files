
<div class="row">
<div class="col s12 "></div>
</div>
<div class="row">
<div class="col s1 "></div>
    <form class="col s10 card-panel" action="?controller=administrador&method=account" method="POST">
      <h3 class="blue-text center-align">Mi perfil</h3>
        <div class="input-field col s6">     
          <input id="id_user" type="hidden" name="id_user" class="validate" value="<?= $change->id_user ?>" required> 
          <input id="name" type="text" name="nombre" class="validate" value="<?= $change->nombre_user ?>"  required>
          <label for="name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="apellido" class="validate" value="<?= $change->apellido_user ?>" required>
          <label for="last_name">Apellido</label>
        </div>
        <div class="input-field col s12">
          <input type="date" name="fecha" required>
        </div>
        <div class="input-field col s12">
      <select required name="documento" value="<?= $change->documento_id ?>">
        <option value="" disabled selected>Seleciona tu tipo de documento</option>
        <option value="1">Cedula de Ciudadania</option>
        <option value="2">Cedula Extranjera</option>
        <option value="3">Tarjeta de identidad</option>
      </select>
    </div>
        <div class="input-field col s12">
          <input id="number_document" name="numero" type="tel" class="validate" value="<?= $change->numero_doc ?>" required>
          <label for="number_document">Numero de documento</label>
        </div>
        <div class="input-field col s6">
          <input id="direction" type="text" name="direccion" class="validate" value="<?= $change->direccion_ciudad ?>" required>
          <label for="direction">Direccion</label>
        </div>
        <div class="input-field col s6">
          <input id="number" type="tel"  name="telefono" class="validate" value="<?= $change->telefono_user ?>" required>
          <label for="number">Telefono</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="email" name="email" class="validate" value="<?= $change->correo_user ?>" required>
          <label for="email">Correo electronico</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate" required>
          <label for="password">Contraseña</label>
        </div>
        <center>
        <input class="btn btn-green" type="submit" value="Modificar">
        </center>

    </form>
<div class="col s1"></div>
</div>

      