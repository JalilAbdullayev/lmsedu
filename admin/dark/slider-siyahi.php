<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/slider.php" ?>
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
                        <h4 class="card-title">Slider Siyahı </h4>
                        <div class="table-responsive">
                            <table class="table table-hover color-bordered-table primary-bordered-table">
                                <thead>
                                    <tr>
                                        <th>Şəkil</th>
                                        <th>Başlıq</th>
                                        <th>Mətn</th>
                                        <th>Status</th>
                                        <th>Əməliyyat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($sdata); $i++) { ?>
                                        <tr>
                                            <td><img style="width:50px; height:50px;" src="../../<?= $sdata[$i]["sekil"] ?>" alt="Sekil"></td>
                                            <td><?= $sdata[$i]["Basliq"] ?></td>
                                            <td><?= $sdata[$i]["Mezmun"] ?></td>
                                            <td><input type="checkbox" onchange="SliderStatus(<?= $sdata[$i]['id'] ?>)" <?= $sdata[$i]["status"] == 1 ? "checked" : ""; ?> class="js-switch" data-color="#33AFE3" data-size="small" /></td>
                                            <td>
                                                <a href="slider-redakte.php?rdk=ok&id=<?= $sdata[$i]["id"] ?>">
                                                    <button class="btn btn-outline-info">Redaktə</button>
                                                </a>
                                                <button class="btn btn-outline-danger" onclick="DelSlider(<?= $sdata[$i]['id'] ?>,'../../<?= $sdata[$i]['sekil'] ?>')">
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