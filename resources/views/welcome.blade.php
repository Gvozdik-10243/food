<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="header__left-block">
            <div class="header__logo">
                <img src="icons/logo.svg" alt="Логотип">
            </div>
            <nav class="header__links">
                <a href="#" class="header__link">Доставка питания</a>
                <a href="#" class="header__link">Второй пункт</a>
            </nav>
        </div>
        <div class="header__right-block">
            <button class="btn btn_white" data-modal>Связаться с нами</button>
        </div>
        @auth
 
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="{{asset('dashboard')}}">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            <span>Dashboard</span>
                                        </a>
 
                                        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="{{asset('logout')}}">
                                            <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                            </svg>
                                            Logout
                                        </a>
 
                    @else
 
                            <a href="{{ route('login') }}" class="w-full">Login</a>
                    
                    @endauth
    </header>
    <div class="sidepanel">
        <div class="sidepanel__text"><span>Социальные сети</span></div>
        <div class="sidepanel__divider"></div>
        <a href="#" class="sidepanel__icon">
            <img src="icons/instagram.svg" alt="instagram">
        </a>
        <a href="#" class="sidepanel__icon">
            <img src="icons/facebook.svg" alt="facebook">
        </a>
    </div>

    <div class="preview">
        <div class="bgc_blue"></div>
        <div class="container">
            <div class="tabcontainer">
                <div class="tabcontent">
                    <img src="img/tabs/vegy.jpg" alt="vegy">
                    <div class="tabcontent__descr">
                        Меню "Фитнес" - это новый подход к приготовлению блюд: больше свежих овощей и фруктов. Для людей, которые интересуются спортом; активных и здоровых. Это абсолютно новый продукт с оптимальной ценой и высоким качеством!
                    </div>
                </div>
                <div class="tabcontent">
                    <img src="img/tabs/elite.jpg" alt="elite">
                    <div class="tabcontent__descr">
                        Меню “Премиум” - мы используем не только красивый дизайн упаковки, но и качественное исполнение блюд. Красная рыба, морепродукты, фрукты - ресторанное меню без похода в ресторан!                                     
                    </div>
                </div>
                <div class="tabcontent">
                    <img src="img/tabs/post.jpg" alt="post">
                    <div class="tabcontent__descr">
                        Наше специальное “Постное меню” - это тщательный подбор ингредиентов: полное отсутствие продуктов животного происхождения. Полная гармония с собой и природой в каждом элементе! Все будет Ом!                                     
                    </div>
                </div>
                <div class="tabcontent">
                    <img src="img/tabs/vegy.jpg" alt="vegy">
                    <div class="tabcontent__descr">
                        Меню "Сбалансированное" - это соответствие вашего рациона всем научным рекомендациям. Мы тщательно просчитываем вашу потребность в к/б/ж/у и создаем лучшие блюда для вас.
                    </div>
                </div>
                <div class="tabheader">
                    <h3>Выберите стиль питания</h3>
                    <div class="tabheader__items">
                        <div class="tabheader__item tabheader__item_active">Фитнес</div>
                        <div class="tabheader__item">Премиум</div>
                        <div class="tabheader__item">Постное</div>
                        <div class="tabheader__item">Сбалансированное</div>
                    </div>
                </div>
            </div>
            <div class="preview__life">Живи полной жизнью!</div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="offer">
        <div class="bgc_y"></div>
        <div class="container">
            <div class="offer__text">
                <h2 class="title">Что мы можем вам предложить?</h2>
                <div class="offer__descr">
                    Наша основная идея - это правильное питание. Оно может быть простым и вкусным. Мы не просто доставка, мы сервис! Мы взяли на себя все расчеты БЖУ, калорийности, объемов порций и прочие важные, но скучные аспекты. Вам остается только полезная, сытная и правильная еда, которую мы привозим прямо под дверь.
                </div>
            </div>
            <div class="offer__action">
                <button class="btn btn_dark" data-modal>Связаться с нами</button>
            </div>
        </div>
        <div class="container">
            <div class="offer__advantages">
                <h2>Быстро и полезно</h2>
                <div class="offer__advantages-text">
                    Готовка дома занимает много сил, времени и нервов. Мы привозим еду сразу на целый день, и ты можешь действовать так, как тебе удобно, не подстраиваясь ни под кого и будучи уверенным в качестве продукта!
                </div>
                <h2>Правильный рацион</h2>
                <div class="offer__advantages-text">
                    Мы разработали специальное меню, где учтены все нюансы правильного питания, от баланса БЖУ до их приготовления и дробления рациона.
                </div>
            </div>
            <div class="offer__slider">
                <div class="offer__slider-counter">
                    <div class="offer__slider-prev">
                        <img src="icons/left.svg" alt="prev">
                    </div>
                    <span id="current">03</span>
                    /
                    <span id="total">04</span>
                    <div class="offer__slider-next">
                        <img src="icons/right.svg" alt="next">
                    </div>
                </div>
                <div class="offer__slider-wrapper">
                  <div class="offer__slider-inner">
                    <div class="offer__slide">
                        <img src="img/slider/pepper.jpg" alt="pepper">
                    </div>
                    <div class="offer__slide">
                        <img src="img/slider/food-12.jpg" alt="food">
                    </div>
                    <div class="offer__slide">
                        <img src="img/slider/olive-oil.jpg" alt="oil">
                    </div>
                    <div class="offer__slide">
                        <img src="img/slider/paprika.jpg" alt="paprika">
                    </div>
                  </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="calculating">
        <div class="container">
            <h2 class="title">Рассчитаем вашу потребность в калориях?
            </h2>
            <div class="calculating__field">
                <div class="calculating__subtitle">
                    Ваш пол
                </div>
                <div class="calculating__choose" id="gender">
                    <div id="female" class="calculating__choose-item calculating__choose-item_active">Женщина</div>
                    <div id="male" class="calculating__choose-item">Мужчина</div>
                </div>

                <div class="calculating__subtitle">
                    Ваша конституция
                </div>
                <div class="calculating__choose calculating__choose_medium">
                    <input type="text" id="height" placeholder="Введите рост" class="calculating__choose-item">
                    <input type="text" id="weight" placeholder="Введите вес"  class="calculating__choose-item">
                    <input type="text" id="age" placeholder="Введите возраст" class="calculating__choose-item">
                </div>

                <div class="calculating__subtitle">
                    Выберите вашу физическая активность
                </div>
                <div class="calculating__choose calculating__choose_big">
                    <div data-ratio="1.2" id="low" class="calculating__choose-item">Низкая активность </div>
                    <div data-ratio="1.375" id="small"  class="calculating__choose-item calculating__choose-item_active">Невысокая активность</div>
                    <div data-ratio="1.55" id="medium" class="calculating__choose-item">Умеренная активность</div>
                    <div data-ratio="1.725" id="high" class="calculating__choose-item">Высокая активность</div>
                </div>

                <div class="calculating__divider"></div>

                <div class="calculating__total">
                    <div class="calculating__subtitle">
                        Ваша суточная норма калорий:
                    </div>
                    <div class="calculating__result">
                        <span>2700</span> ккал
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="menu">
        <h2 class="title">Наше меню на день</h2>

        <div class="menu__field">
            <div class="container">

            </div>
        </div>
    </div>

    <div class="order">
        <div class="container">
            <div class="title">Заказывай пробный день прямо сейчас!</div>
            <form action="#" class="order__form">
                <input required placeholder="Ваше имя" name="name" type="text" class="order__input">
                <input required placeholder="Ваш номер телефона" name="phone" type="phone" class="order__input">
                <img src="icons/right.svg" alt="right">
                <button class="btn btn_dark btn_min">Перезвонить мне</button>
            </form>
        </div>
    </div>

    <div class="divider"></div>

    <div class="promotion">
        <div class="bgc_y"></div>
        <div class="container">
            <div class="promotion__text">
                <div class="title">Акция для новых клиентов!</div>
                <div class="promotion__descr">
                    Мы ценим каждого клиента и предлагаем вам стать одним из них на очень выгодных условиях. 
                    Каждому, кто закажет доставку питание на неделю, будет предоставлена скидка в размере <span>20%!</span>
                    <br><br>
                    Акция закончится 20 мая в 00:00
                </div>
            </div>
            <div class="promotion__timer">
                <div class="title">Осталось до конца акции:</div>
                <div class="timer">
                    <div class="timer__block">
                        <span id="days">12</span>
                        дней
                    </div>
                    <div class="timer__block">
                        <span id="hours">20</span>
                        часов
                    </div>
                    <div class="timer__block">
                        <span id="minutes">56</span>
                        минут
                    </div>
                    <div class="timer__block">
                        <span id="seconds">20</span>
                        секунд
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="social">
                <div class="subtitle">Мы в социальных сетях:</div>
                <a href="#" class="link">instagram</a>
                <a href="#" class="link">facebook</a>
            </div>
            <div class="pepper">
                <img src="icons/veg.svg" alt="pepper">
            </div>
            <div class="call">
                <div class="subtitle">Или позвоните нам</div>
                <a href="#" class="link">+380678341034</a>
                <a href="#" class="link">+380500941356</a>
            </div>
        </div>
    </footer>

    <div class="modal">
        <div class="modal__dialog">
            <div class="modal__content">
                <form action="#">
                    <div class="modal__close" data-close>&times;</div>
                    <div class="modal__title">Мы свяжемся с вами как можно быстрее!</div>
                    <input required placeholder="Ваше имя" name="name" type="text" class="modal__input">
                    <input required placeholder="Ваш номер телефона" name="phone" type="phone" class="modal__input">
                    <button class="btn btn_dark btn_min">Перезвонить мне</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bundle.js"></script>
</body>
</html>