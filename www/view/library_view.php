<!doctype html>
<html lang="ja">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>書庫-Library</title>
  <?php include('../view/template/library.php'); ?>
  <div class="Navigator">
    <?php include('../view/template/navi.php'); ?>
  </div>
</head>

<body>
  <link href="./assets/css/library.css" rel="stylesheet">
  <div class="header">
    <img src="./images/library head.PNG" alt="" class="header-image">
    <p><?php echo $userName ?>さんのアーカイブ</p>
  </div>
</body>
<table class="table table-bordered border-dark" id="fav-table">
  <thead class="table-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">ブックマーク</th>
      <th scope="col">作品名</th>
      <th scope="col">著者</th>
      <th scope="col">出版社</th>
      <th scope="col">発行日</th>
      <th scope="col">カテゴリ</th>
      <th scope="col">イメージ</th>
      <th scope="col">購入画面</th>
    </tr>
  </thead>
  <tbody>
    <script src="../assets/js/library.js" type="text/javascript"></script>
    <?php foreach ($archives as $archive) : ?>
      <tr class="table-secondary">
        <td><?php echo $archive["id"] ?></td>
        <td><button class="btn bookmark-btn"> <i class="fa fa-star"></i></td>
        <td><?php echo $archive["title"] ?></td>
        <td><?php echo $archive["authors"] ?></td>
        <td><?php echo $archive["publisher"] ?></td>
        <td><?php echo $archive["issue"] ?></td>
        <td><?php echo $archive["category"] ?></td>
        <td><img src=<?php echo $archive["image"] ?>></td>
        <td><a class="icon-link" href=<?php echo $archive["site"] ?>>移動する</a></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/js/jquery.tablesorter.min.js"></script>