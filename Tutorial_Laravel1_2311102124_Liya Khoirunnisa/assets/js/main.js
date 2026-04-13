/* Liya Khoirunnisa - 2311102124 - IF1103 */
(function(){
'use strict';

/* -- LOADER -- */
document.body.style.overflow = 'hidden';

window.addEventListener('load', () => {
  const loader = document.getElementById('loader');
  setTimeout(() => {
    loader.classList.add('hidden');
    document.body.style.overflow = ''; 
    initReveal();
    initSkillBars();
    initCounters();
  }, 1800);
});

/* -- NAVBAR -- */
const nav = document.getElementById('navbar');
const navLinks = document.querySelectorAll('.nav-link');
const burger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-links');

window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 50);
  highlightNav();
  bttToggle();
});

burger && burger.addEventListener('click', () => {
  burger.classList.toggle('open');
  navMenu.classList.toggle('open');
});

navLinks.forEach(l => {
  l.addEventListener('click', e => {
    const href = l.getAttribute('href');
    if(href && href.startsWith('#')){
      e.preventDefault();
      const t = document.querySelector(href);
      if(t) window.scrollTo({ top: t.offsetTop - 68, behavior:'smooth' });
      navMenu.classList.remove('open');
      burger && burger.classList.remove('open');
    }
  });
});

function highlightNav(){
  const scrollY = window.scrollY + 90;
  document.querySelectorAll('section[id]').forEach(sec => {
    const link = document.querySelector(`.nav-link[href="#${sec.id}"]`);
    if(!link) return;
    if(scrollY >= sec.offsetTop && scrollY < sec.offsetTop + sec.offsetHeight){
      navLinks.forEach(l => l.classList.remove('active'));
      link.classList.add('active');
    }
  });
}

/* -- TYPED TEXT -- */
const typedEl = document.getElementById('hero-typed');
if(typedEl){
  const words = ['Frontend Dev','Backend Dev','Problem Solver'];
  let wi=0, ci=0, del=false, speed=110;
  function type(){
    const w = words[wi];
    typedEl.textContent = del ? w.slice(0,--ci) : w.slice(0,++ci);
    speed = del ? 55 : 110;
    if(!del && ci===w.length){ speed=2200; del=true; }
    else if(del && ci===0){ del=false; wi=(wi+1)%words.length; speed=500; }
    setTimeout(type, speed);
  }
  setTimeout(type, 1200);
}

/* -- COUNTERS -- */
function initCounters(){
  document.querySelectorAll('.counter').forEach(el => {
    const io = new IntersectionObserver(entries => {
      if(entries[0].isIntersecting){
        const target = +el.dataset.target;
        const suf = el.dataset.suffix||'';
        let cur = 0;
        const step = target / (1400/16);
        const t = setInterval(() => {
          cur = Math.min(cur+step, target);
          el.textContent = Math.floor(cur) + suf;
          if(cur>=target) clearInterval(t);
        }, 16);
        io.disconnect();
      }
    }, {threshold:.5});
    io.observe(el);
  });
}

/* -- SKILL BARS -- */
function initSkillBars(){
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if(e.isIntersecting){
        setTimeout(() => { e.target.style.width = e.target.dataset.w; }, 250);
        io.unobserve(e.target);
      }
    });
  }, {threshold:.4});
  document.querySelectorAll('.sk-fill').forEach(b => io.observe(b));
}

/* -- SCROLL REVEAL -- */
function initReveal(){
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if(e.isIntersecting){
        const d = +(e.target.dataset.delay||0);
        setTimeout(() => e.target.classList.add('on'), d);
        io.unobserve(e.target);
      }
    });
  }, {threshold:.1});
  document.querySelectorAll('.rv,.rv-l,.rv-r').forEach(el => io.observe(el));
}

/* -- SHOW MORE PROJECTS -- */
const showBtn = document.getElementById('show-more');
if(showBtn){
  showBtn.addEventListener('click', () => {
    document.querySelectorAll('.proj-card.hidden').forEach((card, i) => {
      setTimeout(() => {
        card.style.display = 'block';
        card.classList.add('rv');
        setTimeout(() => card.classList.add('on'), 30);
      }, i * 120);
    });
    showBtn.parentElement.remove();
  });
}

