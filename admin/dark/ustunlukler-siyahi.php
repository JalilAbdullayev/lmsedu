<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/ustunlukler.php" ?>
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
                        <h4 class="card-title">Üstünlüklər Siyahı </h4>
                        <div class="table-responsive">
                            <table class="table table-hover color-bordered-table primary-bordered-table">
                                <thead>
                                    <tr>
                                        <th>Şəkil</th>
                                        <th>Başlıq</th>
                                        <th>Status</th>
                                        <th>Əməliyyat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($udata); $i++) { ?>
                                        <tr>
                                            <td><img style="width:50px; height:50px;" src="../../<?= $udata[$i]["sekil"] ?>" alt="Sekil"></td>
                                            <td><?= $udata[$i]["Basliq"] ?></td>
                                            <td><input type="checkbox" onchange="UstunluklerStatus(<?= $udata[$i]['id'] ?>)" <?= $udata[$i]["status"] == 1 ? "checked" : ""; ?> class="js-switch" data-color="#33AFE3" data-size="small" /></td>
                                            <td>
                                                <a href="ustunlukler-bax.php?bax=ok&id=<?= $udata[$i]["id"] ?>">
                                                    <button class="btn btn-outline-success">Bax</button>
                                                </a>
                                                <a href="ustunlukler-redakte.php?rdk=ok&id=<?= $udata[$i]["id"] ?>">
                                                    <button class="btn btn-outline-info">Redaktə</button>
                                                </a>
                                                <button class="btn btn-outline-danger" onclick="DelUstunlukler(<?= $udata[$i]['id'] ?>,'../../<?= $udata[$i]['sekil'] ?>')">
                                                    Sil
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