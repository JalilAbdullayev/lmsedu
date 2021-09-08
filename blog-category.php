<?php require_once "header.php"; ?>

<div class="row" id="category">

    <ul class="list-group col-md-4 col-xl mb-4">
        <li>
            <h4>Kateqoriyalar</h4>
        </li>
        <?php for ($i = 0; $i < count($BlogCat); $i++) { ?>
            <a href="blog-<?= $BlogCat[$i]["slug"] . "-" . $BlogCat[$i]["id"] ?>">
                <li class="list-group-item list-group-item-action"><?= $BlogCat[$i]["Ad"] ?></li>
            </a>
        <?php } ?>
    </ul>

    <div class="row row-cols-1 row-cols-xl-3 row-cols-md-1 row-cols-lg-2 col-md col-xl-10" id="blogs">
        <?php for ($i = 0; $i < count($BlogCategory); $i++) { ?>
            <div class="col mb-4 animatedParent animateOnce">
                <div class="card blog animated fadeInUp">
                    <a href="meqale-<?= $BlogCategory[$i]["slug"] . "-" . $BlogCategory[$i]["id"] ?>"><img style="height: 250px; width:100%;" src="<?= $BlogCategory[$i]["sekil"] ?>" alt="<?= $BlogCategory[$i]["Basliq"] ?>" class="card-img-top" alt="..." /></a>
                    <div id="date"><i class="far fa-calendar-alt"></i> <?= substr($BlogCategory[$i]["tarix"], 0, 10) ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="meqale-<?= $BlogCategory[$i]["slug"] . "-" . $BlogCategory[$i]["id"] ?>"><?= $BlogCategory[$i]["Basliq"] ?></a>
                        </h5>
                        <div class="card-text"><?= mb_substr($BlogCategory[$i]["mezmun"], 0, 158) ?>...</div>
                    </div>
                    <div class="row" id="read-comment">
                        <div id="read" class="col"><a href="meqale-<?= $BlogCategory[$i]["slug"] . "-" . $BlogCategory[$i]["id"] ?>">Read
                                More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>

<?php require_once "footer.php"; ?>