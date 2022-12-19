<?php
/*
＜関数問題＞
・直方体の体積を求める関数を作成してください。
・その関数を使用し、縦=5cm、横=10cm、高さ=8cmの直方体の体積を求めてください。
 */
  echo "<br>";
  function getVolume($length, $width, $height) {
    $volume = $length * $width * $height;
    print "答え：直方体の体積は".$volume."です。";
}

// 1)
echo "問題：縦=5cm、横=10cm、高さ=8cmの直方体の体積を求めてください。"."<br>";
getVolume(5,10,8);
echo "<br>";

?>
<?php
echo "<br>";
echo "＜基本用語＞","<br>";
echo "1.ハッシュ化"."<br>";
echo "　パスワードの保管などでよく用いられる手法。"."<br>";
echo "　元のデータから一定の計算手順に従ってハッシュ値と呼ばれる規則性のない固定長の値を求め、その値によって元のデータを置き換えること。"."<br>";
echo "<br>";
echo "2.総合テスト"."<br>";
echo "　開発中のソフトウェアや情報システムのテスト手法の一つで、開発の最終段階にシステム全体を対象に行われるテスト。"."<br>";
echo "<br>";
echo "3.デバッグ"."<br>";
echo "　プログラム上のバグ（欠陥、誤り）を特定し、修正する作業のこと。"."<br>";
?>
<?php
echo "<br><br><br>";
echo "----------------------------------------------------------------------------";
echo "<br><br>";
echo "-- print/echo test --<br>";

// "hello" を出力します。
print "hello";
echo "<br>";

// 同じく"hello" を出力します。なぜなら ("hello") は正しい式だからです。
print("hello");
echo "<br>";

// "9" を出力します; 括弧によって 1+2 が先に評価され、3*3がその次に評価されます。
// print 文は、式の評価結果全体をひとつの引数とみなします。
print(1 + 2) * 3;
echo "<br>";


// " - inside if" を出力します。
// ("hello") && false という式が最初に評価され、
// 評価された false が空文字列 "" に強制的に変換され、print に渡され、1を返します。
// よって、if ブロックの内部のコードが実行されます。
if ( print("hello") && false ) {
    print " - inside if";
}
else {
    print " - inside else";
}
?>