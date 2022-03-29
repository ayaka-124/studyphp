
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
<?php
 
//セッションを使う
session_start();
 
// 変数の初期化
$email = '';
$password = '';
$err_msg = array();
 
// POST送信があるかないか判定
if (!empty($_POST)) {
  // 各データを変数に格納
  $email = $_POST['email'];
  $password = $_POST['password'];
 
  // eメールアドレスバリデーションチェック
  // 空白チェック
  if ($email === '') {
    $err_msg['email'] = '入力必須です';
  }
  // 文字数チェック
  if (strlen($email) > 255) {
    $err_msg['email'] = '255文字で入力してください';
  }
  // パスワードバリデーションチェック
  // 空白チェック
  if ($password === '') {
    $err_msg['password'] = '入力してください';
  }
  // 文字数チェック
  if (strlen($password) > 255 || strlen($password) < 5) {
    $err_msg['password'] = '６文字以上２５５文字以内で入力してください';
  }
  // 形式チェック
  if (!preg_match("/^[a-zA-Z0-9]+$/", $password)) {
    $err_msg['password'] = '半角英数字で入力してください';
  }
}
 
?>