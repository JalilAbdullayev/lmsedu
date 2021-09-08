<?php require_once "header.php" ?>

<div id="about">
    <div class="row row-cols-1 row-cols-xl-2 row-cols-md-1">
        <div class="col">
            <img src="<?= $CRUD->Select("haqqinda")["img"] ?>" class="mx-auto d-block" alt="<?= $CRUD->Select("haqqinda")["Basliq"] ?>" />
        </div>
        <div class="col">
            <h1><?= $CRUD->Select("haqqinda")["Basliq"] ?></h1>
            <p><?= $CRUD->Select("haqqinda")["Mezmun"] ?></p>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>