<?php
// Animación Día de la Mujer - componente reutilizable
?>

<!-- Animación: Lluvia de pétalos (canvas) -->
<canvas id="women-day-canvas" aria-hidden="true"></canvas>

<style>
/* canvas overlay ocupa toda la pantalla, no captura eventos */
#women-day-canvas{position:fixed;inset:0;width:100%;height:100%;pointer-events:none;z-index:999;mix-blend-mode:screen}
@media (prefers-reduced-motion: reduce){#women-day-canvas{display:none}}
</style>

<script>
(function(){
  const canvas = document.getElementById('women-day-canvas');
  if(!canvas) return;

  const ctx = canvas.getContext('2d');
  let W = canvas.width = window.innerWidth;
  let H = canvas.height = window.innerHeight;
  let particles = [];
  let running = true;
  let lastTime = 0;

  // Performance: decide number by width
  function getCount(){
    if(W < 480) return 18; // mobiles
    if(W < 900) return 32; // tablets
    return 54; // desktop
  }

  // colores vibrantes que se ven bien sobre fondo blanco
  const colors = ['#d1006c','#ff006e','#ff3ebb','#aa00ff','#ff0090','#e10094'];

  function rand(min,max){return Math.random()*(max-min)+min}

  function makePetal(){
    const size = rand(14,40);
    const x = rand(-0.1*W, W+0.1*W);
    const y = rand(-H, 0);
    const speedY = rand(15, 80) / 60; // más lento hacia abajo
    const speedX = rand(-0.4,0.4); // menos deriva horizontal
    const angle = rand(0, Math.PI*2);
    const spin = rand(-0.04,0.04);
    const color = colors[Math.floor(Math.random()*colors.length)];
    const tilt = rand(-0.6,0.6);
    // choose shape type: 0=petal,1=heart,2=rose,3=female
    const type = Math.floor(rand(0,4));
    return {x,y,size,speedY,speedX,angle,spin,color,tilt,type};
  }

  function init(){
    particles = [];
    const count = getCount();
    for(let i=0;i<count;i++) particles.push(makePetal());
  }

  function resize(){
    W = canvas.width = window.innerWidth;
    H = canvas.height = window.innerHeight;
    init();
  }

  window.addEventListener('resize', resize);

  function drawPetal(p){
    ctx.save();
    ctx.translate(p.x, p.y);
    ctx.rotate(p.angle);
    if(p.type === 1){
      // corazón
      const s = p.size;
      ctx.beginPath();
      ctx.moveTo(0, -s/4);
      ctx.bezierCurveTo(s/2, -s/2, s, s/3, 0, s);
      ctx.bezierCurveTo(-s, s/3, -s/2, -s/2, 0, -s/4);
      ctx.closePath();
      ctx.fillStyle = p.color;
      ctx.fill();
    } else if(p.type === 2){
      // rostro de rosa simple usando emoji
      ctx.font = p.size + 'px serif';
      ctx.textAlign = 'center';
      ctx.textBaseline = 'middle';
      ctx.fillStyle = p.color;
      ctx.fillText('🌹', 0, 0);
    } else if(p.type === 3){
      // símbolo femenino
      ctx.font = p.size + 'px serif';
      ctx.textAlign = 'center';
      ctx.textBaseline = 'middle';
      ctx.fillStyle = p.color;
      ctx.fillText('♀', 0, 0);
    } else {
      // pétalo tradicional
      const w = p.size; const h = p.size*0.6;
      ctx.beginPath();
      ctx.moveTo(0, -h*2);
      ctx.quadraticCurveTo(w*0.6, -h*1.8, 0, h);
      ctx.quadraticCurveTo(-w*0.6, -h*1.8, 0, -h*2);
      ctx.closePath();
      const g = ctx.createLinearGradient(-w/2,-h/2,w/2,h/2);
      g.addColorStop(0,'rgba(255,255,255,0.65)');
      g.addColorStop(0.25,p.color);
      g.addColorStop(1,'rgba(255,255,255,0.05)');
      ctx.fillStyle = g;
      ctx.fill();
    }
    ctx.restore();
  }

  function step(now){
    if(!running) return;
    const dt = Math.min(40, now - lastTime); // cap delta
    lastTime = now;
    ctx.clearRect(0,0,W,H);
    for(let i=0;i<particles.length;i++){
      const p = particles[i];
      p.angle += p.spin * (dt/16);
      p.x += p.speedX * (dt/16) * 1.2; // ligera deriva
      p.y += p.speedY * (dt/16) * 1.2 + Math.sin((now/500)+i) * 0.2; // más lento motión vertical
      // slight horizontal sway
      p.x += Math.sin((now/1000) + i) * 0.2;
      drawPetal(p);
      // recycle
      if(p.y - p.size > H || p.x < -0.2*W || p.x > W + 0.2*W){
        particles[i] = makePetal();
        particles[i].y = -rand(10, H*0.2);
      }
    }
    requestAnimationFrame(step);
  }

  // visibility handling to save CPU
  document.addEventListener('visibilitychange', function(){
    running = !document.hidden;
    if(running){ lastTime = performance.now(); requestAnimationFrame(step); }
  });

  // public controls
  window.startWomenDayRain = function(){ if(!running){ running = true; lastTime = performance.now(); requestAnimationFrame(step);} };
  window.stopWomenDayRain = function(){ running = false; ctx.clearRect(0,0,W,H); };

  // init and start
  resize();
  lastTime = performance.now();
  requestAnimationFrame(step);

})();
</script>
