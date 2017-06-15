<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ブックマーク</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">登録データの一覧</a></div>
     <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="bm_update_view.php">ユーザー一覧</a></div>   
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク</legend>
     <label>本のタイトル<input type="text" name="name"></label><br>
     <label>本のURL<input type="text" name="email"></label><br>
     <label>内容<input type="text" name="naiyou">
         </textArea></label><br>
     <input type="submit" value="登録">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
