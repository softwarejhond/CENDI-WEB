   <style>
        .valentine-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
    background: #ffffff; /* Fondo blanco */
    z-index: -1;
}

.valentine-background span {
    position: absolute;
    display: block;
    font-size: 30px;
    animation: floatUp 8s linear infinite;
    opacity: 0.8;
}

@keyframes floatUp {
    0% {
        transform: translateY(100vh) scale(0.8) rotate(0deg);
        opacity: 0;
    }
    40% {
        opacity: 1;
    }
    100% {
        transform: translateY(-10vh) scale(1.2) rotate(360deg);
        opacity: 0;
    }
}

/* Posiciones y velocidades aleatorias */
.valentine-background span:nth-child(1) { left: 10%; animation-duration: 7s; font-size: 28px; }
.valentine-background span:nth-child(2) { left: 25%; animation-duration: 10s; font-size: 34px; }
.valentine-background span:nth-child(3) { left: 40%; animation-duration: 6s; font-size: 30px; }
.valentine-background span:nth-child(4) { left: 55%; animation-duration: 11s; font-size: 38px; }
.valentine-background span:nth-child(5) { left: 70%; animation-duration: 8s; font-size: 32px; }
.valentine-background span:nth-child(6) { left: 85%; animation-duration: 9s; font-size: 36px; }
.valentine-background span:nth-child(7) { left: 50%; animation-duration: 12s; font-size: 29px; }
.valentine-background span:nth-child(8) { left: 15%; animation-duration: 9s; font-size: 33px; }

    </style>
    <div class="valentine-background">
    <span>❤️</span>
    <span>💌</span>
    <span>💘</span>
    <span>🌹</span>
    <span>💕</span>
    <span>💖</span>
    <span>💞</span>
    <span>❤️</span>
</div>
