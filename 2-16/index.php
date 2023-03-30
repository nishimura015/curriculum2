<?php
//************************
// 2-16 ファイルのデータを読み書きする
//************************
// 
echo "2-16 課題（ファイルのデータを読み書きする）"."<br>";

// index.php
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)){

  // 書き込み可能なときの処理
  // とりあえず、確認のため、echoで表示だけさせる
  echo "writable!!";

} else {

  // 書き込み不可のときの処理
  echo "not writable!";
  exit;
  
}
echo "<br>";

if (is_wirable($testFile)){
  // 書き込み可能なときの処理
  // 対象のファイルを開く
  $fp = fopen($testFile,"w");
  // 対象のファイルに書き込む
  fwrite($fp, $contents);
  // ファイルを閉じる
  fclose($fp);
  // 書き込みした旨の表示
  echo "not writable!";
}else{
  // 書き込み不可のときの処理
  echo "not writable!";
  exit;
}
?>
<?php
//index.php
echo "<br>";
echo "<br>";
?>
<?php
echo "<br><br>";
echo "＜基本用語＞","<br>";
echo "1.ログ(意味、確認の仕方)"."<br>";
echo "　・ログ：起こった出来事についての情報などを一定の形式で時系列に記録・蓄積したデータのこと。"."<br>";
echo "　・確認の仕方：ログは「システムログ」「エラーログ」「通信ログ」「操作ログ」「アクセスログ」など様々な種類に管理されている。対象となるログを参照し確認する。"."<br><br>";
echo "2.クラウドサーバー、レンタルサーバー、VPSの違い"."<br>";
echo "　・レンタルサーバー（共有サーバー）"."<br>";
echo "　　1台のサーバーを複数サイトで共有して利用する。"."<br>";
echo "　・クラウドサーバー"."<br>";
echo "　　1台のサーバーに仮想化した専用サーバーを個別にたてて利用する。"."<br>";
echo "　・VPS：バーチャル・プライベート・サーバー"."<br>";
echo "　1台の物理サーバー上に複数の仮想サーバー領域を設定して、複数のユーザーでそれぞれのサーバー領域を使用するサーバーのこと。"."<br>";
echo "　※レンタルサーバーと比べ、VSPはそれぞれの仮想サーバー領域が独立しているため、お互いの影響を受けにくく、専用サーバーのようにカスタマイズできる。"."<br>";
echo "　"."<br><br>";
echo "3. PHPのFWの種類と特徴"."<br>";
echo "　・FW＝フレームワークとは、PHPを使用して、Webアプリケーション開発する際の土台として機能するソフトフェアのことを指します。"."<br>";
echo "　・メリット：作業効率の改善、コードの統一性を保持、バグの減少"."<br>";
echo "　・デメリット：学習時間が必要、費用がかかるフレームワークがある、PHPフレームワークの脆弱性"."<br>";
echo "　・Laravel　わかりやすい、日本語のドキュメントあり、Youtubeと連携可能なライブラリや管理者ページをすぐに作成できるライブラリなどある。"."<br>";
echo "　・CakePHP　Rubyの影響を受けており、Webアプリケーションを高速に開発出来る。MVC採用、bakeコマンドによるプログラム自動生成機能有り。"."<br>";
echo "　・Symfony　Rubyの影響を受けており、保守性と安定性を重視した構造。"."<br>";
echo "　・Symfony"."<br>";
echo "　・CodeIgniter"."<br>";
echo "　・ZendFramework"."<br>";
echo "　・Phalcon"."<br>";
echo "　・Slim"."<br>";
echo "　・"."<br>";
echo "　"."<br><br>";
?>