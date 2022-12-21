<?php
//2-13 課題（便利な関数）
//************************
// 数学に関する関数
//************************
//ceil(切り上げ）
echo "■ceil(切り上げ）";
echo "<br>";
echo "5.4-->";
$a = 5.4;
echo ceil($a);
echo "<br>";
echo "15-->";
$aa = 15;
echo ceil($aa);
echo "<br><br>";

//floor(切り捨て）
echo "■floor(切り捨て） ";
echo "<br>";
echo "5.4-->";
$b = 5.4;
echo floor($b);
echo "<br>";
echo "15-->";
$bb = 15;
echo floor($bb);
echo "<br><br>";

//round（四捨五入）
echo "■round（四捨五入）"."<br>";
echo "5.4-->";
$c = 5.4;
echo round($c);
echo "<br>"."5.5-->";
$cc = 5.5;
echo round($cc);
echo "<br><br>";

//pi（円周率）
echo "■円周率";
echo "<br>";
echo "pi -->";
echo pi();                           // 3.1415926535898
function circleArea($r) {            // 面積を求める関数を定義
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}
echo "<br>";
echo "半径が10の円の面積の計算-->";
circleArea(10);
echo "<br><br>";

//mt_rand（乱数:ランダムな値を一つ出力する（ガチャのようなもの））
echo "■mt_rand(乱数)"."<br>";
echo "1~100から1つ抽出-->";
echo mt_rand(1, 100)."<br><br>";                // 1から100の範囲で、ランダムに1つの数字を取り出す


//************************
// 文字列に関する関数
//************************
//strlen（文字列の長さ）
echo "■strlen（文字列の長さ）"."<br>";

echo "null-->";
$str = "";
echo strlen($str)."<br>";

echo "space-->";
$str = " ";
echo strlen($str)."<br>";

echo "aiueo123-->";
$str = "aiueo123";
echo strlen($str)."<br>";

echo "aiu 123 -->";
$str = "aiu 123 ";
echo strlen($str)."<br><br>";


//strpos（検索）
echo "■strpos（検索）";
echo "<br>";
$str = "yoneyama";
echo "yoneyama：aは何番目？-->";
echo strpos($str, "a")."<br>";               // => 5と出力される

echo "yoneyama：yaは何番目？-->";
echo strpos($str, "ya");                     // => 4と出力される
echo "　　※2文字でも検索できる！"."<br><br>";

//substr（文字列の切り取り）
echo "■substr（文字列の切り取り）"."<br>";
$str = "yoneyama";
echo substr($str, -4, 3)."<br>";            // => yamと出力される
echo substr($str, 2, 3)."<br><br>";         // => neyと出力される

//str_replace（置換）
echo "■str_replace(置換)"."<br>";
$str = "yoneyama";
echo str_replace("neya", "NEYA", $str)."<br>";
$str = "I am Yoneyama";
echo str_replace(" ", "", $str)."<br><br>";     // space空白を空文字に置換

//日本語の文字列操作の関数
echo "■日本語＿文字列用関数"."<br>";
$str = "あいうえお";
echo strlen($str)."<br>";                       // => 15
echo mb_strlen($str)."<br>";                    // => 5

//-----------------
//表示に関する関数
//-----------------
//printf（フォーマット化した文字列を出力）
echo "■printf（フォーマット化した文字列を出力）※文字列%sと数値%dはそれぞれ小文字で書く、大文字NG"."<br>";
$name = "山田さん";
$limit_number = 25;
echo "echo --> ".$name."の残り時間はあと".$limit_number."時間です。"."<br>";
printf("printf-->%sの残り時間はあと%d時間です。",$name, $limit_number);
echo "<br>";
$limit_hour = 20;
$limit_time = 10;
printf("残り%02d時間%02d分",$limit_hour,$limit_time);
echo "<br>";
$limit_hour = 5;
$limit_time = 5;
printf("残り%02d時間%02d分",$limit_hour,$limit_time);
echo "<br><br>";

//sprintf（変数に代入できるprintf）
echo "■sprintf（変数に代入できるprintf）"."<br>";
$limit_hour = 1;
$limit_minute = 10;
// sprintfだけでは出力までできないので、変数に代入し、Echoで出力
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time."<br><br>";

?>
<?php
echo "<br><br>";
echo "＜基本用語＞","<br>";
echo "1.PostgreSQL・Oracle SQL"."<br>";
echo "・PostgreSQL（ポスグレ・ポストグレス）"."<br>";
echo "　リレーショナルデータベース（RDB）の作成や操作、管理ができるオープンソースのデータベース管理システム（DBMS）の一つ。"."<br>";
echo "　Linuxなど主要なUNIX系OSとWindowsに対応"."<br>";
echo "　SQL言語によるデータベースの作成や編集、データの読み書き、サブクエリ、結合、制約、トリガー、トランザクション、レプリケーション、"."<br>";
echo "　バックアップなどに対応するほか、インデックスやデータ型、演算子、型変換など様々な要素をユーザー定義できる高い拡張性を備えている。"."<br>";
echo "<br>";
echo "・Oracle SQL"."<br>";
echo "　Oracle社のデータベース管理システム。主に企業や官公庁などの情報システムで利用されている。"."<br>";
echo "<br>";
echo "<br>";
echo "2. TortoiseGit・TortoiseSVN"."<br>";
echo "・TortoiseSVN（トータスエスブイエヌ）"."<br>";
echo "　バージョン管理システムのSubversion（SVN）を利用するためのクライアントソフトの一つ。"."<br>";
echo "　Windowsの拡張機能として動作する。オープンソースとして公開されている。"."<br>";
echo "<br>";
echo "・TortoiseGit"."<br>";
echo "　TortoiseSVNと同様の機能をGitへ提供したもの"."<br>";
echo "<br>";
echo "<br>";
echo "3.外部設計・内部設計"."<br>";
echo "・外部設計（基本設計、概要設計）"."<br>";
echo "　操作画面や操作方法の構成（ユーザーインターフェース）や、帳票など印刷物の書式、ハードウェアや他のソフトウェアとの接続・連携仕様、"."<br>";
echo "　データベースの構造などを決める工程。"."<br>";
echo "<br>";
echo "・内部設計（機能設計、詳細設計）"."<br>";
echo "　全体の構成や行うべき処理の詳細等を実装に必要な仕様を定義する工程。"."<br>";
?>