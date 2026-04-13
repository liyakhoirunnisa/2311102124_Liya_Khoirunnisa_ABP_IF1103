<template>
  <div>
    <Navbar />

    <main>
      <Hero />
      <hr class="section-divider" />
      
      <About />
      <hr class="section-divider" />
      
      <Education />
      <hr class="section-divider" />
      
      <Skills />
      <hr class="section-divider" />
      
      <Services />
      <hr class="section-divider" />
      
      <Projects />
      <hr class="section-divider" />
      
      <Contact />
    </main>

    <Footer />
  </div>
</template>

<script setup>
import { onMounted } from 'vue'

// Pastikan SEMUA komponen di-import dengan benar
import Navbar from './components/Navbar.vue'
import Hero from './components/Hero.vue'
import About from './components/About.vue'
import Education from './components/Education.vue'
import Skills from './components/Skills.vue'
import Services from './components/Services.vue'
import Projects from './components/Projects.vue'
import Contact from './components/Contact.vue'
import Footer from './components/Footer.vue' // <-- Buka komentarnya

import './assets/style.css'

onMounted(() => {
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if(e.isIntersecting){
        const d = +(e.target.dataset.delay || 0);
        setTimeout(() => e.target.classList.add('on'), d);
        io.unobserve(e.target);
      }
    });
  }, {threshold: 0.1});

  setTimeout(() => {
    document.querySelectorAll('.rv, .rv-l, .rv-r').forEach(el => io.observe(el));
  }, 100);
})
</script>