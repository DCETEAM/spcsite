<style>
    html:not(.loaded) body > *:not(#initial-loader) {
        display: none !important;
    }

    #initial-loader {
        position: fixed;
        inset: 0;
        background: #eaf8ff;
        z-index: 999999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 0.5s ease;
    }

    #initial-loader.fade-out {
        opacity: 0;
        pointer-events: none;
    }

    #initial-loader .spinner {
        width: 60px;
        height: 60px;
        border: 5px solid #b3e5fc;
        border-top: 5px solid #03a9f4;
        border-radius: 50%;
        animation: initial-loader-spin 1s linear infinite;
    }

    @keyframes initial-loader-spin {
        to { transform: rotate(360deg); }
    }
</style>
