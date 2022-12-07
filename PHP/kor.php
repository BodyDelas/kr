<?php
$title = "Стриженок Богдан Юрьевич, группаа 211-362, лб3";//Название страницы
$today = date("d.m.y");  //Текущий год, месяц, день
$time = date("h:m:s"); //Текущее время

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?></title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2967/2967015.png" />
    <link rel="stylesheet" href="../CSS/kor.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Suez+One&display=swap"
      rel="stylesheet"/>
  </head>
  <body>
    
  <header>
      <div>
        <span class="siteName">Candy shop</span>
      </div>
      <div class="about">
        <a class="black_link" href="index.php#top1">На главную</a>
        <a class="black_link" href="index.php#overriew">Товары</a>
        <a class="black_link" href="index.php#contacs">Контакты</a>
        <a href="<?php $link= 'log.php'; echo $link?>" 
            class="<?php if($current_page===$link){
                    echo 'menu_color';
            }else echo 'black_link' ?>">Регистрация</a> 

        <a href="<?php $link= 'kor.php'; echo $link?>" 
            class="<?php if($current_page===$link){
                    echo 'menu_color';
            } else echo 'black_link'?>">Корзина</a>
      </div>
    </header>

    <div class="del">
      <span>Для заказа, обращайтесь по номеру: 8 (987) 415-16-63</span>
      <div>
    
      <footer>
      <div class="contacs">
        <h3 id="contacs">Контактная информация магазина</h3>
        <p>Наш телефон: 8(987)4151663</p>
        <p>Наша почта: bogstrij83@mail.ru</p>
        <span class="footer-info__item">
              <?php echo 'Сформировано ',  $today, " в ", $time ?>
</span>
      </div>
    </footer>

  </body>
</html>
