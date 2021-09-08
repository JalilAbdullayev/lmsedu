<?php require_once "header.php"; ?>
    <div class="main-carousel header"
         data-flickity='{ "cellAlign": "center", "contain": true, "autoPlay": true, "wrapAround": true }'>
        <?php for ($i = 0; $i < count($Slider); $i++) { ?>
            <div class="carousel-cell">
                <img src="<?= $Slider[$i]["sekil"] ?>" alt="<?= $Slider[$i]["Basliq"] ?>" class="d-block w-100"/>
                <div id="slidetext">
                    <h1><b><?= $Slider[$i]["Basliq"] ?></b></h1>
                    <p><?= mb_substr($Slider[$i]["Mezmun"], 0, 150) ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    <div id="topcourses">
        <div id="left">
            <h1>Top Courses</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi bibendum venenatis mollis.</p>
        </div>
        <div id="courses-cat" class="row row-cols-1 row-cols-xl-3 row-cols-md-2 row-cols-sm-1">
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="col mb-4 animatedParent animateOnce">
                    <div class="card course animated fadeInUp">
                        <div class="card-img-top">
                            <a href="kurs-<?= $DigerKurslar[$i]["slug"] . "-" . $DigerKurslar[$i]["id"] ?>"><img
                                        src="<?= $DigerKurslar[$i]["sekil"] ?>" alt="<?= $DigerKurslar[$i]["Basliq"] ?>"
                                        style="height: 181px; width: 100%;"/></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a
                                        href="kurs-<?= $DigerKurslar[$i]["slug"] . "-" . $DigerKurslar[$i]["id"] ?>"><?= $DigerKurslar[$i]["Basliq"] ?></a>
                            </h5>
                            <p class="card-text"><?= mb_substr($DigerKurslar[$i]["Mezmun"], 0, 168) ?></p>
                            <span><?= $DigerKurslar[$i]["qiymet"] ?> AZN</span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <hr id="topcourses-goals"/>
    <div id="yourgoals" class="container">
        <h1>Achieve Your Goals</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi bibendum venenatis mollis.</p>
    </div>
    <div id="goals" class="animatedParent animateOnce">
        <?php for ($i = 0; $i < count($Ustunlukler); $i++) { ?>
            <div class="goal animated bounceInDown">
                <img src="<?= $Ustunlukler[$i]["sekil"] ?>" alt="<?= $Ustunlukler[$i]["Basliq"] ?>"/>
                <h3><?= $Ustunlukler[$i]["Basliq"] ?></h3>
                <p><?= mb_substr($Ustunlukler[$i]["mezmun"], 0, 150) ?></p>
            </div>
        <?php } ?>
    </div>
    <div id="ourblog" class="container">
        <h1>Our Blog</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi bibendum venenatis mollis.</p>
    </div>
    <div class="main-carousel animatedParent animateOnce container-fluid" style="bottom: 30px;"
         data-flickity='{ "cellAlign": "center", "autoPlay": true, "wrapAround": true }'>
        <?php for ($i = 0; $i < count($SonBloglar); $i++) { ?>
            <div class="carousel-cell animated fadeInRight" id="blogs">
                <div class="card blog" id="slide">
                    <a href="meqale-<?= $SonBloglar[$i]["slug"] . "-" . $SonBloglar[$i]["id"] ?>"><img
                                src="<?= $SonBloglar[$i]["sekil"] ?>" class="card-img-top"
                                style="height: 250px; width: 100%;" alt="<?= $SonBloglar[$i]["Basliq"] ?>"/></a>
                    <div id="date"><i class="far fa-calendar-alt"></i> <?= substr($SonBloglar[$i]["tarix"], 0, 10) ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a
                                    href="meqale-<?= $SonBloglar[$i]["slug"] . "-" . $SonBloglar[$i]["id"] ?>"><?= $SonBloglar[$i]["Basliq"] ?></a>
                        </h5>
                        <p class="card-text"><?= mb_substr($SonBloglar[$i]["mezmun"], 0, 158) ?>...</p>
                    </div>
                    <div class="row" id="read-comment">
                        <div id="read" class="col"><a
                                    href="meqale-<?= $SonBloglar[$i]["slug"] . "-" . $SonBloglar[$i]["id"] ?>">Read More
                                <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php require_once "footer.php"; ?>