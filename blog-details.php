<?php require_once "header.php"; ?>

<div id="blogarticle">
    <div class="row">
        <div class="col-xl-9">
            <div id="text">
                <h1><?= $Blog['Basliq'] ?></h1>
                <span class="BlogDate"><?= substr($Blog['tarix'], 0, 10) ?></span> <span>/</span> <a href="blog-<?= $kat_slug . "-" . $Blog["kat_id"] ?>"><?= $kat_ad ?></a><br />
                <img src="<?= $Blog['sekil'] ?>" class="img-fluid mx-auto d-block" alt="" />
                <p><?= $Blog['mezmun'] ?></p>
            </div>
            <div id="tags">
                <p class="text-capitalize"><?= $tags ?></p>
            </div>
        </div>
        <div class="col-xl-3 col-md-4 col-sm-7">
            <ul class="list-group">
                <li>
                    <h4>Kateqoriyalar</h4>
                </li>
                <?php for ($i = 0; $i < count($BlogCat); $i++) { ?>
                    <a href="blog-<?= $BlogCat[$i]["slug"] . "-" . $BlogCat[$i]["id"] ?>">
                        <li class="list-group-item list-group-item-action"><?= $BlogCat[$i]["Ad"] ?></li>
                    </a>
                <?php } ?>
            </ul>
            <ul class="list-group">
                <li>
                    <h4>Digər Blog Yazıları</h4>
                </li>
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <a href="meqale-<?= $SonBloglar[$i]["slug"] . "-" . $SonBloglar[$i]["id"] ?>">
                        <li class="list-group-item list-group-item-action"><?= $SonBloglar[$i]["Basliq"] ?></li>
                    </a>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>