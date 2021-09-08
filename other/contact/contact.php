<?php require_once "header.php"; ?>
<h1 id="heading">Contact</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d97248.51719299027!2d49.8686907!3d40.3863344!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6bd6211cf9%3A0x343f6b5e7ae56c6b!2zQmFrxLE!5e0!3m2!1saz!2s!4v1589553285677!5m2!1saz!2s" class="col" aria-hidden="false" tabindex="0"></iframe>
<div class="row">
	<div class="col row" id="contact">
		<p class="col">
			<b>Address:</b> <?= $Nizam["unvan"] ?></p>
		<p class="col">
			<b>Tel: </b><?= $Nizam["tel"] ?><br />
			<b>E-mail: </b><?= $Nizam["email"] ?><br />
		</p>
		<p class="col">
			<b>Social Media:</b><br />
			<a target="_blank" href="<?= $Nizam["fb"] ?>"><i class="fab fa-facebook-f"></i> Facebook</a><br />
			<a target="_blank" href="<?= $Nizam["tw"] ?>"><i class="fa fa-twitter"></i> Twitter</a><br />
			<a target="_blank" href="<?= $Nizam["link"] ?>"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
		</p>
	</div>
</div>
<?php require_once "footer.php"; ?>