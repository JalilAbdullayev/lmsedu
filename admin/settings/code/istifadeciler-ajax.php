<?php

if (isset($_POST["kohnesifre"])) {
    require_once "../db.php";
    $db = new DBConnection;
    //class
    require_once "../class/crud.php";
    require_once "../class/umumi.php";
    $CRUD = new CRUD;
    $Umumi = new Umumi;

    $email = $_POST["email"];
    $sifre = "\$B8A2_" . md5($_POST["sifre"]);
    $where = "where email=:email";
    $arr = ["email" => $email];
    $sfr = $CRUD->Select("admin", 0, $where, "pass", $arr)["pass"];

    echo $sfr == $sifre ? 1 : 0;
}