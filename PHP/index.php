<?php
$title = "Интернет магазин, Стриженок";//Название страницы
date_default_timezone_set("Europe/Moscow");
$today = date("d.m.y");  //Текущий год, месяц, день
$time = date("h:m:s"); //Текущее время

$s = date("s"); // Текущая секунда
$os = (int)$s % 2; // Четность секунды

// $array = [
//     '<li>ЗАНЯТИЯ НА ПОДИУМЕ</li>
//     <p>
//           В школе моделей занятия проходят не только в зеркальном классе, но и
//           на самом настоящем подиуме. Увлекательные репетиции, проходящие на
//           модельном подиуме перед аудиторией, позволяют закрепить навыки дефиле,
//           приобретенные в классе.
//         </p>',

//         '<li>МОДНЫЕ ПОКАЗЫ</li>
//         <p>
//           Специально для своих учеников мы организовали Московскую детскую
//           неделю моды. Модные показы, праздники и другие мероприятия модельного
//           агентства для детей – это незаменимая практика приобретенных знаний.
//         </p>',
//         '<li>ПУБЛИЧНЫЕ ВЫСТУПЛЕНИЯ</li>
//         <p>
//           Благодаря увлекательным мероприятиям, ребята с лёгкостью преодолевают
//           страх перед сценой и формируют навыки выступления перед аудиторией.
//         </p>',
//         '<li>ПОГРУЖЕНИЕ В ФОТОСЪЕМКИ</li>
//         <p>
//           В обучение включена подготовка к работе на съемочной площадке и
//           создание модельного портфолио. Незабываемыми останутся впечатления от
//           съемочного дня, проведенного в фотостудии.
//         </p>',
//         '<li>УЧИМ ПОБЕЖДАТЬ</li>
//         <p>
//           На занятиях делимся секретами успешных выступлений на конкурсных и
//           телевизионных проектах. Выпускники школы моделей успешно принимают
//           участие в российских и международных детских конкурсах. Самой юной
//           нашей ученице, победительнице международного конкурса Little Miss
//           Planet всего 6 лет.
//         </p>',
//         '<li>РАБОТА НАД ОСАНКОЙ</li>
//         <p>
//           Мы делаем упор на физическое развитие ребёнка, поэтому в программу
//           обучения входят занятия, способствующие формированию правильной
//           осанки.
//         </p>',
//         '<li>ПОСВЯЩЕНИЕ В МОДЕЛИ</li>
//         <p>
//           Ребята получают не только диплом, но и Статус модели, а фотографии,
//           созданные во время обучения, размещаются на сайте модельного
//           агентства.
//         </p>',
// ];

$current_page = "index.php";

