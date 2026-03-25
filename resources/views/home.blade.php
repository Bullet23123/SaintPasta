<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SaintPasta</title>
</head>

<body>
    <header>
        <div class="shapka">
            <div class="logo">
                <h1>
                    <h1 class="fatty">SAINT P</h1>ASTA
                </h1>
            </div>
            <ul>
                <li><a href="#NS">О компании</a></li>
                <li><a href="#GH">Паста короткая</a></li>
                <li><a href="#GH">Паста длинная</a></li>
                <li><a href="#67">Доставка</a></li>
                <li><a href="#DAun">Контакты</a></li>
            </ul>
            <div class="num">
                <div class="karamba">

                    <i class="bi bi-telephone-fill"></i>
                    <p class="phone-number">+7 905 222 42 32</p>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <p class="callback">Заказать звонок</p>
            </div>

        </div>
    </header>
    <main>
        <div class="main2">
            <h2 id="NS">Наша команда</h2>
            <div class="spis">
                <ul>
                    <li><img src="" alt=""></li>
                    <li><img src="" alt=""></li>
                    <li><img src="" alt=""></li>
                </ul>
                <img src="" alt="">
                <pre>Евгений Мальцев
                    Бренд-шеф
                </pre>
                <pre>Безумно любит своё дело. Каждый день он замешивает
                     свежее тесто и заготавливает лучшие начинки для
                    создания той самой итальянской классики.

                    Каждый понедельник Евгений представляет
                    экспериментальную пасту недели, вкус которой не станет
                    серийным. Следите за новостями, успейте попробовать.</pre>
                <button>
                    ⫷
                </button>
                <button>
                    ⫸
                </button>
            </div>
        </div>
        <div class="amin3">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
        <div class="main4">
            <h2 id="GH">Наша продукция</h2>
            <div class="btnS">
                <input type="radio" placeholder="Паста короткая">
                <input type="radio" placeholder="Паста длинная">
            </div>
            <ul>
                <select name="" id="">
                    <option value="0" hidden selected disabled>Форма</option>
                </select>
                <select name="" id="">
                    <option value="0" hidden selected disabled>Цвет</option>
                </select>
                <select name="" id="">
                    <option value="0" hidden selected disabled>Характеристик</option>
                </select>
                <select name="" id="">
                    <option value="0" hidden selected disabled>Основной ингридиент</option>
                </select>
            </ul>
            <div class="cards" style="display: flex;">
                <div class="card">
                    <img src="" alt="">
                    <p>Казарече из печеной паприки</p>
                    <pre>Мука из твердых сортов пшеницы, яйцо, оливковое масло, печеная паприка. 350 гр</pre>
                    <p>290p.</p>
                    <button>Купить</button>
                    <a href="">Подробнее</a>
                </div>
                <div class="card">
                    <img src="" alt="">
                    <p>Мачерони из кукурузной муки</p>
                    <pre>Кукурзная мука без глютена, вода, оливковое масло. 350 гр</pre>
                    <p>290p.</p>
                    <button>Купить</button>
                    <a href="">Подробнее</a>
                </div>
                <div class="card">
                    <img src="" alt="">
                    <p>Мачерони со свеклой</p>
                    <pre>Мука из твердых сортов пшеницы, яйцо, печеная свекла. 350 гр</pre>
                    <p>290p.</p>
                    <button>Купить</button>
                    <a href="">Подробнее</a>
                </div>
                <div class="card">
                    <img src="" alt="">
                    <p>Мачерони с куркумой</p>
                    <pre>Мука из твердых сортов пшеницы, яйцо, оливковое масло, куркума. 350 гр</pre>
                    <p>290p.</p>
                    <button>Купить</button>
                    <a href="">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="main5">
            <h2>О нас</h2>
            <pre>Мы не используем никаких консервантов или
                искусственных красителей. Только натуральные свежие
                продукты, прошедшие строгий контроль качества.</pre>
            <pre>
                Мы производим настоящую домашнюю пасту (pasta fresca)
                из лучшего итальянского сырья на лучшем итальянском
                оборудовании, внимательно соблюдая оригинальные
                рецептуры и строго контролируя качество выпускаемой
                продукции.
            </pre>
            <a href="#"><button>Подробнее →</button></a>
        </div>
        <div class="main6">
            <img src="" alt="">
            <div class="carambole">
                <h2 id="67">Доставка</h2>
                <ul>
                    <p>1500 ₽ Минимальная сумма заказа </p>
                    <br>
                    <p>Заказы, оформленные до 18:00, доставляем
                        на следующий день. </p>
                    <br>
                    <p>Заказы, оформленные после 18:00 доставляем
                        через день.</p>
                </ul>
            </div>
        </div>
    </main>
    <footer class="main-footer">
        <div class="form-bg">
            <div class="container">
                <div class="form-box">
                    <h2>Остались вопросы?</h2>
                    <p>Заполните форму и наш менеджер свяжется с вами</p>
                    <form>
                        <input type="text" placeholder="Имя">
                        <input type="text" placeholder="Телефон">
                        <input type="email" placeholder="E-mail">
                        <button type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container footer-flex">
                <div class="logo">SAINT <span>PASTA</span></div>
                <div class="socials">
                    <a href="#">VK</a> <a href="#">FB</a> <a href="#">IG</a>
                </div>
                <div class="footer-phone">
                    +7 351 233-06-01
                    <a href="#">Обратный звонок</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>