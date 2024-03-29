<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ログイン</title>

	<!-- Bootstrap core CSS -->
	<?php include('../../view/_template/lib.php'); ?>
	<style>
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}
	</style>

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="./_assets/css/signin.css">
</head>

<body class="text-center">

	<main class="form-signin">
		<form action="login.php" method="post">
			<h1 class="h3 mb-3 fw-normal">ログインする</h1>
			<?php
      if (!is_null($err)) {
        echo '<div class="alert alert-danger">' . $err . '</div>';
      }
      ?>
			<label class="visually-hidden">メールアドレス</label>
			<input type="email" name="email" class="form-control" placeholder="メールアドレス" required autofocus>
			<label class="visually-hidden">パスワード</label>
			<input type="password" name="password" class="form-control" placeholder="パスワード" required>
			<button class="w-100 btn btn-lg btn-primary" type="submit">ログインする</button>
			<p class="mt-5 mb-3 text-muted">&copy; 2023</p>
			<a href="../add_user.php" class="btn btn-link">新規登録</a>
		</form>
	</main>

</body>

</html>