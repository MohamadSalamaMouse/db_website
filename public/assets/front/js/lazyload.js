document.addEventListener("DOMContentLoaded", function() {
    let lazyImages = document.querySelectorAll(".lazyload");

    let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                let lazyImage = entry.target;
                lazyImage.src = lazyImage.dataset.src;
                lazyImage.classList.remove("lazyload");
                lazyImageObserver.unobserve(lazyImage);
            }
        });
    });

    lazyImages.forEach(function(lazyImage) {
        lazyImageObserver.observe(lazyImage);
    });
});