/* -- CONTACT FORM AJAX -- */
const form = document.getElementById('contactForm');
const fstatus = document.getElementById('fstatus');
if(form){
  form.addEventListener('submit', e => {
    e.preventDefault();
    let ok = true;
    form.querySelectorAll('[required]').forEach(f => {
      f.classList.remove('err');
      if(!f.value.trim()){ f.classList.add('err'); ok=false; }
    });
    const em = form.querySelector('#email');
    if(em && em.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(em.value)){
      em.classList.add('err'); ok=false;
    }
    if(!ok){ setStatus('bad','⚠ Harap isi semua kolom dengan benar.'); return; }

    const btn = form.querySelector('[type=submit]');
    const orig = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<span>Mengirim...</span>';

    const xhr = new XMLHttpRequest();
    xhr.open('POST','api/contact.php',true);
    xhr.onreadystatechange = () => {
      if(xhr.readyState===4){
        btn.disabled=false; btn.innerHTML=orig;
        if(xhr.status===200){
          try{
            const r = JSON.parse(xhr.responseText);
            r.success
              ? (setStatus('ok','✓ Pesan terkirim! Saya akan segera menghubungi Anda.'), form.reset())
              : setStatus('bad','✗ '+(r.message||'Gagal mengirim.'));
          } catch(err){ setStatus('bad','✗ Terjadi kesalahan. Coba lagi.'); }
        } else { setStatus('bad','✗ Gagal menghubungi server.'); }
      }
    };
    xhr.send(new FormData(form));
  });
  form.querySelectorAll('.fctrl').forEach(f => f.addEventListener('input', () => f.classList.remove('err')));
}
function setStatus(cls, msg){
  fstatus.className = cls; fstatus.textContent = msg; fstatus.style.display = 'block';
  setTimeout(() => { fstatus.style.display='none'; }, 5000);
}

/* -- BACK TO TOP -- */
const btt = document.getElementById('btt');
function bttToggle(){ btt && btt.classList.toggle('show', window.scrollY > 400); }
btt && btt.addEventListener('click', () => window.scrollTo({top:0,behavior:'smooth'}));

/* -- CARD 3D TILT -- */
document.querySelectorAll('.proj-card,.sk-card').forEach(card => {
  card.addEventListener('mousemove', e => {
    const r = card.getBoundingClientRect();
    const x = (e.clientX - r.left) / r.width  - .5;
    const y = (e.clientY - r.top)  / r.height - .5;
    card.style.transform = `perspective(700px) rotateX(${y*-6}deg) rotateY(${x*6}deg) translateY(-7px)`;
  });
  card.addEventListener('mouseleave', () => { card.style.transform = ''; });
});

/* -- FLOATING PARTICLES -- */
const heroSection = document.getElementById('home');
if(heroSection){
  function spawnParticle(){
    const p = document.createElement('div');
    const size = Math.random()*5+2;
    const colors = ['rgba(8,151,157,.25)','rgba(110,198,202,.3)','rgba(132,116,161,.2)','rgba(204,171,216,.25)'];
    p.style.cssText = `
      position:absolute; pointer-events:none; z-index:0;
      width:${size}px; height:${size}px; border-radius:50%;
      background:${colors[Math.floor(Math.random()*colors.length)]};
      left:${Math.random()*100}%; bottom:-8px;
      animation:pFloat ${Math.random()*7+7}s ease-in-out forwards;
    `;
    if(!document.getElementById('pStyle')){
      const s=document.createElement('style');
      s.id='pStyle';
      s.textContent='@keyframes pFloat{0%{transform:translateY(0) rotate(0);opacity:.8}100%{transform:translateY(-95vh) rotate(540deg);opacity:0}}';
      document.head.appendChild(s);
    }
    heroSection.appendChild(p);
    setTimeout(() => p.remove(), 14000);
  }
  setInterval(spawnParticle, 900);
}

})();
