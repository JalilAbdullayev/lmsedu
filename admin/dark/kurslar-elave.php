<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/kurslar.php";
require_once "tinymce.php" ?>
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
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kurs Əlavə</h4>
                        <form class="mt-4" method="POST" action="#" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="kateqoriya">Kateqoriya</label>
                                <select name="kateqoriya" class="form-control" id="kateqoriya">
                                    <?php for ($i = 0; $i < count($data); $i++) { ?>
                                        <option value="<?= $data[$i]["id"] ?>"><?= $data[$i]["Ad"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Basliq">Başliq</label>
                                <input type="text" manxlength="255" name="Basliq" class="form-control" id="Basliq" placeholder="Başlıq Əlavə Et" />
                            </div>
                            <div class="form-group">
                                <label for="desc">Açıqlama</label>
                                <textarea style="height: 200px" name="Mezmun" id="Mezmun" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="qiymet">Qiymət</label>
                                <input type="number" min="0" max="9999" name="qiymet" id="qiymet" class="form-control" placeholder="Qiymət Daxil edin" />
                            </div>
                            <div class="form-group">
                                <label>Şəkil</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="sekil" type="file" class="custom-file-input" id="inputGroupFile01" />
                                        <label class="custom-file-label" for="inputGroupFile01">(PNG,JPEG) fayl
                                            seçin</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="kurs_elave">Əlavə Et</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<?php require_once "footer.php"; ?>