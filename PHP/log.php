<?php
$title = "Стриженок Богдан Юрьевич, группаа 211-362, лб3";//Название страницы
$today = date("d.m.y");  //Текущий год, месяц, день
$time = date("h:m:s"); //Текущее время

$current_page = "form.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?></title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2967/2967015.png" />
    <link rel="stylesheet" href="../CSS/log.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Suez+One&display=swap"
      rel="stylesheet"
    />
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

    <form action="../PHP/reg.php" method="post">
      <h1 title="Форма регистрации на сайте">Регистрация</h1>
      <div class="group">
        <label for="login"></label>
        <input type="text" placeholder="Логин" id="login" name="Login" />
      </div>
      <div class="group">
        <label for="password"></label>
        <input
          type="password"
          placeholder="Пароль"
          id="password"
          name="password"
        />
      </div>
      <div class="group">
        <label for="password"></label>
        <input
          type="password"
          placeholder="Повторите пароль"
          id="password"
          name="password"
        />
      </div>
      <div class="group">
        <input type="checkbox" id="rememberMe" name="rememberMe" />
        <span>Запомнить меня</span>
      </div>
      <div class="group">
        <button type="submit">Зарегестрироваться</button>
      </div>
    </form>
    
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