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
                <h1>Политика обработки данных</h1>
                <p>
                    Мы ценим вашу конфиденциальность и безопасность. Настоящая политика платформы 
                    <strong><?= $domainTitle ?></strong> объясняет, как мы бережно работаем с вашей информацией.
                </p>
            </div>

            <div class="legal-content" data-aos="fade-up">
                
                <div class="legal-card">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика обработки персональных данных (далее — «Политика») определяет порядок и условия обработки данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и устанавливает меры по обеспечению безопасности этих данных в соответствии с <strong>GDPR</strong>.
                    </p>
                    <p style="margin-top: 15px;">
                        Важнейшей целью Оператор считает соблюдение прав и свобод человека при обработке его персональных данных и защиту права на неприкосновенность частной жизни.
                    </p>
                </div>

                <div class="legal-card">
                    <h2>2. Основные понятия</h2>
                    <ul class="orbital-list">
                        <li>
                            <span class="dot"></span>
                            <div><strong>Веб-сайт</strong> — совокупность материалов по адресу <strong><?= $fullDomain ?></strong>.</div>
                        </li>
                        <li>
                            <span class="dot"></span>
                            <div><strong>Пользователь</strong> — любой посетитель нашего AI-блога.</div>
                        </li>
                        <li>
                            <span class="dot"></span>
                            <div><strong>Обработка данных</strong> — любые действия, от сбора до удаления, совершаемые Оператором.</div>
                        </li>
                    </ul>
                </div>

                <div class="legal-card">
                    <h2>3. Данные для обработки</h2>
                    <p>Оператор может обрабатывать следующие категории данных:</p>
                    <ul class="orbital-list" style="margin-top: 15px;">
                        <li><span class="dot"></span> ФИО и контактная информация.</li>
                        <li><span class="dot"></span> Email (для связи с поддержкой).</li>
                        <li><span class="dot"></span> Номера телефонов (валидация по стандартам Германии).</li>
                        <li><span class="dot"></span> Автоматические данные: IP-адрес, файлы «cookie» и данные аналитики.</li>
                    </ul>
                </div>

                <div class="legal-card">
                    <h2>4. Наши цели</h2>
                    <p>Мы используем ваши данные для:</p>
                    <ul class="orbital-list" style="margin-top: 15px;">
                        <li><span class="dot"></span> Идентификации на консалтинговой платформе.</li>
                        <li><span class="dot"></span> Установления обратной связи по вашим запросам.</li>
                        <li><span class="dot"></span> Улучшения качества работы нашего AI-ассистента.</li>
                    </ul>
                </div>

                <div class="legal-card legal-card--highlight">
                    <h2>5. Безопасность (GDPR)</h2>
                    <p>
                        Оператор принимает все возможные технические меры для защиты данных от неправомерного доступа. Ваши данные <strong>никогда не будут переданы третьим лицам</strong>, за исключением случаев, предусмотренных законодательством ЕС.
                    </p>
                </div>

                <div class="legal-card">
                    <h2>6. Контакты и отзыв согласия</h2>
                    <p>По любым вопросам вы можете связаться с нами напрямую:</p>
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
                    <p>© <?= $domainTitle ?> — Инновации, защищенные технологиями.</p>
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