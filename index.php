<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ブックマークアプリ</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">書籍データ登録</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>ブックマークアプリ</legend>
                <label>書籍名：<input type="text" name="name"></label><br>
                <label>ＵＲＬ：<input type="text" name="url"></label><br>
                <label>コメント：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <h1>入力したデータを確認</h1>
<div><a href="select.php">select.phpファイル</a>をクリックして確認します</div>
    <!-- Main[End] -->


</body>

</html>
