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
    
  <?php include '../templates/header.php'?>

    <div class="del">
      <span>Для заказа, обращайтесь по номеру: 8 (987) 415-16-63</span>
      <div>
    
    <?php include '../templates/footer.php' ?>

  </body>
</html>
