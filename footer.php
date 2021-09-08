<footer>
    <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 row-cols-sm-2 row-cols-xs-1">
        <div class="col">
            <h1>Bizimlə Əlaqə:</h1>
            <ul>
                <li>
                    <p style="font: 400 1em Roboto; color: #FFF;"><b>Ünvan:</b> <?= $Nizam["unvan"] ?></p>
                </li>
                <li>
                    <p style="font: 400 1em Roboto; color: #FFF;"><b>Tel: </b><?= $Nizam["tel"] ?></p>
                </li>
                <li>
                    <p style="font: 400 1em Roboto; color: #FFF;"><b>E-mail: </b><?= $Nizam["email"] ?><br/></p>
                </li>
            </ul>
        </div>
        <div class="col">
            <h1>Sosial Media:</h1>
            <ul>
                <li>
                    <a target="_blank" href="<?= $Nizam["fb"] ?>"><i class="fab fa-facebook-f"></i> Facebook</a>
                </li>
                <li>
                    <a target="_blank" href="<?= $Nizam["tw"] ?>"><i class="fa fa-twitter"></i> Twitter</a>
                </li>
                <li>
                    <a target="_blank" href="<?= $Nizam["ins"] ?>"><i class="fab fa-instagram"></i> Instagram</a>
                </li>
                <li>
                    <a target="_blank" href="<?= $Nizam["link"] ?>"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
            </ul>
        </div>
        <div class="col">
            <ul>
                <li>
                    <a href="index.php">Ana Səhifə</a>
                </li>
                <li>
                    <a href="courses.php">Kurslar</a>
                </li>
                <li>
                    <a href="blogs.php">Blog</a>
                </li>
                <li>
                    <a href="about.php">Haqqımızda</a>
                </li>
                <li>
                    <a href="contact.php">Bizimlə Əlaqə</a>
                </li>
            </ul>
        </div>
    </div>
    <hr/>
    <div id="copyright">Copyright © <?= "2020" == date('Y') ? "2020" : "2020 - " . date("Y") ?> LMS EDUCATION. Bütün
        hüquqlarımız qorunur.
    </div>
</footer>
<script src="dist/script.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ae4ff8f907.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="dist/css3-animate-it.js"></script>
</body>

</html>