<section class="container">
<h3>Lista de usuarios</h3>

<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de nacimiento</th>
        <th>Tipo de documento</th>
        <th>Número de documento</th>
        <th>Dirección</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Estado</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->nombre_user ?></td>
            <td><?= $user->apellido_user ?></td>
            <td><?= $user->fecha_user ?></td>
            <td><?= $user->nombre_documento?></td>
            <td><?= $user->documento_id?></td>
            <td><?= $user->direccion_ciudad?></td>
            <td><?= $user->telefono_user ?></td>
            <td><?= $user->correo_user?></td>
            <td><?= $user->nombre_rol?></td>
            <td><a href="?controller=administrador&method=estado&id_user=<?= $user->id_user ?>"><?= $user->nombre_estado?></a></td>
            </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</section>