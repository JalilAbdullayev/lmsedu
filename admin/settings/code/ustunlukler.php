<?php


if (isset($_POST["ustunlukler_elave"])) {
    $olcu = $_FILES["sekil"]["size"];
    $ad = $_FILES["sekil"]["name"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $tipler = ["image/png", "image/jpeg", "image/gif"];

    $dir = "../../sekil/ustunlukler/" . rand(100, 9999) . "-" . $ad;

    if ($olcu < 0 || !in_array($tip, $tipler)) {
        header("Location:ustunlukler-elave.php?status=no");
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

    if ($CRUD->Insert("ustunlukler", $col, $arr)) {
        move_uploaded_file($tmp, $dir);
        header("Location:ustunlukler-siyahi.php?status=ok");
    } else {
        header("Location:ustunlukler-elave.php?status=no");
    }
    exit;
}

if (@$_GET["delustunlukler"] == "ok") {
    $CRUD->Delete("ustunlukler", @$_GET["id"]) ? header("Location:ustunlukler-siyahi.php?status=ok") : header("Location:ustunlukler-siyahi.php?status=no");
}

if (isset($_POST["ustatus"])) {
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
    $st = $CRUD->Select("ustunlukler", 0, $where, "status", $arr)["status"];

    $col = "status=:status";
    $array = [
        "status" => $st == 1 ? 0 : 1,
        "id" => $id
    ];
    echo $CRUD->Update("ustunlukler", $col, $where, $array);
    exit;
}

if (@$_GET["rdk"] == "ok") {
    $rdk = $CRUD->Select("ustunlukler", 0, "where id=" . @$_GET["id"]);
    if (empty($rdk)) {
        header("Location:ustunlukler-siyahi.php?status=no");
        exit;
    }
}

if (@$_GET["bax"] == "ok") {
    $bax = $CRUD->Select("ustunlukler", 0, "where id=" . @$_GET["id"]);
    if (empty($bax)) {
        header("Location:ustunlukler-siyahi.php?status=no");
        exit;
    }
}

if (isset($_POST["ustunlukler_redakte"])) {
    $olcu = $_FILES["sekil"]["size"];
    $ad = $_FILES["sekil"]["name"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $tipler = ["image/png", "image/jpeg", "image/gif"];
    $id = $_POST["id"];
    $ssekil = $_POST["ssekil"];
    $dir = "../../sekil/ustunlukler/" . rand(100, 9999) . "-" . $ad;

    if ($olcu > 0 && !in_array($tip, $tipler)) {
        header("Location:ustunlukler-elave.php?status=no"); //
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

    if ($CRUD->Update("ustunlukler", $col, null, $arr)) {
        if ($olcu > 0) {
            unlink($ssekil);
            move_uploaded_file($tmp, $dir);
        }
        header("Location:ustunlukler-siyahi.php?status=ok");
    } else {
        header("Location:ustunlukler-redakte.php?status=no&id={$id}&rdk=ok");
    }
    exit;
}

$udata = $CRUD->Select("ustunlukler", 1);
