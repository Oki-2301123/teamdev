<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>会員ログイン</h1>
    メールアドレス<input type="text" name="mailaddres"><br><br>
    パスワード<input type="text" name="pass"><br><br>
    <form action="toppage.php" method="post">
    <input type="submit" value="ログイン">
    </form>
    <form action="kanrishatop.php" method="post">
    <input type="submit" value="管理者としてログイン"><br><br>
    </form>
    ふるさとマルシェの会員登録されていない方
    <form action="newaccount.php" method="post">
        <input type="submit" value="新規登録（無料）">
    </form>


</body>
</html>