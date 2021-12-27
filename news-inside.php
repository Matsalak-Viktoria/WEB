
<?php
include('common/db_connect.php');

$query = $connection->prepare('SELECT title, description, image from content where type = \'news\' limit 1');
$query->execute();
$result = $query->fetchAll();
$data = $result[0];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Портал конного спорта - Все для всадников и лошадей - HorseHouseUA </title>
  <link rel="shortcut icon" href="image/favicon.ico" type="image/png">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@500&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/c-f-a-h.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="to-top">
  <header>
    <a href="index.html" class="logo scale-in-center"><img src="image/Logo2.jpg" data-src="Logo2.jpg"
        alt="Портал конного спорта"></a>
    <nav class="header-menu">
      <ul>
        <li><a href="index.html">Главная</a></li>
        <li><a href="#">Конный спорт</a>
          <div class="arrow-dropmenu">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14.5858 9.99995H0V7.99995H14.5858L8.29289 1.70706L9.70711 0.292847L18.4142 8.99995L9.70711 17.7071L8.29289 16.2928L14.5858 9.99995Z"
                fill="black" />
            </svg>
          </div>
          <ul class="dropmenu">
            <li><a href="article.php" class="droplink">Статьи</a></li>
          </ul>
        </li>
        <li><a href="#">Конные клубы</a>
          <div class="arrow-dropmenu">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14.5858 9.99995H0V7.99995H14.5858L8.29289 1.70706L9.70711 0.292847L18.4142 8.99995L9.70711 17.7071L8.29289 16.2928L14.5858 9.99995Z"
                fill="black" />
            </svg>
          </div>
          <ul class="dropmenu">
            <li><a href="https://horseua.com/ru/category/konnie-clubi/konnie-clubi-kiev/" target="_blank"
                class="droplink">Киева</a></li>
            <li><a href="https://horseua.com/ru/category/konnie-clubi/konnie-clubi-lvov/" target="_blank"
                class="droplink">Львова</a></li>
            <li><a href="https://horseua.com/ru/category/konnie-clubi/konnit-cluby-odessa/" target="_blank"
                class="droplink">Одессы</a></li>
            <li><a href="https://horseua.com/ru/category/konnie-clubi/konnie-clubi-kharkov/" target="_blank"
                class="droplink">Харькова</a></li>
            <li><a href="https://horseua.com/ru/category/konnie-clubi/konnie-clubi-dnepr/" target="_blank"
                class="droplink">Днепра</a></li>
          </ul>
        </li>
        <li><a href="#">Календарь событий</a>
          <div class="arrow-dropmenu">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14.5858 9.99995H0V7.99995H14.5858L8.29289 1.70706L9.70711 0.292847L18.4142 8.99995L9.70711 17.7071L8.29289 16.2928L14.5858 9.99995Z"
                fill="black" />
            </svg>
          </div>
          <ul class="dropmenu">
            <li><a href="competition.html" class="droplink">Соревнования</a></li>
          </ul>
        </li>
        <li><a href="#">Медиа</a>
          <div class="arrow-dropmenu">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14.5858 9.99995H0V7.99995H14.5858L8.29289 1.70706L9.70711 0.292847L18.4142 8.99995L9.70711 17.7071L8.29289 16.2928L14.5858 9.99995Z"
                fill="black" />
            </svg>
          </div>
          <ul class="dropmenu">
            <li><a href="news-inside.php" class="droplink">Новости</a></li>
            <li><a href="gallery.php" class="droplink">Галерея</a></li>
            <li><a href="news-inside-video.php" class="droplink">Видео</a></li>
          </ul>
        </li>
        <li><a href="#">Клиентам</a>
          <div class="arrow-dropmenu">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14.5858 9.99995H0V7.99995H14.5858L8.29289 1.70706L9.70711 0.292847L18.4142 8.99995L9.70711 17.7071L8.29289 16.2928L14.5858 9.99995Z"
                fill="black" />
            </svg>
          </div>
          <ul class="dropmenu">
            <li><a href="about.html" class="droplink">О нас</a></li>
            <li><a href="contacts.html" class="droplink">Контакты</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="header-menu-close">
      Закрыть
    </div>
    <div class="header-action">
      <a class="header-login" href="admin.php"><img src="image/User.png" data-src="User.png" alt="Портал конного спорта"></a>
      <a class="header-search" href="#"><img src="image/Search.png" data-src="Search.png"
          alt="Портал конного спорта"></a>
      <a class="header-burger" href="#"><img src="image/Triple_line.png" data-src="Triple_line.png"
          alt="Портал конного спорта"></a>
    </div>
  </header>
  <nav aria-label="breadcrumb">
    <div class="wrapper">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
        <li class="breadcrumb-item"><a href="news.html">Новости</a></li>
        <li class="breadcrumb-item active"><a href="">Страница новостей</a></li>
      </ul>
    </div>
  </nav>
  <div class="content-page">
    <div class="wrapper">
      <h2 class="title">
       <?php echo htmlspecialchars_decode(stripslashes($data['title']))?>
      </h2>
      <a href="/image/content-images/<?php echo basename($data['image'])?>"
        class="content-page__img" data-fancybox="content-foto">
        <img src="/image/content-images/<?php echo basename($data['image'])?>" alt="image">
      </a>
      <?php echo htmlspecialchars_decode(stripslashes($data['description']))?>

    </div>
  </div>
  <footer class="footer">
    <div class="footer-container">
      <div class="requisites">
        <h3 class="footer-title">Чтобы начать</h3>
        <ul class="footer-list">
          <li class="list-item">Главная</li>
          <li class="list-item">Регистрация</li>
        </ul>
      </div>

      <div class="information">
        <h3 class="footer-title">Информация</h3>
        <ul class="footer-list">
          <li class="list-item">
            <a href="#" class="footer-link">О нас</a>
          </li>
          <li class="list-item">
            <a href="#" class="footer-link">Контакты</a>
          </li>
        </ul>
      </div>

      <div class="contacts">
        <h3 class="footer-title">Полезные ссылки</h3>
        <ul class="footer-list">
          <li class="list-item">
            <a href="#" class="footer-link">Поиск</a>
          </li>
          <li class="list-item">
            <a href="#" class="footer-link">Хотите задать вопрос?</a>
          </li>
        </ul>
      </div>

      <div class="contact-us">
        <h3 class="footer-title">Свяжитесь с нами</h3>
        <div class="icons">
          <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoicnUifQ%3D%3D%22%7D"
            class="twitter-link">
            <img class="" src="./image/twitter-icon.png" alt="icon">
          </a>
          <a href="https://m.facebook.com/login/?locale2=uk_UA" class="">
            <img class="facebook" src="./image/facebook-icon.png" alt="icon">
          </a>
          <a href="https://myaccount.google.com/" class="">
            <img class="" src="./image/telegram.png" alt="icon">

          </a>
        </div>
        <!-- <a href="javascript:void(0)" class="contact-us-button">Свяжитесь с нами</a> -->
      </div>
    </div>
  </footer>
  <a href="#to-top" class="to-top">
    <img src="image/return.png" alt="Наверх" />
  </a>
  <div class="modal-search">
    <div class="modal">
      <h2 class="modal-title">Что будем искать?</h2>
      <form action="search.php" class="modal-search-form">
        <input type="text" name="search" placeholder="Поиск">
          <button type="submit"> Поиск </button>
      </form>
    </div>
    <div class="modal-close">Закрыть</div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="slick/slick.min.js"></script>
  <script src="js/script.js"></script>
</body>
