
<div class="row">
<div class="col s12 "></div>
</div>

<div class="row">
<div class="col s1 "></div>
    <form class="col s10 card-panel" action="?controller=index&method=signup" method="POST">
      <h3 class="blue-text center-align">Registrate!</h3>
        <div class="input-field col s6">
          <input id="name" type="text" name="nombre" class="validate" required>
          <label for="name">Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="apellido" class="validate" required>
          <label for="last_name">Apellido</label>
        </div>
        <div class="input-field col s12">
          <input type="text" name="fecha" class="datepicker" placeholder="Seleciona tu Fecha de nacimiento" required>
        </div>
        <div class="input-field col s12">
      <select required name="documento">
        <option value="" disabled selected>Seleciona tu tipo de documento</option>
        <option value="1">Cedula de Ciudadania</option>
        <option value="2">Cedula Extranjera</option>
        <option value="3">Tarjeta de identidad</option>
      </select>
    </div>
        <div class="input-field col s12">
          <input id="number_document" name="numero" type="text" class="validate" required>
          <label for="number_document">Numero de documento</label>
        </div>
        <div class="input-field col s6">
          <input id="direction" type="text" name="direccion" class="validate" required>
          <label for="direction">Direccion</label>
        </div>
        <div class="input-field col s6">
          <input id="number" type="text"  name="telefono" class="validate" required>
          <label for="number">Telefono</label>
        </div>
        <div class="input-field col s6">
          <input id="mail" type="email" name="email" class="validate" required>
          <label for="mail">Correo electronico</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate" required>
          <label for="password">Contraseña</label>
        </div>
        <button class="center-align btn waves-effect waves-light blue" type="submit">Enviar</button>
    </form>
<div class="col s1"></div>
</div>
