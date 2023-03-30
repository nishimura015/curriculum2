<?php
//************************
//2-14 課題（便利な関数（配列））
//************************
echo "2-14 課題（便利な関数（配列））"."<br>";

//count（要素の数を数える）
echo "■count（要素の数を数える）"."<br>";
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida", "あああ", "いいい"];
echo count($members);                      // 7
echo "<br><br>";

//sort（要素の並べ替え）
echo "■sort（要素の並べ替え）"."<br>";
$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
echo "<br>";
//array(5) { [0]=> int(17) [1]=> int(26) [2]=> int(35) [3]=> int(45) [4]=> int(67) }

$members = ["1", "22", "かきく", "あいう", "kimura1","1kimura", "yoshida", "uchida"];
sort($members);
var_dump($members);
echo "<br><br>";
//array(8) { [0]=> string(1) "1" [1]=> string(7) "1kimura" [2]=> string(2) "22" [3]=> string(7) "kimura1" [4]=> string(6) "uchida" [5]=> string(7) "yoshida" [6]=> string(9) "あいう" [7]=> string(9) "かきく" }

//in_array（配列に中にある要素が存在しているか）
echo "■in_array（配列に中にある要素が存在しているか）"."<br>";
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo "'Kimura'==> ";
var_dump(in_array("Kimura", $members));
echo "<br>"."'kimura'==> ";
var_dump(in_array("kimura", $members));
echo "<br>";
if (in_array("Kimura", $members)) {
  echo "きむら(Kimura)さんがいるよ！";
} else {
  echo "木村(Kimura)さんはいないよ！";
}
echo "<br><br>";

//implode（配列を結合して文字列に変換）
echo "■implode（配列を結合して文字列に変換）"."<br>";
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
var_dump($members);
echo "<br>";
$atstr = implode(",", $members);
var_dump($atstr);
echo "<br>";
//string(35) "tanaka,sasaki,kimura,yoshida,uchida"

$atstr = implode($members);
var_dump($atstr);
echo "<br><br>";
//string(31) "tanakasasakikimurayoshidauchida"


//explode（文字列を指定の区切りで配列にする）
echo "■explode（文字列を指定の区切りで配列にする）"."<br>";
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";

$re_members = explode("@", $atstr);
var_dump($re_members);

echo "<br>";
$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);
echo "<br>";
?>
<?php
echo "<br><br>";
echo "＜基本用語＞","<br>";
echo "1.要件定義(要求仕様書)"."<br>";
echo "　システムやソフトウェアの開発において、実装すべき機能や満たすべき性能などのを明確にしていく作業のこと。"."<br>";
echo "　要件定義をまとめたものを要求仕様書という。"."<br><br>";
echo "2.単体テスト・結合テスト"."<br>";
echo "・単体テスト：単一のプログラム部品（モジュール）を対象に行うテスト。"."<br>";
echo "・結合テスト：複数のモジュール（部品）を組み合わせて行うテスト。個々のモジュールの単体テスト後に行う。"."<br><br>";
echo "3.テスト仕様書(どのようなもの、項目)"."<br>";
echo "　出来上がったプログラムが仕様通りに動作するか調べるために作成する検査項目のリスト。"."<br>";
echo "　様々なテストケースを想定して、どのような値や条件を与えるとどのような出力が得られるべきかを記述する。"."<br><br>";
?>