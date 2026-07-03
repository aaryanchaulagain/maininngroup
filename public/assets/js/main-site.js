(function () {
    var burger = document.querySelector('.av-burger-menu-main a');
    if (burger) {
        burger.addEventListener('click', function (e) {
            e.preventDefault();
            document.documentElement.classList.toggle('inn-main-nav-open');
        });
    }

    var scrollTop = document.getElementById('scroll-top-link');
    if (scrollTop) {
        window.addEventListener('scroll', function () {
            scrollTop.classList.toggle('is-visible', window.scrollY > 280);
        }, { passive: true });
        scrollTop.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
})();
