<?php "../admin/settings/code/front/front.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="description" content="<?= $Title[1] ?>" />
    <meta name="keywords" content="<?= $Title[2] ?>" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Facebook -->
    <meta property="og:url" content="<?= $Title[5] ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $Title[0] ?>" />
    <meta property="og:description" content="<?= $Title[1] ?>" />
    <meta property="og:image" content="<?= $Title[4] ?>" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:creator" content="" />
    <meta property="og:url" content="<?= $Title[5] ?>" />
    <meta property="og:title" content="<?= $Title[0] ?>" />
    <meta property="og:description" content="<?= $Title[1] ?>" />
    <meta property="og:image" content="<?= $Title[4] ?>" />
    <title><?= $Title[0] ?></title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><b>LMS</b>edu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" style="font: 600 1em Open Sans;letter-spacing: 0px; line-height: 20px;
                        color: #f2f7ff;" href="../index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font: 600 1em Open Sans; letter-spacing: 0px; line-height: 20px;
                        color: #f2f7ff;" href="../courses/courses.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font: 600 1em Open Sans; letter-spacing: 0px; line-height: 20px;
                        color: #f2f7ff;" href="../blog/blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font: 600 1em Open Sans; letter-spacing: 0px; line-height: 20px;
                        color: #f2f7ff;" href="../contact/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font: 600 1em Open Sans; letter-spacing: 0px; line-height: 20px;
                        color: #f2f7ff;" href="#!">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>
    <hr id="nav-slider" />