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