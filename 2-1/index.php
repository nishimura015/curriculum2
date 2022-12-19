<?php
// PHPの研修カリキュラム2-1
?>
<?php
/*
PHPの
研修
カリキュラム
2-1
*/
?>
<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>
</html>

<?php
echo "1.開発環境・検証環境・本番環境"."<br>";
echo "・開発環境：ソフトウェアやシステムなどを開発するために必要なデバイスやソフトウェア。また開発用の作業環境を指す。"."<br>";
echo "・検証環境：開発環境で作られたシステムをテストするための環境"."<br>";
echo "・本番環境：システムが稼働している環境"."<br>";

echo "2.基本設計書・詳細設計書"."<br>";
echo "・基本設計書：要件定義と詳細設計の間に位置し、前工程の要件定義において抽出した要件を機能単位に分割し、それぞれの機能が何を実現するのかを決める工程を記述したもの"."<br>";
echo "・詳細設計書：基本設計において固めていたシステムの全容を、具体的な機能に落とし込んで設計したもの。"."<br>";
echo "3.Ajax"."<br>";
echo "■Ajax(エージャックス:Asynchronous JavaScript + XML：非同期のJava&XML）"."<br>";
echo "一部の情報をサーバーに送信して、それを受け取り反映させる仕組み"."<br>";
echo "<br>";
echo "■API(アプリケーションやソフトウェアを利用するための接続口（APIを使って連携する）";
echo "<br>";
echo "■SVN(Subversion)：オープンソースのバージョン管理システムの一つ。複数の開発者が共同で一つのソフトウェアを開発する際にソースコードやドキュメントを管理するのに用いられる。";
echo "<br>";
echo "■デプロイ：開発したソフトウェアを実際の運用管理に配置・展開する";
echo "<br>";
echo "■バリデーション：仕様や文法などが適切に記述・構築されているか否かを検証する";
echo "<br>";
echo "■アジャイル・ウォーターフォール：アジャイル開発は一度に全てを作ろうとせず、当初最低限の機能だけもったソフトウェアの開発を目指す。ウォーターフォール型は、要件定義・設計、実装、テストなど各工程を順番に一度だけ行うことを前提とした開発思考。";
echo "<br>";
echo "■エビデンス：証拠、根拠";
echo "<br>";
echo "■バッチ処理：データ処理を決まった時間にまとめて実行する処理のこと";
echo "<br>";
echo "■MVCモデル：機能を３つの役割に分離して実装し、それらが連携して処理を進める方式。
Model（データの管理や手続き）、View（他の二要素からの指示を受けて利用者への表示・出力を行い、システムによってはControllerに伝達する。）Controller（利用者からの操作や入力を受け付けて解釈し、ModelやViewに対応する処理を行うようにメッセージを発する）";
echo "<br>";
echo "■IDE（統合開発環境）：ソフトウェア開発に必要なソフトウェアを一つに組み合わせ、同じ操作画面から統一的な操作法で利用できるようにしたソフトウェアパッケージ";
echo "<br>";
echo "■JOIN（データベースにおいて）：テーブルの結合？";
echo "<br>";
echo "■サブクエリ：データベースなどの問い合わせ（クエリ）分の内部に含まれる、別の問い合わせ文のこと。サブクエリの結果を反映したクエリを実行することができる。";
echo "<br>";
echo "■Bootstrap：ツイッター社が開発したオープンソースのWEBアプリケーションフレームワーク。既成おの要素や雛形を使用して迅速にWebアプリケーションを開発することができる。";
echo "<br>";
echo "■ライブラリ・フレームワーク：どちらもコードの集まり。ライブラリは、アプリケーションのフローは自分で管理、必要なときに呼び出しOK（IKEA）,フレームワークは制御の反転があり、フローの管理はフレームワークが行う。必要に応じて呼び出せる。（モデルハウス建築）";


?>

<?php
$x = 8;
$y =5.55;
$memo1 = 'aiu'.'"tomato"';
$memo_1 ="eok"."'tomato'";
$memo_2 ="eok"."'とまと'";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo $memo1;
echo "<br>";
echo $memo_1.$x;
var_dump($x);
var_dump($y);
var_dump($memo1);
var_dump($memo_1);
var_dump($memo_2);
echo "<br>";
define("ADMIN_EMAIL", "AAA.mail.jp");
define("LIST_COUNT", 16);
echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;
echo LIST_COUNT;
echo "<br>";
echo ADMIN_EMAIL;
echo '<br>';
?>

<?php
echo 1 + 1;
// 改行は適宜入れた方が見やすくなります。
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 2 * 2;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 5 % 3;
echo '<br>';
?>
<?php
echo "テスト"."<br>";
$xy++; 
echo $xy;
echo '<br>';
echo "テスト"."<br>";
// $x = $x - 1
//$x--;
//echo $x;
$x = 0;

 // $x = $x + 5;
$x += 5;
echo $x;

 // $x = $x * 5;
$x *= 5;
echo $x;
?>
<?php
echo '<br>';
$age = 22;
$is_student = false;
if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
}
echo '<br>';
if ($age < 25 && $is_student) {
    echo "学割OK！";
} else {
    echo "学割NG！";
}
echo '<br>';
?>
<?php
$blood ="B";
echo ($blood != "") ? '入力あり' : '未入力' ;
switch($blood) {
    case 'A':
        print 'A型です';
        break;
    case 'B':
        print 'B型です';
    case 'o':
        print 'O型です';
    case 'AB':
        print 'AB型です';
        //break;
    default:
        echo 'A/B/O/ABから選択してください';
}
?>
<?php
echo "<br>";
$name = "tar1o";
$PW = "pass";
if ($name == 'taro' && $PW == 'pass'){
    echo "ログイン成功です";
} elseif ($name == 'taro') {
    echo "パスワードが間違っています。";
} elseif ($PW == 'pass') {
    echo "名前が間違っています。";
} else {
    echo "入力情報が間違っています。";
}
echo "<br>";
$num = 0; 
while($num < 10) {
    echo $num;
    $num++;
}
echo "<br>";
$num = 0;
do {
    echo $num;
    $num++;
}while($num < 10);
echo "<br>";
$num = 0;
while($num <= 10){
    echo $num;
    $num++;
}
echo "<br>";
for($num = 0; $num <= 10; $num++){
    echo $num;
}
?>
<?php
$countries = ["America","Japan","china","Korea"];

echo $countries[0];
echo "<br>";
echo $countries[1];
echo "<br>";
var_dump($countries);
echo "<br>";
$fruits = ["りんご", "みかん", "ぶどう"];

// 0番目のりんごを出力
echo $fruits[0];
echo '<br />';
// 1番目のみかんを出力
echo $fruits[1];
echo `<br />`;
// 2番目のぶどうを出力
echo $fruits[2];
echo `<br />`;
// 配列全体を出力
var_dump($fruits);
?>
<?php
echo "<br>";
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];

// りんごを出力
echo $fruits["apple"];
// みかんを出力
echo $fruits["orange"];
// ぶどうを出力
echo $fruits["grape"];
echo "<br>";
$fruits["peach"] = "もも";
 
var_dump($fruits);
?>