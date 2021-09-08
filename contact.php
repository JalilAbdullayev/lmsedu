<?php require_once "header.php"; ?>
    <h1 id="heading">Bizimlə Əlaqə</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d97248.51719299027!2d49.8686907!3d40.3863344!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6bd6211cf9%3A0x343f6b5e7ae56c6b!2zQmFrxLE!5e0!3m2!1saz!2s!4v1589553285677!5m2!1saz!2s"
            tabindex="0"></iframe>
    <div class="row row-cols-1 row-cols-xl-4 row-cols-md-2" id="contact">
        <p class="col">
            <i class="fas fa-map-marked-alt"></i> <b>Ünvan:</b> <?= $Nizam["unvan"] ?>
        </p>
        <p class="col">
            <i class="fas fa-phone-alt"></i> <b>Tel: </b><?= $Nizam["tel"] ?><br/>
            <i class="fas fa-envelope"></i> <b>E-mail: </b><?= $Nizam["email"] ?><br/>
        </p>
        <p class="col">
            <b>Sosial Media:</b><br/>
            <a target="_blank" href="<?= $Nizam["fb"] ?>" id="fb"><i class="fab fa-facebook-f"></i> Facebook</a><br/>
            <a target="_blank" href="<?= $Nizam["tw"] ?>" id="tw"><i class="fa fa-twitter"></i> Twitter</a><br/>
            <a target="_blank" href="<?= $Nizam["ins"] ?>" id="ins"><i class="fab fa-instagram"></i> Instagram</a><br/>
            <a target="_blank" href="<?= $Nizam["link"] ?>" id="link"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
        </p>
        <form class="form col" action="contactform.php" method="POST">
            <div class="form-group">
                <h1>Write Us</h1>
                <div class="form-group">
                    <label for="name">Ad Soyad</label>
                    <input class="form-control" type="text" name="name" placeholder="Ad Soyadınız" required/>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" placeholder="numune@mail.com" required/>
                </div>
                <div class="form-group">
                    <label for="contact">Telefon</label>
                    <input class="form-control" type="tel" name="contact" placeholder="+XXXXXXXXXXXX" required/>
                </div>
                <div class="form-group">
                    <label for="text">Mesaj</label><br/>
                    <textarea class="form-control" name="text" placeholder="Bizə yazın" required></textarea>
                </div>
                <input class="form-control btn btn-danger" type="submit" name="submit" value="Göndər"
                       onclick="Contact()"/>
            </div>
        </form>
    </div>
<?php require_once "footer.php"; ?>