<div class="row">
    
    <?php foreach(parent::all() as $publication):  ?>
        <div id="panel" class="panel2">
            <div class="text2">
            <h3><?= $publication ->nombre ?> </h3>
            </div>
            <img class="img-publication" src="<?= $publication->imagen ?>" alt="">
            <div class="text">
            </div>
        </div>
    <?php endforeach; ?>

</div>