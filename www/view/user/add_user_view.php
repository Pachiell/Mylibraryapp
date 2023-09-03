<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>新規登録</title>
	<!-- BootstrapのCSSファイルを読み込む -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<!-- Custom styles for this template -->
<link rel="stylesheet" href="./_assets/css/signin.css">
</head>

<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h4>新規登録</h4>
					</div>
					<div class="card-body">
						<form action="add_user.php" method="post">
							<div class="form-group">
								<label for="name">ユーザー名</label>
								<?php echo !empty($errMsg["RequiredUserName"]) ? '<div class="alert alert-danger">' . $errMsg["RequiredUserName"] . '</div>' : '' ?>
								<input type="name" class="form-control" name="name" placeholder="UserName" value="<?php echo $name; ?>">
							</div>
							<div class="form-group">
								<label for="password">パスワード</label>
								<?php echo !empty($errMsg["RequiredUserPassword"]) ? '<div class="alert alert-danger">' . $errMsg["RequiredUserPassword"] . '</div>' : '' ?>
								<input type="password" class="form-control" name="password" placeholder="Password"
									value="<?php echo $password; ?>">
							</div>
							<div class="form-group">
								<label for="email">メールアドレス</label>
								<?php echo !empty($errMsg["RequiredUserEmail"]) ? '<div class="alert alert-danger">' . $errMsg["RequiredUserEmail"] . '</div>' : '' ?>
								<?php echo !empty($errMsg["dupEmailUser"]) ? '<div class="alert alert-danger">' . $errMsg["dupEmailUser"] . '</div>' : '' ?>
								<input type="email" class="form-control" name="email" placeholder="Enter email"
									value="<?php echo $email; ?>">
							</div>
							<button type="submit" class="btn btn-primary">登録</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>