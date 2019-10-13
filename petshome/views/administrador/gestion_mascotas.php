<section class="container">
<h3>Información de máscotas</h3>

<table class="table">
    <thead>
        <th>Fecha</th>
        <th>Titulo</th>
        <th>Descripción</th>
        <th>Especie</th>
        <th>Raza</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Imagen</th>
        <th>Usuario</th>
    </thead>
    <tbody>
    <?php foreach(parent::all_pets() as $user):  ?>
        <tr>
            <td><?= $user->fecha?></td>
            <td><?= $user->titulo?></td>
            <td><?= $user->descripcion?></td>
            <td><?= $user->nombre_especie?></td>
            <td><?= $user->raza?></td>
            <td><?= $user->nombre?></td>
            <td><?= $user->edad?></td>
            <td><?= $user->nombre_sexo?></td>
            <td><img class="imagen" src="<?= $user->imagen ?>" alt=""></td>
            <td><?= $user->correo_user?></td>
            <td><a href="?controller=administrador&method=delete&id_informacion=<?=$user->id_informacion?>"><img class="imagen" src="assets/img/delete.png" alt=""></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</section>