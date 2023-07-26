<?php
session_start();
// ログイン失敗した場合、login_act.phpで$_SESSION['lid_error']=1、成功した場合、=0としているので
if (isset($_SESSION['lid_error'])) {
  $audioFile = "sound/beep_04.wav";
  echo "
  <audio id='audioPlayer'>
    <source src='$audioFile' type='audio/wav'>
  </audio>
  <script>
    var audioPlayer = document.getElementById('audioPlayer');
    audioPlayer.play();
  </script>";
  echo "<div class='lid_error'>ログインに失敗しました。</div>";
}
unset($_SESSION['lid_error']); // エラーメッセージを表示した後、セッション変数を削除します
?>