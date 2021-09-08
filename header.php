<?php require_once "admin/settings/code/front/front.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="description" content="<?= $Title[1] ?>"/>
    <meta name="keywords" content="<?= $Title[2] ?>"/>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Facebook -->
    <meta property="og:url" content="<?= $Title[5] ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="<?= $Title[0] ?>"/>
    <meta property="og:description" content="<?= $Title[1] ?>"/>
    <meta property="og:image" content="<?= $Title[4] ?>"/>
    <!-- Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content=""/>
    <meta name="twitter:creator" content=""/>
    <meta property="og:url" content="<?= $Title[5] ?>"/>
    <meta property="og:title" content="<?= $Title[0] ?>"/>
    <meta property="og:description" content="<?= $Title[1] ?>"/>
    <meta property="og:image" content="<?= $Title[4] ?>"/>
    <title><?= $Title[0] ?></title>
    <link rel="stylesheet" href="dist/styles.css"/>
    <link rel="stylesheet" href="dist/animations.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
</head>

<body>
<div id="hamburger">
    <a href="index.php">
        <h1><b>LMS</b>edu</h1>
    </a>
    <i style="font-size:30px;cursor:pointer" onclick="openNav()" class="fas fa-bars"></i>
</div>
<div id="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
    <a href="index.php">
        <h1><b>LMS</b>edu</h1>
    </a>
    <a href="index.php">Ana Səhifə</a>
    <div class="btn-group">
        <a href="courses.php">
            <button type="button" class="btn btn-lg" style="color: white; font-weight: 200; font-size: 1em;">Kurslar
            </button>
        </a>
        <button type="button" class="btn btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color: white;">
            <span class="sr-only">Toggle Dropdown</span>
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <?php for ($i = 0; $i < count($KursCat); $i++) { ?>
                <a class="dropdown-item"
                   href="course-<?= $KursCat[$i]["slug"] . "-" . $KursCat[$i]["id"] ?>"><?= $KursCat[$i]["Ad"] ?></a>
            <?php } ?>
        </div>
    </div>
    <br/>
    <div class="btn-group">
        <a href="blogs.php">
            <button type="button" class="btn btn-lg" style="color: white; font-weight: 200; font-size: 1em;">Blog
            </button>
        </a>
        <button type="button" class="btn btn-lg dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color: white;">
            <span class="sr-only">Toggle Dropdown</span>
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <?php for ($i = 0; $i < count($BlogCat); $i++) { ?>
                <a class="dropdown-item"
                   href="blog-<?= $BlogCat[$i]["slug"] . "-" . $BlogCat[$i]["id"] ?>"><?= $BlogCat[$i]["Ad"] ?></a>
            <?php } ?>
        </div>
    </div>
    <a href="about.php">Haqqımızda</a>
    <a href="contact.php">Bizimlə Əlaqə</a>
</div>
<nav class="navbar navbar-expand-lg navbar-dark" id="navigationbar">
    <div class="container">
        <a class="navbar-brand" href="index.php"><b>LMS</b>edu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link"
                       style="font: 400 1em Roboto; letter-spacing: 0px; line-height: 20px; color: #f2f7ff;"
                       href="index.php">Ana Səhifə<span class="sr-only">(current)</span></a>
                </li>
                <div class="btn-group">
                    <a href="courses.php">
                        <button type="button" class="btn"
                                style="font: 400 1em Roboto; letter-spacing: 0px; line-height: 20px; color: #f2f7ff;">
                            Kurslar
                        </button>
                    </a>
                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="color: white;">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php for ($i = 0; $i < count($KursCat); $i++) { ?>
                            <a class="dropdown-item"
                               href="course-<?= $KursCat[$i]["slug"] . "-" . $KursCat[$i]["id"] ?>"><?= $KursCat[$i]["Ad"] ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="btn-group">
                    <a href="blogs.php">
                        <button type="button" class="btn"
                                style="font: 400 1em Roboto; letter-spacing: 0px; line-height: 20px; color: #f2f7ff;">
                            Blog
                        </button>
                    </a>
                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="color: white;">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php for ($i = 0; $i < count($BlogCat); $i++) { ?>
                            <a class="dropdown-item"
                               href="blog-<?= $BlogCat[$i]["slug"] . "-" . $BlogCat[$i]["id"] ?>"><?= $BlogCat[$i]["Ad"] ?></a>
                        <?php } ?>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link"
                       style="font: 400 1em Roboto; letter-spacing: 0px; line-height: 20px; color: #f2f7ff;"
                       href="contact.php">Bizimlə Əlaqə</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       style="font: 400 1em Roboto; letter-spacing: 0px; line-height: 20px; color: #f2f7ff;"
                       href="about.php">Haqqımızda</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<hr id="nav-slider"/>