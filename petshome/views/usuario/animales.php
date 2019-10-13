<section class="container">
<h3>Máscotas subidas por <?= $usuario->nombre_user?> <?= $usuario->apellido_user?></h3>

<table class="table">
    <thead>
        <th>Fecha</th>
        <th>Título</th>
        <th>descripción</th>
        <th>Especie</th>
        <th>Raza</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Imagen</th>
    </thead>
    <tbody>
    <?php foreach(parent::about_animal() as $user):  ?>
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
            <td><a href="?controller=usuario&method=update_post&id_informacion=<?=$user->id_informacion?>"><img class="imagen" src="assets/img/edit.svg" alt=""></a></td>
            <td><a href="?controller=usuario&method=delete&id_informacion=<?=$user->id_informacion?>"><img class="imagen" src="assets/img/delete.png" alt=""></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</section>