(function () {
    var toggler = document.querySelector('.side-menu__toggler');
    var navBox = document.querySelector('.main-nav__navigation-box');
    if (toggler && navBox) {
        toggler.addEventListener('click', function (e) {
            e.preventDefault();
            navBox.classList.toggle('is-open');
            toggler.classList.toggle('is-active');
        });
    }

    var scrollTop = document.querySelector('.scroll-to-target.scroll-to-top');
    if (scrollTop) {
        window.addEventListener('scroll', function () {
            scrollTop.classList.toggle('visible', window.scrollY > 200);
        }, { passive: true });
        scrollTop.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    var slider = document.querySelector('.testimonials-slider');
    if (slider) {
        var slides = Array.from(slider.querySelectorAll('.slide-item'));
        var pagers = document.querySelectorAll('#testimonials-slider-pager .pager-item');
        var index = 0;
        var timer;

        function show(i) {
            if (!slides.length) return;
            index = (i + slides.length) % slides.length;
            slides.forEach(function (el, n) {
                el.style.display = n === index ? 'block' : 'none';
            });
            pagers.forEach(function (el) {
                var slideIndex = parseInt(el.getAttribute('data-slide-index') || '0', 10) - 1;
                el.classList.toggle('active', slideIndex === index);
            });
        }

        show(0);
        pagers.forEach(function (el) {
            el.addEventListener('click', function (e) {
                e.preventDefault();
                var slideIndex = parseInt(el.getAttribute('data-slide-index') || '1', 10) - 1;
                show(slideIndex);
                resetTimer();
            });
        });

        function resetTimer() {
            clearInterval(timer);
            timer = setInterval(function () { show(index + 1); }, 5000);
        }
        resetTimer();
    }
})();
