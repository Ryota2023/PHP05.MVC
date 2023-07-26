<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>過去記録</title>
  <link rel="stylesheet" href="style1.css">

<style>
  /* スタイルシート内でテーブルの罫線をカスタマイズ */
table {
  width: 90%; /* テーブルの横幅（画面幅の90%に設定） */
  margin: 0 auto; /* テーブルを横方向の中央に配置 */
  border-collapse: collapse;
  border: 2px solid black; /* 外枠を少し太くする */
}
th, td {
  border: 1px solid black; /* 中の線を少し細くする */
  padding: 5px;
  text-align: center;
}
/* フィールドの行を少し太い線で囲む */
th.field {
  border-bottom: 2px solid black;
}
/* 睡眠時間が6以下の場合、赤文字で表示する */
td.sleep-time, td.condition{
  color: red;
  font-weight: bold;
}
.result_s_time {
  font-size: 22px;
  color: red;
}
体調が3以下の場合、赤い太文字で表示する
td.condition {
  color: red;
  font-weight: bold;
}
</style>

</head>
<body>
<?php
//1. DB接続します
session_start();
require_once('funcs.php');
loginCheck();

//2. 関数群の読み込み
require_once('funcs.php');

//3. データ登録SQL作成
$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table');
$status = $stmt->execute();

// 4. データ表示用のHTMLを生成
if ($status == false) {
    sql_error($stmt);
} else {
    echo '<header><div class="header"><h2>*** 過去データ ***</h2><a href="menu.php"><h3>戻る</h3></a></header>';
    echo '<table style="width: 90%;" border="1">'; // テーブルの横幅を100%に指定し、罫線を追加
    echo '<tr>';
    echo '<th class="field" style="width: 20px;">(No.)更新</th>';
    echo '<th class="field" style="width: 70px;">日付</th>';
    echo '<th class="field" style="width: 30px;">睡眠時間</th>';
    echo '<th class="field" style="width: 20px;">体調</th>';
    echo '<th class="field" style="width: 120px;">音楽タイトル</th>';
    echo '<th class="field" style="width: 100px;">アーティスト</th>';
    echo '<th class="field" style="width: 80px;">ジャンル</th>';
    echo '<th class="field" style="width: 250px;">１日の感想</th>';
    echo '<th class="field" style="width: 30px;">操作</th>'; // カラム名を追加
    echo '</tr>';

    $sleep_time_count = 0;  //6時間未満の睡眠時間の延べ数
    $today_condition_count = 0;  //体調３未満の日の延べ日数

    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      // echo '<td>' . $r['id'] . '</td>';
      if ($_SESSION['kanri_flg'] == 1) {
          echo '<td><a href="detail.php?id=' . $r['id'] . '">' . $r['id'] . '</a></td>';
      } else {
          echo '<td>' . $r['date'] . '</td>';
      }
      echo  '<td>' . $r['date'] . '</td>';
      // 睡眠時間が6以下の場合、文字を赤色で表示
      if ($r['sleep_time'] < 6) {
        // $sleep_time_total ++;
        $sleep_time_count ++;
          echo '<td class="sleep-time">' . $r['sleep_time'] . 'h</td>';
      } else {
            echo '<td>' . $r['sleep_time'] . 'h</td>';
      }

      // 体調が3以下の場合、赤い太文字で表示
      if ($r['today_condition'] <= 3) {
        $today_condition_count ++;
          echo '<td class="condition"><strong>' . $r['today_condition'] . '</strong></td>';
      } else {
          echo '<td>' . $r['today_condition'] . '</td>';
      }
      
      echo '<td>' . $r['music_title'] . '</td>';
      echo '<td>' . $r['artist'] . '</td>';
      echo '<td>' . $r['music_mood'] . '</td>';
      echo '<td>' . $r['content'] . '</td>';

      if ($_SESSION['kanri_flg'] == 1) {
          echo '<td><a href="delete.php?id=' . $r['id'] . '">[削除]</a></td>';
      }
      echo '</tr>';
  }



    echo '</table>';
}

$totalRows 

= $stmt->rowCount(); // 総データ数を取得
$sleepTimeBelow6 = 0; // 睡眠時間が6未満だったレコードの数をカウント
$conditionBelow3 = 0; // 体調が3以下だったレコードの数をカウント

$totalRows = $stmt->rowCount(); // 総データ数を取得
$sleepTimeBelow6 = 0; // 睡眠時間が6未満だったレコードの数をカウント
$conditionBelow3 = 0; // 体調が3以下だったレコードの数をカウント

while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // 睡眠時間が6未満だった場合
    if ($r['sleep_time'] < 6) {
        $sleepTimeBelow6++;
    }
    // 体調が3以下だった場合
    if ($r['today_condition'] <= 3) {
        $conditionBelow3++;
    }

    // 以下は前回のループ内の処理と同じです
    // ...
}

// 結果表示
// gs_bm_tableから取得したsleep_timeの個数を表示
echo '<p>記録した合計日数:　' . $totalRows . '日間</p>';

// 寝てない日の結果
$rate_bad_sleep_time =  ($sleep_time_count / $totalRows) * 100;
echo '睡眠時間６時間未満だったに日は、'. $sleep_time_count . '日です。';
echo '<span>（寝てない日の割合は、全体の </span>';
echo '<span class="result_s_time">' . number_format($rate_bad_sleep_time, 1) . '％</span>';
echo '<span> です！）</span><br>';

// 対象が良くない日の結果
echo '体調が３以下だった日は、'.  $today_condition_count . '日です。';
$rate_condition_count =  ($today_condition_count / $totalRows) * 100;

echo '<span>（体調が良くない日の割合は、全体の </span>';
echo '<span class="result_s_time">' . number_format($rate_condition_count, 1) . '％</span>';
echo '<span> です！）</span><br>';


?>

</body>
</html>
