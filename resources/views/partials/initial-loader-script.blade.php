<script>
    window.addEventListener('load', function () {
        document.documentElement.classList.add('loaded');

        const loader = document.getElementById('initial-loader');
        if (!loader) return;

        loader.classList.add('fade-out');
        loader.addEventListener('transitionend', function () {
            loader.remove();
        }, { once: true });
    });
</script>
