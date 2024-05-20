document.addEventListener("DOMContentLoaded", function () {
    // Add the class to body elements after the terms-accepted class is added
    document.body.addEventListener('classChanged', function () {
        document.querySelectorAll('body.terms-accepted > :not(#termsOfServiceContainer):not(.modal)').forEach(function (el) {
            el.classList.add('visible');
        });
    });
});

// Utility function to detect class change
(function () {
    var observer = new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
            if (mutation.attributeName === 'class') {
                var event = new Event('classChanged');
                mutation.target.dispatchEvent(event);
            }
        });
    });

    var config = { attributes: true };
    observer.observe(document.body, config);
})();
