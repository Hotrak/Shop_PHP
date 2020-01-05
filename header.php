<?php 
$basket_count = count($_SESSION['basket']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="./css/sign_menu.css" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <header class="header">
    <div class="conteiner">
      <div class="clearfix">
        <div class="possition dws-menu">
          <ul>
            <li><a href="#"><img src="img/area.svg" alt="" height="14px">Адреса магазинов</a>

            </li>
            <li><a href="#"><img src="img/strelka.svg" alt="" height="14px">Минск</a>
              <ul>
                <li><a href="#">Витебск</a>

                </li>
              </ul>
            </li>
          </ul>
        </div>
        <nav class="dws-menu">
          <ul>
            <li><a href="#"><img src="img/strelka.svg" alt="" height="14px">(29)395-63-78</a>
              <ul>
                <li><a href="#">(29)395-63-78</a></li>
                <li><a href="#">(29)395-63-78</a></li>
                <li><a href="#">(29)395-63-78</a></li>
                <li><a href="#">(29)395-63-78</a></li>
              </ul>
            </li>
            <li><a href="#"><img src="img/strelka.svg" alt="" height="14px">Помощь</a>
              <ul>
                <li><a href="#">Одежда</a>

                </li>
              </ul>
            </li>
            <li>
              <a href="#" id="input_menu"><?php if(!isset($_SESSION['user']['login'])){?><img class="mirror" src="img/enter.svg"
                  alt="" height="14px">Вход<?php } else 
                  echo $_SESSION['user']['login']?>
              </a>
          </ul>
        </nav>
      </div>

    </div>

  </header>
  <section class="conteiner">
    <div class="menu clearfix">
      <a href="index.php" class="logo"><img src="img/logo.png" alt="" height="100px"></a>
      <nav id="myMenu">
        <a href="delivery.php">Доставка</a>
        <a href="payment.php">Оплата</a>
        <a href="return.php">Беспроблемный возврат</a>
      </nav>
    </div>
    <div class="wrap">
      <div class="search">
        <input type="text" class="searchTerm" placeholder="What are you looking for?">
        <button type="submit" class="searchButton">
          <img src="img/search.svg" height="14px">
        </button>
      </div>
    </div>
    <div class="hotMenu">

      <a>
        <img src="img/balance.svg" alt="">
        <span>
          <p>1</p>
        </span>
      </a>
      <a>
        <img src="img/like.svg" alt="">
        <span>
          <p>1</p>
        </span>
      </a>
      <a href="basket.php">
        <img src="img/basket.svg" alt="">
        <span>
          <p id="basket_count"><?php echo $basket_count?></p>
        </span>
      </a>
    </div>
    <nav class="horizontal-menu dropdown">
      <ul>
        <li class="active">
          <a class="active_red">АКЦИИ</a>
          <div>

          </div>
        </li>
        <li>
          <a>Ноутбуки</a>
          <div style="left: -100%;">
            <a href="content.php?id=2&id_type=0">
              <img src="img/Horizontal_menu_images/Laptops/1.png" alt="">
              <p>Все ноутбуки</p>
            </a>
            <a href="content.php?id=2&id_type=2">
              <img src="img/Horizontal_menu_images/Laptops/2.jpg" alt="">
              <p>Игровые ноутбуки</p>
            </a>
            <a href="content.php?id=2&id_type=3">
              <img src="img/Horizontal_menu_images/Laptops/3.jpg" alt="">
              <p>Ультрабуки</p>
            </a>
            <a href="content.php?id=2&id_type=5">
              <img src="img/Horizontal_menu_images/Laptops/4.png" alt="">
              <p>Нетбуки</p>
            </a>
          </div>
        </li>
        <li>
          <a>Клавиатуры</a>
          <div style="left: -200%;">
            <a href="content.php?id=5&id_type=0">
              <img src="img/Horizontal_menu_images/KeyBords/1.png" alt="">
              <p>Все клавиатуры</p>
            </a>
            <a href="content.php?id=5&id_type=4">
              <img src="img/Horizontal_menu_images/KeyBords/2.jpg" alt="">
              <p>Игровые клавиатуры</p>
            </a>
            <a href="content.php?id=5&id_type=1">
              <img src="img/Horizontal_menu_images/KeyBords/3.png" alt="">
              <p>Стандартные клавиатуры</p>
            </a>
            <a href="content.php?id=5&id_type=2">
              <img src="img/Horizontal_menu_images/KeyBords/3.png" alt="">
              <p>Офисные</p>
            </a>
          </div>
        </li>
        <li>
          <a>Наушники</a>
          <div style="left: -300%;">
            <a href="content.php?id=4&id_type=0">
              <img src="img/Horizontal_menu_images/Heatphones/1.jpg" alt="">
              <p>Все наушники</p>
            </a>
            <a href="content.php?id=4&id_type=3">
              <img src="img/Horizontal_menu_images/Heatphones/2.jpg" alt="">
              <p>Игровые наушники</p>
            </a>
            <a href="content.php?id=4&id_type=1">
              <img src="img/Horizontal_menu_images/Heatphones/3.jpg" alt="">
              <p>Офисные наушники</p>
            </a>
            <a href="content.php?id=4&id_type=4">
              <img src="img/Horizontal_menu_images/Heatphones/4.png" alt="">
              <p>Вакуумные наушники</p>
            </a>

          </div>
        </li>
        <li>
          <a>Мышки</a>
          <div style="left: -400%;">
            <a href="content.php?id=3&id_type=0">
              <img src="img/Horizontal_menu_images/Mouses/1.jpg" alt="">
              <p>Все мышки</p>
            </a>
            <a href="content.php?id=3&id_type=3">
              <img src="img/Horizontal_menu_images/Mouses/2.jpg" alt="">
              <p>Игровые мышки</p>
            </a>
            <a href="content.php?id=3&id_type=1">
              <img src="img/Horizontal_menu_images/Mouses/3.png" alt="">
              <p>Офисные мышки</p>
            </a>
          </div>
        </li>
        <li>
          <a>Коврики</a>
          <div>
            <a href="content.php?id=1&id_type=0">
              <img src="img/Horizontal_menu_images/Mats/1.png" alt="">
              <p>Все коврики</p>
            </a>
            <a href="content.php?id=1&id_type=2">
              <img src="img/Horizontal_menu_images/Mats/2.jpg" alt="">
              <p>Игровые коврики</p>
            </a>
            <a href="content.php?id=1&id_type=1">
              <img src="img/Horizontal_menu_images/Mats/3.jpg" alt="">
              <p>Офисные коврики</p>
            </a>
          </div>
        </li>
      </ul>
    </nav>
  </section>
  <div id="sign_menu">

    <div class="container" id="container">
      <img id="close_sign_menu1" src="img/delete.svg" alt="" height="200px">
      <img id="close_sign_menu2" src="img/delete.svg" alt="" height="20px">

      <div class="form-container sign-up-container">
        <form action="#" name="signUp">
          <h1>Создать Аккаунт</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span id="sign_up_logs"></span>
          <input name="email" type="email" placeholder="Email" date="required" />
          <input name="phone" type="tel" placeholder="Телефон" />
          <input name="password1" type="password" placeholder="Пароль" />
          <input name="password2" type="password" placeholder="Пароль" />
          <button type="submit">Зарегистрироваться</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="#" name="signIn">
          <h1>Вход</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span id="sign_in_logs">DFDSF</span>
          <input name="email" type="email" placeholder="Email" />
          <input name="password" type="password" placeholder="Пароль" />
          <a href="#" class="forgot-password">Забыли пароль?</a>
          <button type="submit">Вход</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Уже есть аккаунт ?</h1>
            <p>Чтобы продолжить работу с нами, пожалуйста, войдите в Ваш личный профиль</p>
            <button class="ghost" id="signIn">Войти</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Добро пожаловать!</h1>
            <p>Введите свои личные данные и начните путешествие с нами</p>
            <button class="ghost" id="signUp">Регистрация</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="popup_menu">


  </div>


  <script src="js/auntification.js"></script>
  <script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => container.classList.add('right-panel-active'));

    signInButton.addEventListener('click', () => container.classList.remove('right-panel-active'));
  </script>
</body>

</html>



<!-- Коврики 1
Ноутбуки 2
Мышки 3
Наушники 4 
Клавиатура 5 -->