<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ブックアーカイブ</title>
	<?php include('../view/_template/lib.php'); ?>
	<link href="../html/_assets/css/blog.css" rel="stylesheet">
	<link href="../_assets/css/index.css" rel="stylesheet">
</head>

<body>
	<div class="Navigator">
		<?php include('../view/_template/navi.php'); ?>
	</div>
	<div class="header">
		<img src="../_assets/images/dksjfioajoigajsgoi.PNG" alt="" class="header-image">
	</div>

		<br></br>
		<div class="center-topics">
			<div class="container overflow-hidden">
				<div class="row gy-5">
					<div class="col-4">
						<a href="../../archive/get_archive.php">
							<img src="./_assets/images/ddsgkos@cxvjasd.PNG" alt="..." class="btn-img">
						</a>
					</div>
					<div class="col-4">
						<a href="../../search.php">
							<img src="./_assets/images/searchbooks.PNG" alt="..." class="btn-img">
						</a>
					</div>
					<div class="col-4">
						<a href="../../bookmark/get_bookmark.php">
							<img src="./_assets/images/bookmark.PNG" alt="..." class="btn-img">
						</a>
					</div>
				</div>
			</div>
		</div>
</body>

<footer>
	<br></br>
	<br></br>
	<?php $year = date('Y'); ?>

	<footer class="footer">
		<h2>
			<div class="container text-center">
				<p class="text-muted">©︎<?php echo $year; ?> Copyright © MYLIBRARY APP. All Rights Reserved.</p>
			</div>
		</h2>
	</footer>
	</div>

</html>