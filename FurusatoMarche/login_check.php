<?php
session_start();

if (isset($_POST['mailaddress']) && isset($_POST['pass'])) {
    $mail = $_POST['mailaddress'];
    $pass = $_POST['pass'];

    require_once('function.php');
    $pdo = pdo();

    $sql = 'SELECT user_pass, user_name, user_id FROM users WHERE user_mail = ?';
    $data = $pdo->prepare($sql);
    $data->execute([$mail]);

    $check_pass = null; // 初期化
    foreach ($data as $a) {
        $check_pass = $a['user_pass'];
        $name = $a['user_name'];
        $id = $a['user_id'];
    }

    if ($check_pass === $pass) {
        $_SESSION['user_name'] = $name;
        $_SESSION['user_id'] = $id;
        header('Location: toppage.php');
        exit(); // スクリプトを終了
    } else {
        $_SESSION['login_false'] = 'ログインに失敗しました。';
        header('Location: login.php');
        exit();
    }
} else {
    $_SESSION['login_false'] = '項目を入力してください';
    header('Location: login.php');
    exit();
}