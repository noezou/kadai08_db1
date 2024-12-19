<?php

/**
 * 1. index.phpのフォームからデータを受け取る。
 * 2. 受け取ったデータをバインド変数に与える。
 * 3. 
 */

//1. POSTデータ取得
$name = $_POST['name'];
$url = $_POST['url'];
$comment = $_POST['comment'];

echo $name;

//2. DB接続する
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
  //Password注意。MAMP='root'　XAMPP=''
  $pdo = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname . ';charset=utf8', $user, $pass);
} catch (PDOException $e) {
  exit('DBConnectError:' . $e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare(
  "INSERT
                          INTO
                        gs_bm_table(id,b_name,b_url,b_comment,date)
                        VALUES(NULL, :name, :url, :comment, now())"
);

//  2. バインド変数を用意
//Integer（数値の場合 PDO::PARAM_INT)
//String（文字列の場合 PDO::PARAM_STR) 念には念を入れて書いている。もっとわかりにくい変数名のときに、文字列だよ、と示している。
// 悪意あるSQLを実行させないために、１クッション置いている
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

// 4．データ登録処理後 成功した場合：true、失敗した場合：false
if ($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:' . $error[2]);
} else {
  // 5．index.phpへリダイレクト
  header('Location: index.php');
}
