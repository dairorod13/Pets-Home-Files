
<div class="row">
<div class="col s12 "></div>
</div>
<div class="row">
<div class="col s1 "></div>
    <form class="col s10 card-panel" action="?controller=usuario&method=actualizacion" method="POST" enctype=multipart/form-data>
      <h3 class="blue-text center-align">Modifica la información de tu mascota</h3>
      <div class="input-field col s6">
          <input type="hidden" name="id_user" value="<?= $variable->id_user ?>">
          <input type="hidden" name="id_informacion" value="<?= $about->id_informacion ?>">
          <input type="text" name="fecha" class="datepicker" placeholder="Fecha de hoy" value="<?= $about->fecha ?>"required>
        </div>
        <div class="input-field col s6">
          <input id="title" type="text" name="titulo" class="validate" value="<?= $about->titulo ?>" required>
          <label for="title">titulo</label>
        </div>
        <div class="input-field col s6">
          <input id="descripcion" type="text" name="descripcion" class="validate" value="<?= $about->descripcion ?>" required>
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
          <input id="nombre_animal" name="nombre_pet" type="text" class="validate" value="<?= $about->nombre?>" required>
          <label for="nombre_animal">Nombre de la mascota</label>
        </div>
        <div class="input-field col s6">
          <input id="raza" type="text" name="raza" class="validate" value="<?= $about->raza ?>">
          <label for="raza">Raza-Especie</label>
        </div>
        <div class="input-field col s6">
          <input id="edad" type="text"  name="edad" class="validate" value="<?= $about->edad ?>">
          <label for="edad">Edad</label>
        </div>
        <div class="input-field col s6">
      <select required name="sexo" value="<?= $about->sexo_id ?>">
        <option value="" disabled selected>Seleciona el sexo animal</option>
        <option value="1">Macho</option> 
        <option value="2">Hembra</option>
        <option value="3">Indenfinido</option>
      </select>
    <div class="file-field input-field col s12">
      <div class="btn">
        <span>imagen</span>
        <input type="file" name="imagen" value="<?= $about->imagen ?>">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
        <button class="center-align btn waves-effect waves-light blue" type="submit">Modificar</button>
    </form>
    </div>
<div class="col s1"></div>
</div>
