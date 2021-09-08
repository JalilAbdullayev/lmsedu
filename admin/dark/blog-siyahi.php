<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/blog.php" ?>
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
                            <h4 class="card-title">Blog Siyahı </h4>
                            <div class="table-responsive">
                                <table class="table table-hover color-bordered-table primary-bordered-table">
                                    <thead>
                                    <tr>
                                        <th>Şəkil</th>
                                        <th>Kateqoriyası</th>
                                        <th>Başlıq</th>
                                        <th>tarix</th>
                                        <th>Status</th>
                                        <th>Əməliyyat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for ($i = 0; $i < count($bdata); $i++) { ?>
                                        <tr>
                                            <td><img style="width:50px; height:50px;"
                                                     src="../../<?= $bdata[$i]["sekil"] ?>" alt="Sekil"></td>
                                            <td><?= $CRUD->Select("blog_kat", 0, "where id=" . $bdata[$i]["kat_id"] . "")["Ad"] ?></td>
                                            <td><?= $bdata[$i]["Basliq"] ?></td>
                                            <td><?= $bdata[$i]["tarix"] ?></td>
                                            <td><input type="checkbox"
                                                       onchange="BlogStatus(<?= $bdata[$i]['id'] ?>)" <?= $bdata[$i]["status"] == 1 ? "checked" : ""; ?>
                                                       class="js-switch" data-color="#33AFE3" data-size="small"/></td>
                                            <td>
                                                <a href="blog-bax.php?bax=ok&id=<?= $bdata[$i]["id"] ?>">
                                                    <button class="btn btn-outline-success">Bax</button>
                                                </a>
                                                <a href="blog-redakte.php?rdk=ok&id=<?= $bdata[$i]["id"] ?>">
                                                    <button class="btn btn-outline-info">Redaktə</button>
                                                </a>
                                                <button class="btn btn-outline-danger"
                                                        onclick="DelBlog(<?= $bdata[$i]['id'] ?>,'../../<?= $bdata[$i]['sekil'] ?>')">
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