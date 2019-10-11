<section>
<div class="row">
<div class="col s2"></div>
    <form class="col s8" method="POST" action="?controller=usuario&method=account">
        
        <h1>Mi perfil</h1>
        <input type="hidden" name="id_user" value="<?= $change->id_user ?>">
        
        <div class="input-field col s6">
          <input id="name" type="text" name="nombre" class="validate" value="<?= $change->nombre_user ?>">
          <label for="name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="apellido" class="validate" value="<?= $change->apellido_user ?>">
          <label for="last_name">Apellido</label>
        </div>
        <div class="input-field col s6">
          <input id="date" name="fecha" type="text" class="validate" value="<?= $change->fecha_user ?>">
        </div>
        <select name="documento" >
        <option value="">seleccione aqui...</option>
        <option value="1">cedula</option>
        <option value="2">extran</option>
        <option value="3">tarjeta de </option>
        </select>
        <div class="input-field col s6">
          <input id="numero" name="numero" type="text" class="validate" value="<?= $change->numero_doc ?>">
          <label for="numero">Numero de documento</label>
        </div>
        <div class="input-field col s6">
          <input id="direccion" name="direccion" type="text" class="validate" value="<?= $change->direccion_ciudad ?>">
          <label for="direccion">Direccion</label>
        </div>
        <div class="input-field col s6">
          <input id="telefono" name="telefono" type="text" class="validate" value="<?= $change->telefono_user ?>">
          <label for="telefono">Telefono</label>
        </div>
        <div class="input-field col s6">
          <input id="correo" type="email" name="correo" class="validate" value="<?= $change->correo_user ?>">
          <label for="correo">Correo electronico</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
        <input class="btn btn-green" type="submit" value="Modificar datos">
    </form>
<div class="col s2"></div>
</div>
          <a class="btn btn-danger" href="?controller=usuario">Regresar</a>
</section>