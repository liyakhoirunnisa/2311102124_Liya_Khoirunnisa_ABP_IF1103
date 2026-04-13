<template>
  <section id="skills" class="section-pad">
    <div style="max-width:1160px; margin:0 auto;">
      <div class="skills-head">
        <span class="sec-label rv">My Skills</span>
        <h2 class="sec-title rv" data-delay="80">Tech Stack & Tools</h2>
        <p class="sec-sub rv" data-delay="140">Technologies and tools I use to make amazing experiences</p>
      </div>

      <div class="skills-grid">
        <div class="sk-card rv" data-delay="280">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(255,45,32,.07)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" />
            </div>
            <span class="sk-name">Laravel PHP</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">90%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="90%"></div>
          </div>
        </div>

        <div class="sk-card rv" data-delay="330">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(0,117,143,.1)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" alt="MySQL" />
            </div>
            <span class="sk-name">MySQL</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">89%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="89%"></div>
          </div>
        </div>

        <div class="sk-card rv" data-delay="130">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(0,90,160,.08)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cplusplus/cplusplus-original.svg" alt="C++" />
            </div>
            <span class="sk-name">C++</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">88%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="88%"></div>
          </div>
        </div>

        <div class="sk-card rv" data-delay="180">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(0,172,215,.1)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/go/go-original.svg" alt="Golang" />
            </div>
            <span class="sk-name">Golang</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">87%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="87%"></div>
          </div>
        </div>

        <div class="sk-card rv" data-delay="80">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(160,100,240,.1)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" alt="Figma" />
            </div>
            <span class="sk-name">Figma</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">87%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="87%"></div>
          </div>
        </div>

        <div class="sk-card rv" data-delay="380">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(65,184,131,.1)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg" alt="Vue.js" />
            </div>
            <span class="sk-name">Vue.js</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">86%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="86%"></div>
          </div>
        </div>

        <div class="sk-card rv" data-delay="230">
          <div class="sk-head">
            <div class="sk-icon" style="background:rgba(55,118,171,.1)">
              <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" alt="Python" />
            </div>
            <span class="sk-name">Python</span>
          </div>
          <div class="sk-row"><span class="sk-lbl">Proficiency</span><span class="sk-pct">85%</span></div>
          <div class="sk-bar">
            <div class="sk-fill" data-w="85%"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { onMounted } from 'vue'

onMounted(() => {
  // Logika animasi progress bar dipindah ke sini
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if(e.isIntersecting){
        setTimeout(() => { e.target.style.width = e.target.dataset.w; }, 250);
        io.unobserve(e.target);
      }
    });
  }, {threshold: 0.4});
  
  document.querySelectorAll('.sk-fill').forEach(b => io.observe(b));
})
</script>