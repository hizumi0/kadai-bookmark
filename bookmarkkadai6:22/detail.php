<?php
include("functions.php");
//1.GETでidを取得
$id = $_GET["id"];

//2.DB接続など
$pdo = db_con();

//3.SELECT * FROM gs_an_table WHERE id=***; を取得（bindValueを使用！）
$stmt = $pdo->prepare("SELECT * FROM gs_an_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  queryError($stmt);
}else{
  $row = $stmt->fetch();
}



?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ブックマーク</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 26px;font-size:20px;background-color: #efefef;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
          <div class="navbar-header"><a class=>BOOKMAKER</a></div>
        <div class="navbar-header"><a class="navbar-brand" href="select.php">〓ブックマーク一覧〓</a></div>
        <div class="navbar-header"><a class="navbar-brand" href="login.php">【ユーザーログイン】</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Bookmark</legend>
     <label>Title：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>BooK is/URL：<input type="text" name="email" value="<?=$row["email"]?>"></label><br>
     <label>Contents<textArea name="naiyou" rows="4" cols="40"><?=$row["naiyou"]?></textArea></label><br>
       <label>What did you think reading a book?<textArea name="naiyou" rows="4" cols="40"><?=$row["naiyou"]?></textArea></label><br>
     <input type="hidden" name="id" value="<?=$id?>">
     <input type="submit" value="SEND">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

</body>
</html>






