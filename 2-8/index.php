<?php
//2-8 課題(foreach)
$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];
foreach($fruits as $key => $value){
  echo $key;
  echo "といったら";
  echo $value;
  echo "<br>";
}
?>
<?php
echo "<br>";
echo "＜基本用語＞","<br>";
echo "1.トランザクション"."<br>";
echo "　ソフトウェアがデータを処理する際、互いに関連する複数の処理をまとめ、一連の操作を全体として一つの処理として管理すること。"."<br>";
echo "<br>";
echo "2.排他ロック"."<br>";
echo "　データベースシステムなどで記憶領域への同時アクセスを制限するロック機構の一つ。他の実行主体によるアクセスを完全に禁止するもの。"."<br>";
echo "<br>";
echo "3.チューニング"."<br>";
echo "　情報システムやコンピュータ、ソフトウェアなどの設定や構成を調整し、使用状況に適した状態へ調整する作業を指す。"."<br>";
?>
