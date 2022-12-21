<?php
/*
課題2-12 フォーム入力欄の練習
*/
?>
<form action="result.php" method="post">
  お名前：<input type="text" name="my_name" /><br>
  パスワード：<input type="password" name="password" /><br>
  <input type="submit" value="送信ボタン" /><br>
  性別：
    <input type="radio" name="sex" value="男性">男性
    <input type="radio" name="sex" value="女性">女性
  <br>
    <input type="hidden" name="hidden_param" value="あいうえお隠しパラメータ" />
    <input type="submit" value="送信するよ！" />
  <br>
  年齢：
    <select name="age">
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
    </select>
  <br>
  数値選択に、FOR文使用：
  <select name="number">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
  </select>
  <br>
  ご希望商品：
    <input type="radio" name="gift" value="Ａ">Ａ賞
    <input type="radio" name="gift" value="Ｂ">Ｂ賞
    <input type="radio" name="gift" value="Ｃ">Ｃ賞
  <br>
  個数：
    <select name="number2">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
      </select>
  <br>
  <input type="submit" value="申込" />
</form>