include "../db/db.php";
  $result = mysqli_query($mysql, "SELECT * FROM `imgs`");
  
  $arrayLink = [];
  
  while ($name = mysqli_fetch_assoc($result)) {
    array_push($arrayLink, [$name['link'], $name['titles']]);
  }
  
  $title_img = '';
      $photo1 = $arrayLink[0][0];
      $title_img1 = $arrayLink[0][1];
      $photo2 = $arrayLink[1][0];
      $title_img2 = $arrayLink[1][1];
      $photo2 = $arrayLink[2][0];
      $title_img2 = $arrayLink[2][1];
      $photo3 = $arrayLink[3][0];
      $title_img3 = $arrayLink[3][1];
      $photo4 = $arrayLink[4][0];
      $title_img4 = $arrayLink[4][1];
      $photo5 = $arrayLink[5][0];
      $title_img5 = $arrayLink[5][1];
      $photo6 = $arrayLink[6][0];
      $title_img6 = $arrayLink[6][1];
      $photo7 = $arrayLink[7][0];
      $title_img7 = $arrayLink[7][1];
      $photo8 = $arrayLink[8][0];
      $title_img8 = $arrayLink[8][1];
      $photo9 = $arrayLink[9][0];
      $title_img9 = $arrayLink[9][1];
      $photo10 = $arrayLink[10][0];
      $title_img10 = $arrayLink[10][1];
      $photo11 = $arrayLink[11][0];
      $title_img11 = $arrayLink[11][1];


  $mysql->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?></title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2967/2967015.png" />
    <link rel="stylesheet" href="../CSS/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Suez+One&display=swap"
      rel="stylesheet"
    />
  </head>
  <body id="top1">
    
  <?php include '../templates/header.php'?>

    <div class="top" id="top">
      <h1>CANDY SHOP</h1>
      <h3>Фирменные сладости</h3>
    </div>

    <div class="main" id="main">
      <h2>Описание</h2>
      <div class="text">
        <span><p>
            Наш магазин предоставляет огромный выбор фирменных сладостей, мы везем их из разных стран. Каждый товар сделан в еденичном экземпляре,
            тем самым делая любую покупку в нашем магазине, вы будете единственным её обладателем. 
            Без конфет не может быть чаепития, без них не ходят в гости, конфеты – не только сладость, но и лекарство от душевных мук.
          </p>
        </span>
      </div>
    </div>
          
    <div class="overriew" id="overriew">
      <h2>Товары нашего магазина</h2>
        <h4>Каталог</h4>
        <div class="wrap-t">
        <a href="kor.php">
          <div class="t1">
            <img
              src=<?php echo $photo1?>
              title=<?=$title_img1?>
            />
            <span>Торт 'Шарик' 500р</span>
          </div>
      </div>
      </a>
        <a href="kor.php">
          <div class="t2">
            <img
            src=<?php echo $photo3?>
            title=<?=$title_img3?>
            />
            <span>Торт 'Клик' 500р</span>
          </div>
        </a>
        <a href="kor.php">
          <div class="t3">
            <img src=<?php echo $photo2?>
            title=<?=$title_img2?>
            />
            <span>Торт 'Стер' 500р</span>
          </div>
          </a>
          <a href="kor.php">
          <div class="t4">
            <img
            src=<?php echo $photo4?>
            title=<?=$title_img4?>
            />
            <span>Торт 'Верный' 500р</span>
         </div>
         </a>
         <a href="kor.php">
          <div class="t5">
            <img
            src=<?php echo $photo5?>
            title=<?=$title_img5?>
            />
            <span>Торт 'Ваш' 500р</span>
          </div>
          </a>
          <a href="kor.php">
          <div class="t6">
            <img
            src=<?php echo $photo6?> title=<?=$title_img6?>>
            <span>Торт 'Наш' 500р</span>
          </div>
          </a>
          <a href="kor.php">
          <div class="t7">
            <img
            src=<?php echo $photo7?>
            title=<?=$title_img7?>
            />
            <span>Торт 'Их' 500р</span>
         </div>
         </a>
         <a href="kor.php">
          <div class="t8">
            <img
            src=<?php echo $photo8?>
            title=<?=$title_img8?>
            />
            <span>Торт 'Мячик' 500р</span>
          </div>
          </a>
          <a href="kor.php">
          <div class="t9">
            <img
            src=<?php echo $photo9?>
            title=<?=$title_img9?>
            />
            <span>Торт 'Клава' 500р</span>
          </div>
          </a>
          <a href="kor.php">
          <div class="t10">
            <img
            src=<?php echo $photo10?>
            title=<?=$title_img10?>
            />
            <span>Торт 'Тазик' 500р</span>
          </div>
          </a>
          <a href="kor.php">
          <div class="t11">
            <img
            src=<?php echo $photo11?>
            title=<?=$title_img11?>
            />
            <span>Торт 'Индекс' 500р</span>
          </div>
          </a>
          <a href="kor.php">
          <div class="t12">
            <img
            src=<?php echo $photo12?>
            title=<?=$title_img12?>
            />
            <span>Торт 'С' 500р</span>
          </div>
          </a>
    </div>


    <?php include '../templates/footer.php' ?>
    
  </body>
</html>
