<?php


if (isset($_POST['kurskat'])) {
    $col = "
        Ad=:ad,
        slug=:slug
    ";
    $arr = [
        "ad" => $_POST["ad"],
        "slug" => $_POST["slug"]
    ];

    $CRUD->Insert("kurslar_kat", $col, $arr) ? header("Location:kurslar-kateqoriya-siyahi.php?status=ok") : header("Location:kurslar-kateqoriya-elave.php?status=no");
}

if (isset($_POST['kurskatredakte'])) {
    $col = "
        Ad=:ad,
        slug=:slug
    ";
    $whr = "where id=:id";
    $arr = [
        "ad" => $_POST["ad"],
        "slug" => $_POST["slug"],
        "id" => $_POST["id"]
    ];

    $CRUD->Update("kurslar_kat", $col, $whr, $arr) ? header("Location:kurslar-kateqoriya-siyahi.php?status=ok") : header("Location:kurslar-kateqoriya-siyahi.php?status=no");
}

if (@$_GET["delkurskat"] == "ok") {
    $CRUD->Delete("kurslar_kat", @$_GET["id"]) ? header("Location:kurslar-kateqoriya-siyahi.php?status=ok") : header("Location:kurslar-kateqoriya-siyahi.php?status=no");
}

if (@$_GET["delkurs"] == "ok") {
    $CRUD->Delete("kurslar", @$_GET["id"]) ? header("Location:kurslar-siyahi.php?status=ok") : header("Location:kurslar-siyahi.php?status=no");
}

if (isset($_POST["kkstatus"])) {
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
    $st = $CRUD->Select("kurslar_kat", 0, $where, "status", $arr)["status"];

    $col = "status=:status";
    $array = [
        "status" => $st == 1 ? 0 : 1,
        "id" => $id
    ];
    echo $CRUD->Update("kurslar_kat", $col, $where, $array);
    exit;
}

if (isset($_POST["kstatus"])) {
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
    $st = $CRUD->Select("kurslar", 0, $where, "status", $arr)["status"];

    $col = "status=:status";
    $array = [
        "status" => $st == 1 ? 0 : 1,
        "id" => $id
    ];
    echo $CRUD->Update("kurslar", $col, $where, $array);
    exit;
}

if (isset($_POST["kurs_elave"])) {
    $olcu = $_FILES["sekil"]["size"];
    $ad = $_FILES["sekil"]["name"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $tipler = ["image/png", "image/jpeg", "image/gif"];

    $dir = "../../sekil/kurslar/" . rand(100, 9999) . "-" . $ad;

    if ($olcu < 0 || !in_array($tip, $tipler)) {
        header("Location:kurslar-elave.php?status=no");
        exit;
    }

    $col = "
    kat_id=:id,
    Basliq=:Basliq,
    Mezmun=:Mezmun,
    qiymet=:qiymet,
    sekil=:img,
    slug=:slug
    ";
    $arr = [
        'id' => $_POST["kateqoriya"],
        'Basliq' => $_POST["Basliq"],
        'Mezmun' => $_POST["Mezmun"],
        'qiymet' => $_POST["qiymet"],
        'img' => substr($dir, 6),
        'slug' => $Umumi->seo($_POST["Basliq"])
    ];

    if ($CRUD->Insert("kurslar", $col, $arr)) {
        move_uploaded_file($tmp, $dir);
        header("Location:kurslar-siyahi.php?status=ok");
    } else {
        header("Location:kurslar-elave.php?status=no");
    }
    exit;
}


if (@$_GET["bax"] == "ok") {
    $bax = $CRUD->Select("kurslar", 0, "where id=" . @$_GET["id"]);
    if (empty($bax)) {
        header("Location:kurslar-siyahi.php?status=no");
        exit;
    }
}

if (@$_GET["rdk"] == "ok") {
    $rdk = $CRUD->Select("kurslar", 0, "where id=" . @$_GET["id"]);
    if (empty($rdk)) {
        header("Location:kurslar-siyahi.php?status=no");
        exit;
    }
}


if (isset($_POST["kurs_redakte"])) {
    $olcu = $_FILES["sekil"]["size"];
    $ad = $_FILES["sekil"]["name"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $tipler = ["image/png", "image/jpeg", "image/gif"];
    $id = $_POST["id"];
    $ksekil = $_POST["ksekil"];
    $dir = "../../sekil/kurslar/" . rand(100, 9999) . "-" . $ad;

    if ($olcu > 0 && !in_array($tip, $tipler)) {
        header("Location:kurslar-elave.php?status=no"); //
        exit;
    }

    $col = "
    kat_id=:id,
    Basliq=:basliq,
    mezmun=:mezmun,
    qiymet=:qiymet,
    sekil=:img,
    slug=:slug
    where id={$id}
    ";
    $arr = [
        'id' => $_POST["kateqoriya"],
        'basliq' => $_POST["basliq"],
        'mezmun' => $_POST["mezmun"],
        'qiymet' => $_POST["qiymet"],
        'img' => $olcu > 0 ? substr($dir, 6) : substr($ksekil, 6),
        'slug' => $Umumi->seo($_POST["basliq"])
    ];

    if ($CRUD->Update("kurslar", $col, null, $arr)) {
        if ($olcu > 0) {
            unlink($ksekil);
            move_uploaded_file($tmp, $dir);
        }
        header("Location:kurslar-siyahi.php?status=ok");
    } else {
        header("Location:kurslar-redakte.php?status=no&id={$id}&rdk=ok");
    }
    exit;
}


$data = $CRUD->Select("kurslar_kat", 1);
$bdata = $CRUD->Select("kurslar", 1);
