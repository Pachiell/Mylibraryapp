<!doctype html>
<html lang="ja">

<head>
  <?php include '../view/template/library.php'; ?>
</head>

<body>
  <div class="container-fluid">
    <form>

      <div class="form-group">
        <label>ユーザー名</label>
        <input type="ユーザー名" class="form-control" placeholder="ユーザー名" value="<?php echo $loginUserInfo["name"] ?>">
      </div>
      <div class="form-group">
        <label>パスワード</label>
        <!--todo..パスワード用の変更画面と変更元と変更先の作成 既存のパスワードは入力必須  -->
        <input type="パスワード" class="form-control" placeholder="パスワード">
      </div>
      <div class="form-group">
        <label>メールアドレス</label>
        <input type="Email" class="form-control" placeholder="Email" value="<?php echo $loginUserInfo["email"] ?>">
      </div>

      <button class="btn btn-primary" type="button">変更する</button>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>