/**
 * Project: <?= $domainTitle ?> (six-march-six)
 * Features: AOS, Anime.js, Rellax, AJAX Form, Cookie Logic
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // === 1. ИНИЦИАЛИЗАЦИЯ БИБЛИОТЕК ===
    
    // AOS: Анимация появления при скролле
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-out-cubic',
        offset: 100
    });

    // Rellax: Параллакс эффект для сфер
    // Проверка наличия библиотеки перед инициализацией
    if (typeof Rellax !== 'undefined') {
        const rellax = new Rellax('.rellax', {
            center: true
        });
    }

    // === 2. НАВИГАЦИЯ И ХЕДЕР ===

    const header = document.getElementById('header');
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    // Эффект хедера при скролле
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // Мобильное меню (Toggle)
    const toggleMenu = () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        
        // Анимация появления ссылок в меню через Anime.js
        if (mobileMenu.classList.contains('active')) {
            anime({
                targets: '.mobile-link',
                opacity: [0, 1],
                translateX: [50, 0],
                delay: anime.stagger(100, {start: 300}),
                easing: 'easeOutExpo'
            });
        }
    };

    burger.addEventListener('click', toggleMenu);
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // Плавный скролл для всех якорных ссылок
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // === 3. ДЕКОРАТИВНЫЕ АНИМАЦИИ (Anime.js) ===

    // Левитация главных сфер (Hero и Contact)
    anime({
        targets: '.hero__main-circle, .contact__orb, .faq__orb',
        translateY: [-15, 15],
        duration: 5000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutQuad'
    });

    // Пульсация узлов в секции "Процесс"
    anime({
        targets: '.node__circle',
        boxShadow: [
            { value: '0 0 0 0px rgba(99, 102, 241, 0.4)' },
            { value: '0 0 0 20px rgba(99, 102, 241, 0)' }
        ],
        easing: 'easeInOutQuad',
        duration: 2500,
        loop: true,
        delay: anime.stagger(800)
    });

    // Плавание "пузырей" в блоге
    anime({
        targets: '.blog-item',
        translateY: () => anime.random(-25, 25),
        translateX: () => anime.random(-15, 15),
        duration: () => anime.random(3000, 6000),
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine'
    });

    // === 4. FAQ АККОРДЕОН ===

    const accordionBtns = document.querySelectorAll('.accordion__btn');
    accordionBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const currentItem = btn.parentElement;
            const isOpen = currentItem.classList.contains('active');

            // Закрываем все открытые
            document.querySelectorAll('.accordion__item').forEach(item => {
                item.classList.remove('active');
            });

            // Если не был открыт — открываем
            if (!isOpen) {
                currentItem.classList.add('active');
            }
        });
    });

    // === 5. ФОРМА КОНТАКТОВ И ВАЛИДАЦИЯ ===

    const contactForm = document.getElementById('contactForm');
    const phoneInput = document.getElementById('phoneInput');
    const captchaQuestion = document.getElementById('captchaQuestion');
    const captchaInput = document.getElementById('captchaInput');
    const formSuccess = document.getElementById('formSuccess');

    // Генерация капчи
    let num1 = Math.floor(Math.random() * 10) + 1;
    let num2 = Math.floor(Math.random() * 10) + 1;
    let captchaSum = num1 + num2;
    if (captchaQuestion) captchaQuestion.innerText = `${num1} + ${num2}`;

    // Валидация телефона (только цифры и +)
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^0-9+]/g, '');
        });
    }

    // Обработка отправки (AJAX Simulation)
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Проверка капчи
            if (parseInt(captchaInput.value) !== captchaSum) {
                alert('Пожалуйста, решите математический пример правильно.');
                captchaInput.focus();
                return;
            }

            // Имитация загрузки
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerText;
            submitBtn.innerText = 'Обработка...';
            submitBtn.disabled = true;

            // Симуляция задержки сервера
            setTimeout(() => {
                // Показываем сообщение об успехе с анимацией
                anime({
                    targets: '#formSuccess',
                    begin: () => { formSuccess.style.display = 'flex'; },
                    opacity: [0, 1],
                    scale: [0.8, 1],
                    duration: 600,
                    easing: 'easeOutBack'
                });

                contactForm.reset();
                submitBtn.innerText = originalText;
                submitBtn.disabled = false;
                
                // Скрываем успех через 5 секунд
                setTimeout(() => {
                    anime({
                        targets: '#formSuccess',
                        opacity: 0,
                        duration: 500,
                        easing: 'linear',
                        complete: () => { formSuccess.style.display = 'none'; }
                    });
                }, 5000);

            }, 1500);
        });
    }

    // === 6. COOKIE POPUP ===

    const cookiePopup = document.getElementById('cookiePopup');
    const acceptCookies = document.getElementById('acceptCookies');

    // Показываем, если еще не принимали
    if (!localStorage.getItem('cookies_accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 3000);
    }

    if (acceptCookies) {
        acceptCookies.addEventListener('click', () => {
            localStorage.setItem('cookies_accepted', 'true');
            cookiePopup.classList.remove('active');
        });
    }

    // === 7. ТЕХНОЛОГИЧЕСКИЙ ЭФФЕКТ ДЛЯ ЛОГО (Anime.js) ===
    anime({
        targets: '.logo__icon',
        rotate: '1turn',
        duration: 3000,
        easing: 'easeInOutQuart',
        loop: true,
        delay: 5000
    });

});