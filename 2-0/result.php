<?php
    $my_name = $_POST['my_name'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $hidden_param = $_POST['hidden_param'];
    $age = $_POST['age'];
    $number = $_POST['number'];
    $number2 = $_POST['number2'];
    $gift = $_POST['gift'];
?>
<p>私の名前は<?php echo $my_name; ?>です。</p>
<p>パスワードは<?php echo $password; ?>です。</p>
<p>性別は<?php echo $sex; ?>です。</p>
<p>隠しパラメータは<?php echo $hidden_param; ?>です。</p>
<p>年齢は<?php echo $age; ?>です。</p>
<p>数値は<?php echo $number; ?>です。</p>
<p>ご希望景品は<?php echo $gift; ?>賞です。</p>
<p>個数は<?php echo $number2; ?>です。</p>

