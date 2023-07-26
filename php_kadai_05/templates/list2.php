<html>
<link rel="stylesheet" href="style.css">

<html lang="ja">
<div class="main1">

 <!-- ■■ryota>> 下記はすべてindex.phpから貼り付けました。 -->
 

<title>今日の１曲</title>
<body>
 
  <div class="main_c">
    <h3>こんにちは！</h3>
       <p>今日も一日お疲れさまでした。</p>
       <p>今日はどんな音楽を聴きましたか？</p>
       <p>もしくはどんな曲を聴きたい気分ですか？</P>
       <p>1曲だけその曲名を教えて下さい！</p><br>
  </div>
</div>

<!-- ※form要素 input type="hidden" name="id" を１項目追加（非表示項目） -->
<!-- ※form要素 action="update.php"に変更 -->


<div class="main2">
<form method="POST" action="update.php">
    <div class="table">
        お名前：<input type="hidden" name="name" value="<?=$name_txt;?>" ><br>

        音楽のタイトル：<input type="text" name="music_title"
        value="<?= $row['music_title'] ?>"><br>

        アーティスト名：<input type="text" name="artist" value="<?= $row['artist'] ?>"><br>

        <!-- 音楽のジャンル：<input type="text" name="music_mood" value="<?= $row['music_mood'] ?>"><br> -->
        音楽のタイトル：
          <select name="music_mood">
              <option value='邦楽（唱歌）'>邦楽（唱歌）</option>
              <option value='邦楽（民謡）'>邦楽（民謡）</option>
              <option value='邦楽（歌謡曲）'>邦楽（歌謡曲）</option>
              <option value='邦楽（ポップ）'>邦楽（ポップ）</option>
              <option value='邦楽（ロック）'>邦楽（ロック）</option>
              <option value='邦楽（その他）'>邦楽（その他）</option>
              <option value='洋楽（ポップ）'>洋楽（ポップ）</option>
              <option value='洋楽（クラッシックロック）'>洋楽（クラッシックロック）</option>
              <option value='洋楽（ロック）'>洋楽（ロック）</option>
              <option value='洋楽（メタル）'>洋楽（メタル）</option>
              <option value='洋楽（Hip&Hop)'>洋楽（Hip&Hop)</option>
              <option value='洋楽（Soul)'>洋楽（Soul)</option>
              <option value='洋楽（ダンス）'>洋楽（ダンス）</option>
              <option value='洋楽（その他)'>洋楽（その他)</option>
              <option value='電子音楽'>電子音楽</option>
              <option value='Jazz'>Jazz</option>
              <option value='Classic'>Classic</option>
              <option value='ラテン'>ラテン</option>
              <option value='シャンソン'>シャンソン</option>
              <option value='ヒーリング'>ヒーリング</option>
              <option value='その他'>その他</option>
          </select><br>


        睡眠時間: <input type="number" name="sleep_time" min="0" max="15" step="0.5" value="<?= $row['sleep_time'] ?>"><br>

        今日の体調 [1:悪い ～ 10:良い]:<input type="number" name="today_condition" min="1" max="10" step="1" value="<?= $row['today_condition'] ?>"><br>
        今日の感想：<textArea name="content" rows="3" cols="40"> <?= $row['content'] ?>
        </textArea><br>

        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <input type="submit" value="送信">
    </div>

    <p>過去に選んだ曲の記録を見てみる→  <a href="select.php">はい</a></p>
    <p>体調と睡眠時間の過去データを見てみる→  <a href="graph.php">はい</a></p>
  </form>

</div>
</html>

