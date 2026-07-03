(function () {
    var hero = document.querySelector('[data-loan-hero]');
    if (!hero) return;

    var slides = Array.from(hero.querySelectorAll('[data-loan-hero-slide]'));
    var dots = Array.from(hero.querySelectorAll('[data-loan-hero-dot]'));
    var prevBtn = hero.querySelector('[data-loan-hero-prev]');
    var nextBtn = hero.querySelector('[data-loan-hero-next]');
    var current = 0;
    var timer;
    var delay = 5000;

    function restartKenBurns(slide) {
        var bg = slide && slide.querySelector('.loan-hero__bg');
        if (!bg) return;
        bg.style.animation = 'none';
        void bg.offsetHeight;
        bg.style.animation = '';
    }

    function goTo(i, force) {
        if (!slides.length) return;
        var next = (i + slides.length) % slides.length;
        if (next === current && !force) return;

        slides[current].classList.remove('is-active');
        slides[current].setAttribute('aria-hidden', 'true');
        if (dots[current]) {
            dots[current].classList.remove('is-active');
            dots[current].setAttribute('aria-selected', 'false');
        }

        current = next;

        slides[current].classList.add('is-active');
        slides[current].setAttribute('aria-hidden', 'false');
        if (dots[current]) {
            dots[current].classList.add('is-active');
            dots[current].setAttribute('aria-selected', 'true');
        }

        restartKenBurns(slides[current]);
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    function resetTimer() {
        clearInterval(timer);
        timer = setInterval(next, delay);
    }

    dots.forEach(function (dot, n) {
        dot.addEventListener('click', function () {
            goTo(n);
            resetTimer();
        });
    });

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            prev();
            resetTimer();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            next();
            resetTimer();
        });
    }

    hero.addEventListener('mouseenter', function () { clearInterval(timer); });
    hero.addEventListener('mouseleave', resetTimer);

    goTo(0, true);
    resetTimer();
})();

(function () {
    var wrap = document.getElementById('loan-scroll-top');
    var btn = document.getElementById('toTop');
    if (wrap && btn) {
        window.addEventListener('scroll', function () {
            wrap.classList.toggle('is-visible', window.scrollY > 280);
        }, { passive: true });
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
})();
