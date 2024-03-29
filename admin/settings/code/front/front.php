<?php
ob_start();
date_default_timezone_set("Asia/Baku");
require_once "admin/settings/db.php";
$db = new DBConnection;
//class
require_once "admin/settings/class/crud.php";
require_once "admin/settings/class/umumi.php";
require_once "admin/settings/class/nizamlamalar.php";
require_once "admin/settings/class/haqqinda.php";

$CRUD = new CRUD;
$Umumi = new Umumi;
$Nizam = new Nizamlamalar;
$Haqqinda = new Haqqinda;
//code

if ($Umumi->CariSehifeAdi() !== "index") {
    $Umumi->REFERER();
}

$Title = $Umumi->DinamikBasliq();

$Nizam = $CRUD->Select("nizamlamalar");

$Slider = $CRUD->Select("slider_header", 1, "where status=:st", "*", ["st" => 1]);

$Ustunlukler = $CRUD->Select("ustunlukler", 1, "where status=:st", "*", ["st" => 1]);

$BlogCat = $CRUD->Select("blog_kat", 1, "where status=:st", "*", ["st" => 1]);

$KursCat = $CRUD->Select("kurslar_kat", 1, "where status=:st", "*", ["st" => 1]);

if (@$_GET["kurs_category_id"] != null || @$_GET["kurs_category_id"] != "") {
    $KursCategory = $CRUD->Select("kurslar", 1, "where kat_id=:id and status=:st", "*", ["id" => @$_GET["kurs_category_id"], "st" => 1]);
    rsort($KursCategory);
    if (empty($KursCategory)) {
        header("Location:index");
        exit;
    }
}

$SonBloglar = $CRUD->Select("blog", 1, "where status=:st", "*", ["st" => 1]);
rsort($SonBloglar);
if (@$_GET["blog_category_id"] != null || @$_GET["blog_category_id"] != "") {
    $BlogCategory = $CRUD->Select("blog", 1, "where kat_id=:id and status=:st", "*", ["id" => @$_GET["blog_category_id"], "st" => 1]);
    rsort($BlogCategory);
    if (empty($BlogCategory)) {
        header("Location:index");
        exit;
    }
}


if (@$_GET["blog_kod"] != null || @$_GET["blog_kod"] != "") {
    $Blog = $CRUD->Select("blog", 0, "where id=:id and status=:st", "*", ["id" => @$_GET["blog_kod"], "st" => 1]);
    $kat_ad = $CRUD->Select("blog_kat", 0, "where id=:id", "*", ['id' => $Blog['kat_id']])["Ad"];
    $kat_slug = $CRUD->Select("blog_kat", 0, "where id=:id", "*", ['id' => $Blog['kat_id']])["slug"];
    $arr = ["[", "]", "\""];
    $tags = str_replace($arr, "", $Blog["tags"]);
    if (empty($Blog)) {
        header("Location:index");
        exit;
    }
}

$DigerKurslar = $CRUD->Select("kurslar", 1, "where status=:st", "*", ["st" => 1]);
rsort($DigerKurslar);
if (@$_GET["kurs_category_id"] != null || @$_GET["kurs_category_id"] != "") {
    $KursCategory = $CRUD->Select("kurslar", 1, "where kat_id=:id and status=:st", "*", ["id" => @$_GET["kurs_category_id"], "st" => 1]);
    rsort($KursCategory);
    if (empty($KursCategory)) {
        header("Location:index");
        exit;
    }
}

if (@$_GET["kurs_kod"] != null || @$_GET["kurs_kod"] != "") {
    $Kurslar = $CRUD->Select("kurslar", 0, "where id=:id and status=:st", "*", ["id" => @$_GET["kurs_kod"], "st" => 1]);
    $kat_ad = $CRUD->Select("kurslar_kat", 0, "where id=:id", "*", ['id' => $Kurslar['kat_id']])["Ad"];
    $kat_slug = $CRUD->Select("kurslar_kat", 0, "where id=:id", "*", ['id' => $Kurslar['kat_id']])["slug"];
    if (empty($Kurslar)) {
        header("Location:index");
        exit;
    }
}
