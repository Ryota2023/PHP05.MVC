# 課題11
●期限：2023/7/21　
●提出日：2023/7/26
# PHP5回目 MVC
## DEMO
https://github.com/Ryota2023/PHP04_DB/tree/main

## 紹介と使い方
前回提出したPHP04「今日聴いた音楽を記録するアプリ」を引き継ぎ、
MCVスタイルに変更試みました。


## 工夫しようとした点と苦戦した点
・MVCの分岐
◆C（Controller）
結果的に「menu.php」になりますが、
「detail.php」もコントローラーになります。

◆V（View)
「menu.php」→「templates/list1.php」
「detail.php」→「templates/list2.php」
①MCVのMの分岐が難しかったです。

◆M（Model）
funcs.php（結果的に授業で作ったこのfuncs.phpがそのままモデルになったように思うのですが、もっと分けれるところはありました。
例えば、delete.phpの「データ登録SQL作成」部分とか。
でもdelete.php自体がModelの役割があるように思いそのままにしました。

・classの追加
classの大まかな概念は理解したように思うのですが、
実際に使うとなるとたくさんコード売って型を覚えないと難しい感じがします。

今日の日付を読むclassを「date.php」に作り「list.php」から読みに行き、
インスタンス化して表示するようにしました。

## 反省と対策
今までためていた課題がやっと終わりました。
すごく遅れをとってましたが、なんとか提出できて良かったです。
わからないことすぐに教えてくれた皆様には感謝しています。

## 参考にした web サイトなど
①授業のアーカイブ動画、
②福島先生が作ってくれたgitbookにアップされていたgs_php_note
②Chat-GPT（質問と添削で利用）
