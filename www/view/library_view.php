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
      <th scope="col">イラスト</th>
      <th scope="col">出版社</th>
      <th scope="col">カテゴリ</th>
      <th scope="col">読了巻数</th>
      <th scope="col">イメージ</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-secondary">
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>unko</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr class="table-secondary">
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>