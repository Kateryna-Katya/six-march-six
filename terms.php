<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Технологии AI-ботов нового поколения
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cdefs%3E%3ClinearGradient id='g' x1='0' y1='0' x2='32' y2='32' gradientUnits='userSpaceOnUse'%3E%3Cstop stop-color='%236366f1'/%3E%3Cstop offset='1' stop-color='%2310b981'/%3E%3C/linearGradient%3E%3C/defs%3E%3Ccircle cx='16' cy='16' r='14' fill='none' stroke='url(%23g)' stroke-width='3'/%3E%3Ccircle cx='16' cy='16' r='6' fill='url(%23g)'/%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <div class="logo__icon"></div>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#services" class="nav__link">Решения</a></li>
                    <li><a href="./#process" class="nav__link">Процесс</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" id="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1>Условия использования</h1>

            <p>
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь», «Студент») и <strong><?= $domainTitle ?></strong>
                (далее — «Школа», «мы», «нас»). Пожалуйста, внимательно
                ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                образовательные услуги, вы подтверждаете свое полное и безоговорочное согласие с
                данными Условиями. Если вы не согласны, вы должны немедленно
                прекратить использование сайта.
            </p>

            <h2>1. Предмет Соглашения</h2>
            <p>
                Школа предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                инновационным учебным материалам, практическим заданиям, экспертным консультациям и AI-инструментам 
                для реализации реальных задач (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                взаимодействия Пользователя с образовательной платформой.
            </p>

            <h2>2. Обязанности и права Пользователя</h2>
            <p>
                Вы обязуетесь использовать сайт исключительно в законных и личных
                целях профессионального развития. При использовании платформы <strong><?= $domainTitle ?></strong>
                <strong>запрещается</strong>:
            </p>
            <ul>
                <li>
                    Публиковать, передавать или распространять любую информацию,
                    которая является незаконной, нарушает авторские права Школы или
                    интеллектуальную собственность других студентов.
                </li>
                <li>
                    Предпринимать любые действия, которые могут нарушить нормальную
                    работу сайта, его безопасность или привести к перегрузке
                    цифровой инфраструктуры <strong><?= $domainTitle ?></strong> в Европе.
                </li>
                <li>
                    Копировать, перепродавать или тиражировать методики и программные решения, 
                    предоставленные в рамках обучения, без предварительного 
                    письменного разрешения.
                </li>
                <li>
                    Выдавать себя за другое лицо или предоставлять недостоверную
                    информацию о своем опыте при регистрации на программы обучения.
                </li>
            </ul>

            <h2>3. Интеллектуальная собственность</h2>
            <p>
                Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая учебные программы, графику,
                видео-лекции, логотипы и уникальный программный код (далее — «Контент»), является объектом интеллектуальной
                собственности Школы. Вам предоставляется ограниченная, персональная
                лицензия на использование Контента исключительно для личного обучения и карьерного роста. 
                Любое коммерческое использование Контента без согласования строго запрещено.
            </p>

            <h2>4. Ограничение ответственности и отказ от гарантий</h2>
            <p>
                Образовательные услуги и материалы предоставляются по принципу «как
                есть» (as is). Мы не даем гарантий, что использование платформы будет 
                бесперебойным, хотя прилагаем все усилия для стабильной работы 24/7. 
                Школа не гарантирует абсолютную точность данных в контексте стремительно 
                меняющегося IT-рынка в <strong>Италии</strong> и странах ЕС.
            </p>
            <p>
                <strong><?= $domainTitle ?></strong> не несет ответственности за любые прямые или косвенные
                убытки, или за отсутствие ожидаемого карьерного результата, так как успех обучения 
                напрямую зависит от личных усилий и компетенций Пользователя.
            </p>

            <h2>5. Изменения в Условиях использования</h2>
            <p>
                Мы оставляем за собой право в любое время изменять настоящие Условия для соответствия 
                новым технологиям или законам ЕС. Изменения вступают в силу с момента их публикации. 
                Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> после внесения 
                изменений означает ваше согласие с новой редакцией Соглашения.
            </p>

            <h2>6. Разрешение споров</h2>
            <p>
                Все споры стороны будут стремиться разрешить путем переговоров с нашей экспертной поддержкой.
                В случае невозможности достижения согласия, спор подлежит рассмотрению в соответствии 
                с действующим законодательством по месту регистрации Оператора в <strong>Италии (Рим)</strong>.
            </p>

            <h2>7. Контактная информация</h2>
            <p>
                Если у вас возникли вопросы, связанные с использованием платформы,
                пожалуйста, свяжитесь с нами:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+390697638629">+39 06 9763 8629</a><br>
                Адрес: Via dei Condotti, 10, 00187 Roma RM, Italy
            </p>

            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026. Предложение активно в странах ЕС.</p>
            </div>
        </div>
    </section>
</main>
    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo logo--footer">
                        <div class="logo__icon"></div>
                        <span class="logo__text">
                            <?= $domainTitle ?>
                        </span>
                    </a>
                    <p class="footer__desc">
                        Передовая цифровая инфраструктура для автоматизации вашего бизнеса через AI-инструменты.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__list">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#services">Решения</a></li>
                        <li><a href="./#process">Процесс</a></li>
                        <li><a href="./#blog">Блог</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__list">
                        <li><a href="./privacy.php">Privacy Policy</a></li>
                        <li><a href="./cookies.php">Cookies Policy</a></li>
                        <li><a href="./terms.php">Terms of Service</a></li>
                        <li><a href="./return.php">Return Policy</a></li>
                        <li><a href="./disclaimer.php">Disclaimer</a></li>
                        <li><a href="./contact.php">Contact Us</a></li>
                        <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты (Германия)</h4>
                    <ul class="footer__contacts">
                        <li><i class="fa-solid fa-phone"></i> <a href="tel:+493011414912">+49 30 1141 4912</a></li>
                        <li><i class="fa-solid fa-envelope"></i> <a href="mailto:support@<?= $fullDomain ?>">support@
                                <?= $fullDomain ?>
                            </a></li>
                        <li><i class="fa-solid fa-location-dot"></i> <span>Friedrichstraße 100, 10117 Berlin,
                                Germany</span></li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy;
                   2026
                    <?= $domainTitle ?>. Платформа года. Все права защищены.
                </p>
            </div>
        </div>
    </footer>
<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu__inner">
        <ul class="mobile-menu__list">
            <li><a href="./#hero" class="mobile-link">Главная</a></li>
            <li><a href="./#services" class="mobile-link">Решения</a></li>
            <li><a href="./#process" class="mobile-link">Процесс</a></li>
            <li><a href="./#blog" class="mobile-link">Блог</a></li>
            <li><a href="./#faq" class="mobile-link">FAQ</a></li>
            <li><a href="./#contact" class="mobile-link mobile-link--btn">Связаться</a></li>
        </ul>
    </div>
</div>

<div id="cookiePopup" class="cookie-popup">
    <div class="cookie-popup__inner">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="acceptCookies" class="btn btn--primary">Принять</button>
    </div>
</div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="script.js"></script>
</body>

</html>