<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="ja">
<div class="main1">
<title>名前の入力</title>

<?php
// ログインエラーした場合の処理
require_once('/login_error.php');
?>

<body>
<h4>毎日の音楽と睡眠時間を記録していこう</h4>
  <!-- ログイン画面 -->
  <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>

  </div>
</body>
</html>
