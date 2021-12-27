<?php
include ('../common/auth.php');
include('../common/db_connect.php');

$query = $connection->prepare('SELECT title, type, id from content');
$query->execute();
$result = $query->fetchAll();

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
    <br>
    <button onclick="window.location.href = '/'">Главная
    </button>
    <button onclick="window.location.href = '/admin/content-form.php'">Создать
        запись
    </button>
    <br>
    <h3>Список контента</h3>
    <table>
        <tr>
            <th>Заголовок</th>
            <th>Тип</th>
            <th>Действие</th>
        </tr>
        <?php
        foreach ($result as $item) {
            ?>
            <tr>
                <td><?php  echo $item['title'] ?></td>
                <td><?php  echo $item['type'] ?></td>
                <td>
                    <button onclick="window.location.href = '/admin/content-form.php?id=<?php  echo $item['id']; ?>'">
                        Редактировать
                    </button>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <h3>Форма галери</h3>
    <form action="/admin/index.php" method="post" enctype="multipart/form-data">
        <label for="image">Картинка</label>
        <input type="file" name="image" id="image"
               accept="image/png, image/jpeg">
        <button type="submit">Отправить</button>
    </form>
</div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadPath = str_replace('admin', 'image/gallery/', __DIR__)
        .basename($_FILES['image']['name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], $uploadPath);
}
?>

