<?php require_once "header.php"; ?>

<div class="row" id="blog-cat">
	<?php for ($i = 0; $i < count($BlogCategory); $i++) { ?>
		<div class="card blog">
			<a href="meqale-<?= $BlogCategory[$i]["slug"] . "-" . $BlogCategory[$i]["id"] ?>"><img style="height: 250px; width:100%;"><img src="<?= $BlogCategory[$i]["sekil"] ?>" alt="<?= $BlogCategory[$i]["Basliq"] ?>" class="card-img-top" alt="..." /></a>
			<div id="date-writer" class="row">
				<div id="date" class="col"><i class="far fa-calendar-alt"></i> <?= substr($BlogCategory[$i]["tarix"], 0, 10) ?></div>
				<div id="writer"><i class="fas fa-user"></i> John Doe</div>
			</div>
			<div class="card-body">
				<h5 class="card-title"><a href="meqale-<?= $BlogCategory[$i]["slug"] . "-" . $BlogCategory[$i]["id"] ?>"><?= $BlogCategory[$i]["Basliq"] ?></a></h5>
				<p class="card-text"><?= mb_substr($BlogCategory[$i]["mezmun"], 0, 150) ?>...</p>
			</div>
			<div class="row" id="read-comment">
				<div id="read" class="col"><a href="#!">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
				<div id="like-comment"><button><i class="fas fa-heart"></i></button>
					(51) <button><i class="far fa-comment-dots"></i></button> (79)
				</div>
			</div>
		</div>
	<?php } ?>
</div>
<button class="button is-link is-focused" id="loadMore">Load More</button>

<?php require_once "footer.php"; ?>