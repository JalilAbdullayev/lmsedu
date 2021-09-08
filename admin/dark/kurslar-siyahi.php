<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/kurslar.php" ?>
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Kurslar Siyahı </h4>
                            <div class="table-responsive">
                                <table class="table table-hover color-bordered-table primary-bordered-table">
                                    <thead>
                                    <tr>
                                        <th>Şəkil</th>
                                        <th>Kateqoriyası</th>
                                        <th>Ad</th>
                                        <th>Qiymət</th>
                                        <th>Status</th>
                                        <th>Əməliyyat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for ($i = 0; $i < count($bdata); $i++) { ?>
                                        <tr>
                                            <td><img style="width:50px; height:50px;"
                                                     src="../../<?= $bdata[$i]["sekil"] ?>"
                                                     title="<?= $bdata[$i]["sekil"] ?>"
                                                     alt="<?= $bdata[$i]["Basliq"] ?>"/></td>
                                            <td><?= $CRUD->Select("kurslar_kat", 0, "where id=" . $bdata[$i]["kat_id"] . "")["Ad"] ?></td>
                                            <td><?= $bdata[$i]["Basliq"] ?></td>
                                            <td><?= $bdata[$i]["qiymet"] ?> AZN</td>
                                            <td><input type="checkbox"
                                                       onchange="KursStatus(<?= $bdata[$i]['id'] ?>)" <?= $bdata[$i]["status"] == 1 ? "checked" : "" ?>
                                                       class="js-switch" data-color="#33AFE3" data-size="small"/></td>
                                            <td>
                                                <a href="kurslar-bax.php?bax=ok&id=<?= $bdata[$i]["id"] ?>">
                                                    <button class="btn btn-outline-success btn-sm">Bax</button>
                                                </a>
                                                <a href="kurslar-redakte.php?rdk=ok&id=<?= $bdata[$i]["id"] ?>">
                                                    <button class="btn btn-outline-info btn-sm">Redaktə</button>
                                                </a>
                                                <button onclick="DelKurs(<?= $bdata[$i]['id'] ?>,'../../<?= $bdata[$i]['sekil'] ?>')"
                                                        class="btn btn-outline-danger btn-sm">Sil
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once "footer.php" ?>