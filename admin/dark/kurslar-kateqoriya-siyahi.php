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
                        <h4 class="card-title">Kurslar Kateqoriya </h4>
                        <div class="table-responsive">
                            <table class="table table-hover color-bordered-table primary-bordered-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ad</th>
                                        <th>Slug</th>
                                        <th>Sıra</th>
                                        <th>Status</th>
                                        <th>Əməliyyat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($data); $i++) { ?>
                                        <tr class="kurscategoryedit">
                                            <td><a href="javascript:void(0)">ID #<?= $data[$i]["id"] ?></a></td>
                                            <td><?= $data[$i]["Ad"] ?></td>
                                            <td><?= $data[$i]["slug"] ?></td>
                                            <td><?= $data[$i]["sira"] ?></td>
                                            <td><input type="checkbox" onchange="KursKatStatus(<?= $data[$i]['id'] ?>)" <?= $data[$i]["status"] == 1 ? "checked" : ""; ?> class="js-switch" data-color="#33AFE3" data-size="small" /></td>
                                            <td>
                                                <button onclick="KursCategoryEdit(<?= $data[$i]['id'] ?>,<?= $i ?>)" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#exampleModal">Redaktə Et</button>
                                                <button onclick="DelKursKat(<?= $data[$i]['id'] ?>)" class="btn btn-outline-danger btn-sm">Sil</button>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kateqoriya Redaktə</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="mt-4" method="POST" action="#">
                    <input type="hidden" name="id" id="kurskatid" value="" />
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ad">Adı</label>
                            <input type="text" manxlength="100" class="form-control" id="kurskatad" name="ad" placeholder="Ad daxil edin..." />
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" manxlength="255" class="form-control" id="kurskatslug" name="slug" placeholder="Slug daxil edin..." />
                        </div>
                        <div class="form-group">
                            <label for="sira">Sıra</label>
                            <select name="sira" class="form-control" id="kurskatKursSira"></select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                <button type="submit" class="btn btn-primary" name="kurskatredakte">Redaktə Et</button>
            </div>
        </div>
    </div>
</div>


<?php require_once "footer.php" ?>