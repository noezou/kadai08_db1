<?php
require_once('funcs.php');

//1.  DB接続
$hostname = '';
$dbname = '';
$user = '';
$pass = '';
// MAMPでの動作確認用
// $hostname='localhost';
// $dbname='kadai';
// $user='root';
// $pass='root';

try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname . ';charset=utf8', $user, $pass);
} catch (PDOException $e) {
  exit('DBConnectError' . $e->getMessage());
}

//２．データ取得SQL作成 登録済みのものを持ってくるので攻撃気にしないで良い
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table;");
$status = $stmt->execute();

//３．データ表示
$view = "";
$s = " ； ";
if ($status == false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:" . $error[2]);
} else {
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  // $stmt->fetch(PDO::FETCH_ASSOC) 1行ずつ取ってきて、$resultに入れる
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $view .= '<p>';
    $view .= $result['id'] . $s . h($result['b_name']) . $s . h($result['b_url']) . $s . h($result['b_comment']) . $s . $result['date']; // [.]は変数に追記するとき。ドットをつけないと上書きされる。
    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ブックマーク（DB呼び出し⇒HTML表示）</title>
  <link rel="stylesheet" href="css/range.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
    div {
      padding: 10px;
      font-size: 16px;
    }
  </style>
</head>

<body id="main">
  <!-- Head[Start] -->
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">登録データ</a>
        </div>
      </div>
    </nav>
  </header>
  <!-- Head[End] -->

  <!-- Main[Start] -->
  <div>
    <div class="container jumbotron"><?= $view ?></div> <!-- echoの省略形 -->
  </div>
  <br>
  <h1>入力ページに戻る</h1>
  <div><a href="index.php">index.phpファイル</a>に戻ります</div>
  <!-- Main[End] -->
</body>

</html>