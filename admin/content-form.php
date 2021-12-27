<?php

include('../common/auth.php');
include('../common/db_connect.php');

$method = 'post';
$url = '/admin/content-form.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        try {
            $query = $connection->prepare('SELECT * from content where id = ' . htmlspecialchars($_GET['id']));
            $query->execute();
            $result = $query->fetchAll();
            if (count($result) > 0) {
                extract($result[0]);
                $method = 'put';
                $url .= '?id='.htmlspecialchars($_GET['id']);
            } else {
                echo 'Запись не найдена. Попробуйте снова!';
            }
        }catch(PDOException $e) {
            echo 'Запись не найдена. Попробуйте снова!';
        }
    } else {
        $title = '';
        $description = '';
        $image = '';
        $type = '';
        $created_at = '';
        $keywords = '';
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
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">
    <link rel="stylesheet" href="/css/c-f-a-h.css">
    <link rel="stylesheet" href="/css/style.css">
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
    <button onclick="window.location.href = '/admin/index.php'">Назад</button>
    <form action="<?php echo $url?>" method="post" class="admin-form" enctype="multipart/form-data">
        <?php
        if ($method == 'put') echo '<input type="hidden" name="_method" value="PUT" />'
        ?>
        <div class="input-wrap">
            <label for="title">Заголовок</label>
            <input type="text" name="title" value="<?php
            if (!empty($title)) echo $title ?>" id="title">
        </div>
        <div class="input-wrap">
            <label for="description">Основной Текст</label>
            <input type="text" name="description" value="<?php
            if (!empty($description))  echo $description ?>" id="description">
        </div>

        <div class="input-wrap">
            <label for="type">Тип контента</label>
            <select name="type" id="type">
                <option <?php
                if (!empty($type) && $type == 'article') echo 'selected' ?>
                        value="article">Статья
                </option>
                <option <?php
                if (!empty($type) && $type == 'video') echo 'selected' ?>
                        value="video">Видео
                </option>
                <option <?php
                if (!empty($type) && $type == 'news') echo 'selected' ?>
                        value="news">Новость
                </option>
            </select>
        </div>

        <div class="input-wrap">
            <label for="image">Картинка</label>
            <input type="file" name="image" id="image" accept="image/png, image/jpeg">
        </div>

        <div class="input-wrap">
            <label for="keywords">Ключевые слова</label>
            <input type="text" name="keywords" value="<?php  if (!empty($keywords)) echo implode(', ', json_decode($keywords, true))
            ?>" id="keywords">
        </div>
        <button type="submit">Отправить</button>
    </form>
</div>
</body>
</html>
<?php
} else {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $type = htmlspecialchars($_POST['type']);
    $keywords = json_encode(explode(', ', htmlspecialchars($_POST['keywords'])));
    if (!empty($_FILES['image']['name'])) {
        $uploadPath = str_replace('admin', 'image/content-images/', __DIR__)
            .basename($_FILES['image']['name']);

        move_uploaded_file($_FILES["image"]["tmp_name"], $uploadPath);
    }

    if (!isset($_POST['_method'])) {
        try {
            $connection->exec("INSERT INTO content (title, description, type, created_at, keywords, image) values ('$title','$description','$type',NOW(),'$keywords','$uploadPath')");

        } catch (PDOException $e) {
            echo 'Запись не добавлена. Попробуйте снова!';
            exit();
        }
    }else {
        try {
            $query = "UPDATE content SET title = '$title', description = '$description', type = '$type', created_at = NOW(), keywords = '$keywords'";

            if (!empty($_FILES['image']['name'])) {
                $query .= ", image = '$uploadPath'";
            }

            $query .= ' where id = ' . htmlspecialchars($_GET['id']);
            $connection->exec($query);
        } catch (PDOException $e) {
            echo 'Запись не обновлена. Попробуйте снова!';
            exit();
        }
    }
    echo '<script type="text/javascript"> document.location.href = "/admin/index.php";</script>';
    exit();
}
?>
