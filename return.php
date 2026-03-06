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
            <div class="pages__header" data-aos="fade-down">
                <h1>Политика возврата средств</h1>
                <p>
                    Мы стремимся к максимальной прозрачности во взаимодействии с клиентами платформы 
                    <strong><?= $domainTitle ?></strong>. Ниже приведены условия, при которых возможен возврат платежей.
                </p>
            </div>

            <div class="legal-content" data-aos="fade-up">
                
                <div class="legal-card">
                    <h2>Условия для оформления возврата</h2>
                    <p>Вы можете претендовать на возврат средств в следующих ситуациях:</p>
                    <ul class="orbital-list" style="margin-top: 20px;">
                        <li>
                            <span class="dot"></span>
                            <div>
                                <strong>Несоответствие описанию:</strong> Если контент или сессия существенно отличаются от заявленной программы на <strong><?= $fullDomain ?></strong>.
                            </div>
                        </li>
                        <li>
                            <span class="dot"></span>
                            <div>
                                <strong>Технические сбои:</strong> При критических неисправностях на нашей стороне, которые не позволяют получить доступ к AI-инструментам.
                            </div>
                        </li>
                        <li>
                            <span class="dot"></span>
                            <div>
                                <strong>Период охлаждения:</strong> Отказ в течение 14 дней с момента оплаты (при условии отсутствия доступа к основному массиву данных).
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="legal-card">
                    <h2>Процедура запроса</h2>
                    <p>Для инициации возврата на <strong><?= $domainTitle ?></strong> выполните следующие шаги:</p>
                    <ul class="orbital-list" style="margin-top: 20px;">
                        <li><span class="dot"></span> Отправьте письмо на <a href="mailto:support@<?= $fullDomain ?>" class="contact-link">support@<?= $fullDomain ?></a>.</li>
                        <li><span class="dot"></span> Укажите в теме: «Запрос на возврат средств».</li>
                        <li><span class="dot"></span> Опишите причину и приложите данные, использованные при регистрации.</li>
                        <li><span class="dot"></span> Мы рассмотрим запрос и ответим вам в течение 3-х рабочих дней.</li>
                    </ul>
                </div>

                <div class="legal-card">
                    <h2>Сроки и способ возврата</h2>
                    <p>
                        После одобрения возврат производится в течение <strong>7–14 рабочих дней</strong> тем же способом, которым была совершена оплата. 
                        Фактический срок зачисления зависит от регламента вашего банка в <strong>Германии</strong> или стране вашего пребывания в ЕС.
                    </p>
                </div>

                <div class="legal-card">
                    <h2>Исключения и ограничения</h2>
                    <ul class="orbital-list">
                        <li><span class="dot"></span> Запрос подан позже 14 дней после покупки.</li>
                        <li><span class="dot"></span> Изучено или скачано более 50% материалов экспертной программы.</li>
                        <li><span class="dot"></span> Технические проблемы вызваны софтом или соединением на стороне пользователя.</li>
                    </ul>
                </div>

                <div class="legal-card legal-card--highlight">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем финансовым вопросам и условиям консультаций обращайтесь в службу поддержки:</p>
                    
                    <div class="contact-footer-info" style="margin-top: 25px;">
                        <div class="info-item">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:+493011414912">+49 30 1141 4912</a>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Friedrichstraße 100, 10117 Berlin</span>
                        </div>
                    </div>
                </div>

                <div class="pages-footer">
                    <p>Последнее обновление: Март 2026</p>
                    <p>© <?= $domainTitle ?> — Прозрачность и инновации.</p>
                </div>
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