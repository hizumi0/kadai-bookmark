<?php
session_start();



echo $_SESSION['name']="yamazaki";
echo $_SESSION["kanri-flg"];





/************************************************************
 *  session1.php
 *  SESSION表示
 *  画面がリロードされてもSESSIONに値が残ってる事を確認
 ************************************************************/

//必ずsession_startは最初に記述
//この記述をすることでアクセスしたブラウザに、session IDをサーバーから割り振られます
//session_id は今現在アクセスしてるブラウザに対してサーバー上で重複しないユニークキーを発行してます。


//session_id(); は現在割り振られてる「SESSION ID」を取得する関数ですします。
echo session_id()."<br>";

//1をプラスしてる、そしてecho表示
echo $_SESSION["num"] = $_SESSION["num"] + 1;
?>


