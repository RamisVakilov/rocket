<?php
    include 'php/connection_base.php';
    $sql = "SELECT * FROM checkup";
    $result = $mysqli->query($sql);//Получаю все содержимое таблицы
    $mysqli->close();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/my.css">
     
    <title>PHP</title>
</head>
<body>
    
   <header class="header_desck">
       <div class="container">
           <!-- Десктопное отображение -->
           <!-- Верхняя шапка -->
            <div class="header__topnav">
                <div class="header__topnav_logo">
                    <!-- логотип -->
                    <a href="#!" class="logo_link">
                        <svg width="92" height="28">
                            <use xlink:href="/dist/svg/svg.svg#logo"></use>
                        </svg>
                    </a>
                    <!-- мета с адресом -->
                    <a href="#!" class="meta__link">
                        <svg width="14" height="20">
                            <use xlink:href="/dist/svg/svg.svg#meta"></use>
                        </svg>
                        <div class="wrap">
                            <p class="meta__link-sity">Ростов-на-Дону</p>
                            <p class="meta__link-street">ул. Ленина, 2Б</p>
                        </div>
                    </a>
                </div>
            <!-- Телефон и запись -->
                <div class="header__topnav_contacts">
                    <a href="https://wa.me/+78630000000" class="contacts_link">
                        <svg width="28" height="28">
                            <use xlink:href="/dist/svg/svg.svg#whats"></use>
                        </svg>
                        +7(863) 000 00 00
                    </a>
                    <button class="button__signup">
                        Записаться на прием
                    </button>
                </div>
            </div>
       </div>
    </header>  
    <!-- Мобильное отображение от 430px-->
    <header class="header_mobile">
        <div class="container">
            <div class="wrap_logo">
                <!-- Бургер  -->
                    <div class="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                <!-- Логотип    -->
                <a href="#!" class="logo_link">
                    <svg width="62" height="18">
                    <use xlink:href="/dist/svg/svg.svg#logo"></use>
                    </svg>
                </a>
            </div>
            
             <!-- Телефон и Город -->
                <div class="wrap_sity">
                    <a href="https://wa.me/+78630000000" class="contacts_link">
                        +7(863) 000 00 00
                    </a>
                    <a  href="#!" class="contacts_sity">Ростов-на-Дону</a>
                </div>
        </div>
        
    </header>
    <!-- -------------------------------------------------------------------------------- -->
        <!-- меню -->
        <!-- Десктопное отображение -->
       <nav class="nav">
            <div class="container">
               <ul class="nav__items">
                    <li class="nav__item"><a href="#!">О клинике</a></li>
                    <li class="nav__item"><a href="#!">Услуги</a></li>
                    <li class="nav__item"><a href="#!">Специалисты</a></li>
                    <li class="nav__item"><a href="#!">Цены</a></li>
                    <li class="nav__item"><a href="#!">Контакты</a></li>
                 </ul>
           </div>
      </nav>
      <!-- Мобильное отображение от 430px-->
      <nav class="nav_mobile">
            <div class="container">
                <ul class="nav_mobile__items">
                    <li class="nav_mobile__item"><a href="#!">О клинике</a></li>
                    <li class="nav_mobile__item"><a href="#!">Услуги</a></li>
                    <li class="nav_mobile__item"><a href="#!">Специалисты</a></li>
                    <li class="nav_mobile__item"><a href="#!">Цены</a></li>
                    <li class="nav_mobile__item"><a href="#!">Контакты</a></li>
                </ul>
                <button class="button__signup button__signup_mobile">
                    Записаться на прием
                </button>
            </div>
      </nav>
      <!-- секция промо -->
      <section class="promo">
          <div class="container">
              <h1 class="promo__title">
                Многопрофильная клиника для детей
                и взрослых
              </h1>
              <p class="promo__descr">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
              </p>
          </div>
      </section>
     <!-- Секция слайдер -->
      <section class="slider">
          <div class="container">
              <div class="wrap">
         

                   <?php
                        foreach($result as $item){
                    ?>      
                    <!-- ----------------   -->
                        <div class="slider-item fade">
                        <div class="slider__content">
                            <!-- Левая часть -->
                            <div class="slider__content_checkup">
                                <h2 class="slider__content_title"><?php echo $item['title']?> <br><span><?php echo $item['subtitle']?></span></h2>
                                <ul class="slider__content_list">
                                    <?php
                                        $arr=explode('.', $item['list']);
                                        foreach($arr as $val){
                                     ?>   
                                            <!-- Список  -->
                                           <li> <span><?php echo $val?></span> </li>
                                   <?php 
                                      }
                                    ?>
                                    
                                    
                                </ul>
                                <div class="slider__content_price">
                                    <p class="current__price">Всего <?php echo $item['price']?>₽</p>
                                    <p class="oldprice"><?php echo $item['oldprice']?>₽</p>
                                </div>
                                <div class="slider__content_signup">
                                <button class="button__signup">
                                    Записаться
                                </button>
                                <button class="button__signup button__signup-more">
                                    Подробнее
                                </button>
                                </div>
                            </div>
                            <!-- Правая часть -->
                            <div class="slider__content_img" style='background: center/cover no-repeat url("<?php echo $item['img']?>");'>
                                
                            </div>
                        </div>  
                    </div>
                    <!-- ---------------------- -->
                  <?php  } ?>
                    
                   
              </div>
            <!-- Управление слайдами -->
                <div class="slider__arr">
                     <div id="left" class="wrap_left">
                         <div  class="slider__arr_left">
                            <span></span>
                        </div>
                     </div>   
                    
                    <div class="slider__arr_center">
                        <span id='active' class="active"></span>
                        <span class="dash">/</span>
                        <span id='all' class="all"></span>
                    </div>
                    <div id="rigth" class="wrap_rigth">
                        <div  class="slider__arr_left slider__arr_left-rotate">
                            <span></span>
                        </div> 
                    </div>
                   
                </div>
          </div>
      </section>
   <!-- Подвал    -->
   <footer class="footer">
       <div class="container">
           <a href="#!">
             <svg class="footer__logo">
                <use xlink:href="/dist/svg/svg.svg#logo_footer"></use>
            </svg>
           </a>
             
            <nav class="footer__nav">
                <ul class="nav__items">
                        <li class="nav__item"><a href="#!">О клинике</a></li>
                        <li class="nav__item"><a href="#!">Услуги</a></li>
                        <li class="nav__item"><a href="#!">Специалисты</a></li>
                        <li class="nav__item"><a href="#!">Цены</a></li>
                        <li class="nav__item"><a href="#!">Контакты</a></li>
                </ul>
            </nav>
            <div class="footer__social">
                <a href="https://api/instagram.com/nekto" class="icon-instagram"></a> 
                <a href="https://telegram.me/RamisVakilov" class="icon-telegram"></a>
                <a href="https://wa.me/+78630000000" class="icon-whats"></a>
            </div>
       </div>
    </footer>
    <div class="overlay">
    <div class="modal modal__form">
        <div class="modal__close modal__close_form">&times;</div>
        <div class="modal__title">Просто заполните форму заявки</div>
        <div class="modal__subtitle">и мы перезвоним вам в течении 10 минут</div>
        <form class="form__form form__form_mt25">
            <input type="text" name="name"  class="form__text" placeholder="Ваше имя">
            <input type="tel" name="tel" class="form__tel" placeholder=" Ваш телефон" >
            <input type="email" name="email" class="form__email" placeholder="Ваш E-mail">
            <button id="#button__signup" class="button__signup" type="submit">Записаться</button>
        </form>
        <div class="warning"></div>
    </div>
    <div class="modal modal__message">
        <div class=" modal__close modal__close_message">&times;</div>
         <div class="modal__title">
          
        </div>
    </div>    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script> -->
    <script src="/dist/js/index.js"></script>
    <script src="/src/js/ajax.js"></script>
</body>
</html>