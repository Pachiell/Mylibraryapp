<!doctype html>
<html lang="ja">

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
<table class="table table-bordered border-dark">
<thead class="table-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">作品名</th>
      <th scope="col">著者</th>
      <th scope="col">出版社</th>
      <th scope="col">発行日</th>
      <th scope="col">カテゴリ</th>
      <th scope="col">読了巻数</th>
      <th scope="col">イメージ</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($archives as $archive) : ?>
      <tr class="table-secondary">
      <td><?php echo $archive["id"] ?></td>
      <td><?php echo $archive["title"] ?></td>
      <td><?php echo $archive["authors"] ?></td>
      <td><?php echo $archive["publisher"] ?></td>
      <td><?php echo $archive["issue"] ?></td>
      <td><?php echo "カテゴリ" ?></td>
      <td><?php echo "読了巻数" ?></td>
      <td><img src=<?php echo $archive["image"] ?>></td>
      </tr>
      <?php endforeach ?>
  </tbody>
</table>