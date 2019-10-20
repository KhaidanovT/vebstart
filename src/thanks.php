<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ремонт квартир</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-block">
        <div class="navbar__logo">
          <img src="img/logo.png" alt="Логотип">
        </div>
        <div class="navbar__info">
          <div class="navbar__contacts">
            <span class="navbar__address">
              Калуга, Москва, МО
            </span>
            <a href="tel:+7(495)42-251-31" class="navbar__phone">+7(495)42-251-31</a>
          </div>
          <button class="button navbar__button" id="button">
            Перезвоните мне
          </button>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text">
            <h1 class="hero-text__title">
              Спасибо за заявку!
            </h1>
            <span class="hero-text__subtitle">
              Мы перезвоним вам в течении 15 минут
            </span>
            <ul class="hero-list">
              <li class="hero-list__item">
                <img class="hero-list__image" src="img/hero-1/paint-board-and-brush-1.jpg" alt=""></img>
                <span class="hero-list__text">Точно соблюдаем сроки</span>
              </li>
              <li class="hero-list__item">
                <img class="hero-list__image" src="./img/hero-1/calculator-1.jpg" alt=""></img>
                <span class="hero-list__text">Расчитаем смету на работу и материалы в день обращения</span>
              </li>
              <li class="hero-list__item">
                <img class="hero-list__image" src="./img/hero-1/paint-board-and-brush.png" alt=""></img>
                <span class="hero-list__text">Предложем более 100 вариантов исполнения дизайна вашего жилья</span>
              </li>
            </ul>
          </div>
          <div class="hero-image">
            <img src="./img/hero-1/hero-img.png" alt="План квартиры">
          </div>
        </div>
      </div>
    </section>

   
  </main>


  <div class="modal" id="modal">
    <div class="modal-dialog">
      <div class="modal-answer">
        <button class="modal-answer__close" id="close">&times;</button>
        <h2 class="modal-title">Узнайте точную стоимость ремонта по телефону</h2>
        <span class="modal-subtitle">Заполните поля ниже - мы свяжимся с вами позже</span>
        <input type="text" class="input offer__input" placeholder="Ваше имя">
        <input type="tel" class="input offer__input" placeholder="Ваш телефон">
        <button class="button modal-button">Узнайте стоимость</button>
        <span class="modal-suptitle">Или вы можете перезвоните нам сами по телефону</span>
        <h2 class="modal-phone">+7 (8182) 42-51-31</h2>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#brif-form').validate({
        rules: {
          username: {
            required: true,
            minlength: 2
          }
        },
        email: {
          required: true
        },
        messages: {
          name: {
            required: "Укажите имя",
            minlength: jQuery.validator.format("Осталось символов: {0}")
          }
        }
      });
      $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.arrows__left'),
        nextArrow: $('.arrows__right'),
      });
    });
  </script>

</body>

</html>