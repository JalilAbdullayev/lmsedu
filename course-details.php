<?php require_once "header.php"; ?>

    <div id="blogarticle" class="container-xl">
        <div class="row">
            <div class="col-xl-9">
                <div id="text">
                    <h1><?= $Kurslar['Basliq'] ?></h1>
                    <span id="category"><a href="course-<?= $kat_slug . "-" . $Kurslar["kat_id"] ?>"><?= $kat_ad ?></a></span><br/>
                    <img src="<?= $Kurslar['sekil'] ?>" class="img-fluid mx-auto d-block" alt=""/>
                    <span id="price"><?= $Kurslar['qiymet'] ?> AZN</span>
                    <p><?= $Kurslar['Mezmun'] ?></p>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-7">
                <ul class="list-group">
                    <li>
                        <h4>Kateqoriyalar</h4>
                    </li>
                    <?php for ($i = 0; $i < count($KursCat); $i++) { ?>
                        <a href="blog-<?= $KursCat[$i]["slug"] . "-" . $KursCat[$i]["id"] ?>">
                            <li class="list-group-item list-group-item-action"><?= $KursCat[$i]["Ad"] ?></li>
                        </a>
                    <?php } ?>
                </ul>
                <ul class="list-group">
                    <li>
                        <h4>Digər Kurslar</h4>
                    </li>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <a href="kurs-<?= $DigerKurslar[$i]["slug"] . "-" . $DigerKurslar[$i]["id"] ?>">
                            <li class="list-group-item list-group-item-action"><?= $DigerKurslar[$i]["Basliq"] ?></li>
                        </a>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

<?php require_once "footer.php"; ?>