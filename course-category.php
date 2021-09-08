<?php require_once "header.php" ?>

<div class="row" id="category">

    <ul class="list-group col-md-4 col-xl mb-4">
        <li>
            <h4>Kateqoriyalar</h4>
        </li>
        <?php for ($i = 0; $i < count($KursCat); $i++) { ?>
            <a href="course-<?= $KursCat[$i]["slug"] . "-" . $KursCat[$i]["id"] ?>">
                <li class="list-group-item list-group-item-action"><?= $KursCat[$i]["Ad"] ?></li>
            </a>
        <?php } ?>
    </ul>

    <div class="row row-cols-1 row-cols-xl-3 row-cols-md-1 row-cols-lg-2 col-md col-xl-10" id="courses-cat">
        <?php for ($i = 0; $i < count($KursCategory); $i++) { ?>
            <div class="col mb-4 animatedParent animateOnce">
                <div class="card course animated fadeInUp">
                    <div class="card-img-top">
                        <a href="kurs-<?= $KursCategory[$i]["slug"] . "-" . $KursCategory[$i]["id"] ?>"><img style="height: 181px; width:100%;" src="<?= $KursCategory[$i]["sekil"] ?>" alt="<?= $KursCategory[$i]["Basliq"] ?>" /></a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="kurs-<?= $KursCategory[$i]["slug"] . "-" . $KursCategory[$i]["id"] ?>"><?= $KursCategory[$i]["Basliq"] ?></a>
                        </h5>
                        <p class="card-text"><?= mb_substr($KursCategory[$i]["Mezmun"], 0, 168) ?>...</p>
                        <span><?= $KursCategory[$i]["qiymet"] ?> AZN</span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require_once "footer.php" ?>