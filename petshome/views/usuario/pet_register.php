
<div class="row">
<div class="col s12 "></div>
</div>
<div class="row">
<div class="col s1 "></div>
    <form class="col s10 card-panel" action="?controller=usuario&method=registro_pet" method="POST" enctype=multipart/form-data>
      <h3 class="blue-text center-align">Registra tu mascota</h3>
      <div class="input-field col s6">
          <input type="hidden" name="id_user" value="<?= $name->id_user ?>">
          <input type="text" name="fecha" class="datepicker" placeholder="Fecha de hoy" required>
        </div>
        <div class="input-field col s6">
          <input id="title" type="text" name="titulo" class="validate" required>
          <label for="title">titulo</label>
        </div>
        <div class="input-field col s6">
          <input id="descripcion" type="text" name="descripcion" class="validate" required>
          <label for="descripcion">descripcion</label>
        </div>
        <div class="input-field col s6">
      <select required name="especie">
        <option value="" disabled selected>Seleciona el animal</option>
        <option value="1">Perro</option> 
        <option value="2">Gato</option>
        <option value="3">Conejo</option>
        <option value="4">Pajaro</option>
        <option value="5">Pescado</option>
        <option value="6">Tortuga</option>
        <option value="7">Hamster</option>
      </select>
    </div>
        <div class="input-field col s6">
          <input id="nombre_animal" name="nombre_pet" type="text" class="validate" required>
          <label for="nombre_animal">Nombre de la mascota</label>
        </div>
        <div class="input-field col s6">
          <input id="raza" type="text" name="raza" class="validate">
          <label for="raza">Raza-Especie</label>
        </div>
        <div class="input-field col s6">
          <input id="edad" type="text"  name="edad" class="validate" required>
          <label for="edad">Edad</label>
        </div>
        <div class="input-field col s6">
      <select required name="sexo">
        <option value="" disabled selected>Seleciona el sexo animal</option>
        <option value="1">Macho</option> 
        <option value="2">Hembra</option>
        <option value="3">Indenfinido</option>
      </select>
    <div class="file-field input-field col s12">
      <div class="btn">
        <span>imagen</span>
        <input type="file" name="imagen">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
        <div class="container">
        <button class="center-align btn waves-effect waves-light blue" type="submit">Registrar</button></div>
    </form>
<div class="col s1"></div>
</div>
