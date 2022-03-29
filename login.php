<?php 
require_once('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <div class="card">
    <form action="" method="post">
    <div class="e_mail"><?php echo $err_msg['email']; ?></div>
    <label for=""><span>メールアドレス</span>
      <input type="email" name="email" id=""><br>
    </label>
    <div class="err_msg"><?php echo $err_msg['password']; ?></div>
    <label for=""><span>パスワード</span>
      <input type="text" name="password" id=""><br>
    </label>
    <input type="submit" value="送信">
  </form>
    </div>
</body>
</html>