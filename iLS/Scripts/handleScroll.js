// handleScroll.js

document.addEventListener("DOMContentLoaded", function () {
    var containers = document.querySelectorAll('.container');

    function handleScroll() {
        containers.forEach(function (container) {
            var containerPosition = container.getBoundingClientRect().top;
            var screenPosition = window.innerHeight / 1.5;

            if (containerPosition < screenPosition) {
                container.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", handleScroll);
});
