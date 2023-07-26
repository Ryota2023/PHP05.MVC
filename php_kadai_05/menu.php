<link rel="stylesheet" href="style.css">
<?php


// ログインチェク関数 loginCheck()
session_start();
require_once('funcs.php');
loginCheck();

//１．関数群の読み込み
require_once('funcs.php');

//２．データ登録SQL作成
$pdo = db_conn();
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table');
$status = $stmt->execute();

// viewへ移動（メニュー画面）
require_once('templates/list1.php');







