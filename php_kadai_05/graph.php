<!DOCTYPE html>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style2.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>

<header>
<div class="gr1">睡眠時間と体調の関係（グラフ）</div>
<h3 class="gr2">戻る→　<a href="menu.php">はい</a></h3>

</header>
<body>

<!-- グラフ表示用のcanvas要素 -->
<canvas id="sleepConditionChart" width="1500" height="600"></canvas>

<?php
// 必要な関数とデータベース接続の読み込み
session_start();
require_once('funcs.php');
loginCheck();
require_once('funcs.php');
$pdo = db_conn();

// データベースからデータを取得
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table');
$status = $stmt->execute();

// グラフ用のデータを格納する配列を作成
$dates = [];
$sleepTimes = [];
$conditions = [];

// フェッチカーソルをリセットしてデータの先頭から再度処理を開始
$stmt->execute();

while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // データを配列に格納
    $dates[] = $r['date'];
    $sleepTimes[] = (float) $r['sleep_time']; // 小数点の値に変換
    $conditions[] = (int) $r['today_condition']; // 整数に変換
}


// gs_bm_tableから取得したsleep_timeの個数をセッション変数に格納
$_SESSION['totalRows'] = $stmt->rowCount();

// 体調が３以下だった日のカウントを初期化
$today_condition_count = 0;

// 体調が３以下だった日のカウントを行う
foreach ($conditions as $condition) {
    if ($condition <= 3) {
        $today_condition_count++;
    }
}

// 体調が３以下だった日のカウントをセッション変数に格納
$_SESSION['today_condition_count'] = $today_condition_count;
?>

<!-- グラフを描画するためのJavaScriptコードを追加 -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('sleepConditionChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($dates); ?>,
        datasets: [
          {
            label: '睡眠時間 (時間)',
            data: <?php echo json_encode($sleepTimes); ?>,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            yAxisID: 'y-axis-sleep',
          },
          {
            label: '今日の体調',
            data: <?php echo json_encode($conditions); ?>,
            fill: false,
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            pointRadius: 5,
            pointHoverRadius: 8,
            yAxisID: 'y-axis-condition',
          },
        ],
      },
      options: {
        responsive: false,   // 画面がcanvasで指定した幅になりました。
        scales: {
          y: {
            beginAtZero: true,
          },
          'y-axis-sleep': {
            position: 'left',
            beginAtZero: true,
          },
          'y-axis-condition': {
            position: 'right',
            beginAtZero: true,
            suggestedMax: 5, // 体調の軸の最大値を調整する場合はここを変更してください
          },
        },
        plugins: {
          legend: {
            labels: {
              font: {
                size: 20, // ラベルの文字サイズを20pxに設定           
              },
            },
          },   
        },
    },
  });
});
</script>

<?php
$totalRows = $_SESSION['totalRows'];
$sleep_time_count = $_SESSION['sleep_time_count'];
$rate_bad_sleep_time = $_SESSION['rate_bad_sleep_time'];
$rate_condition_count = $_SESSION['rate_condition_count'];


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
