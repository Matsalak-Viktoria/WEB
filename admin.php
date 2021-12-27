<?php
session_start();
$showForm = $_SERVER['REQUEST_METHOD'] === 'GET' && empty($_SESSION['My_Auth']);
$showError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_SESSION['My_Auth'])) {
    if (empty($_POST['login']) || empty($_POST['password'])) {
        $showForm = true;
        $showError = true;
    } else {
        if ($_POST['login'] == '1' && $_POST['password'] == '1') {
            $_SESSION['My_Auth'] = true;
            $showForm = false;
        } else {
            $showForm = true;
            $showError = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Портал конного спорта - Все для всадников и лошадей -
        HorseHouseUA </title>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/png">
    <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@500&display=swap"
            rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/c-f-a-h.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .hidden {
            display: none;
        }
        .error {
            color: red;
        }
    </style>
</head>

<body id="to-top">
<div class="wrapper">
    <?php
    if ($showForm) {
        ?>
        <form action="/admin.php" method="post" class="admin-form">
            <p class="error <?php if (!$showError) echo 'hidden'?>">Неверный логин или пароль</p>
            <div class="input-wrap">
                <label for="admin-login">Логин</label>
                <input type="text" name="login" id="admin-login">
            </div>
            <div class="input-wrap">
                <label for="admin-pass">Пароль</label>
                <input type="password" name="password" id="admin-pass">
            </div>
            <button type="submit">Отправить</button>
        </form>
        <?php
    } elseif(!empty($_SESSION['My_Auth'])) {
        ?>
        <script type="text/javascript"> document.location.href = '<?php echo "http://$_SERVER[HTTP_HOST]/admin/index.php"?>';</script>
    <?php
    } else {
    ?>
        <script type="text/javascript"> document.location.href = '<?php echo "http://$_SERVER[HTTP_HOST]"?>';</script>
        <?php
    }
    ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="js/script.js"></script>
</body>
