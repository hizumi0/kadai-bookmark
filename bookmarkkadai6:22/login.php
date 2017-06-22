<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 32px;font-size:48px;background-color: #efefef;}</style>
<title><h1>USER LOGIN</h1></title>
</head>
<body>

<header>
  <nav class="navbar navbar-default"><h1>USER/LOGIN</h1></</nav>
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
<h2>ID入力フォーム:</h2><input type="text" name="lid" />
<h2>PW入力フォーム:</h2><input type="password" name="lpw" />
<input type="submit" value="LOGIN" />
</form>


