<?php


if (isset($_POST["slider_elave"])) {
    $olcu = $_FILES["sekil"]["size"];
    $ad = $_FILES["sekil"]["name"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $tipler = ["image/png", "image/jpeg", "image/gif"];

    $dir = "../../sekil/slider/" . rand(100, 9999) . "-" . $ad;

    if ($olcu < 0 || !in_array($tip, $tipler)) {
        header("Location:slider-elave.php?status=no");
        exit;
    }

    $col = "
    Basliq=:basliq,
    Mezmun=:mezmun,
    sekil=:img
    ";
    $arr = [
        'basliq' => $_POST["basliq"],
        'mezmun' => $_POST["mezmun"],
        'img' => substr($dir, 6)
    ];

    if ($CRUD->Insert("slider_header", $col, $arr)) {
        move_uploaded_file($tmp, $dir);
        header("Location:slider-siyahi.php?status=ok");
    } else {
        header("Location:slider-elave.php?status=no");
    }
    exit;
}

if (@$_GET["delslider"] == "ok") {
    $CRUD->Delete("slider_header", @$_GET["id"]) ? header("Location:slider-siyahi.php?status=ok") : header("Location:slider-siyahi.php?status=no");
}

if (isset($_POST["slstatus"])) {
    require_once "../db.php";
    $db = new DBConnection;
    //class
    require_once "../class/umumi.php";
    require_once "../class/nizamlamalar.php";
    require_once "../class/haqqinda.php";
    require_once "../class/crud.php";

    $Umumi = new Umumi;
    $Nizam = new Nizamlamalar;
    $Haqqinda = new Haqqinda;
    $CRUD = new CRUD;

    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id" => $id];
    $st = $CRUD->Select("slider_header", 0, $where, "status", $arr)["status"];

    $col = "status=:status";
    $array = [
        "status" => $st == 1 ? 0 : 1,
        "id" => $id
    ];
    echo $CRUD->Update("slider_header", $col, $where, $array);
    exit;
}

if (@$_GET["rdk"] == "ok") {
    $rdk = $CRUD->Select("slider_header", 0, "where id=" . @$_GET["id"]);
    if (empty($rdk)) {
        header("Location:slider-siyahi.php?status=no");
        exit;
    }
}


if (isset($_POST["slider_redakte"])) {
    $olcu = $_FILES["sekil"]["size"];
    $ad = $_FILES["sekil"]["name"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $tipler = ["image/png", "image/jpeg", "image/gif"];
    $id = $_POST["id"];
    $ssekil = $_POST["ssekil"];
    $dir = "../../sekil/slider/" . rand(100, 9999) . "-" . $ad;

    if ($olcu > 0 && !in_array($tip, $tipler)) {
        header("Location:slider-elave.php?status=no"); //
        exit;
    }

    $col = "
    Basliq=:basliq,
    Mezmun=:mezmun,
    sekil=:img
    where id={$id}
    ";
    $arr = [
        'basliq' => $_POST["basliq"],
        'mezmun' => $_POST["mezmun"],
        'img' => $olcu > 0 ? substr($dir, 6) : substr($ssekil, 6)
    ];

    if ($CRUD->Update("slider_header", $col, null, $arr)) {
        if ($olcu > 0) {
            unlink($ssekil);
            move_uploaded_file($tmp, $dir);
        }
        header("Location:slider-siyahi.php?status=ok");
    } else {
        header("Location:slider-redakte.php?status=no&id={$id}&rdk=ok");
    }
    exit;
}

$sdata = $CRUD->Select("slider_header", 1);
