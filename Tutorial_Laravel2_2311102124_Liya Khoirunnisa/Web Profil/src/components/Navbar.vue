<template>
  <nav id="navbar" :class="{ 'scrolled': isScrolled }">
    <a href="#home" class="nav-logo"
      >Liya Khoirunnisa <span class="nav-logo-dot"></span
    ></a>

    <ul class="nav-links" :class="{ 'open': isMenuOpen }">
      <li>
        <a href="#home" class="nav-link active" @click="closeMenu">Home</a>
      </li>
      <li><a href="#about" class="nav-link" @click="closeMenu">About</a></li>
      <li>
        <a href="#education" class="nav-link" @click="closeMenu">Education</a>
      </li>
      <li><a href="#skills" class="nav-link" @click="closeMenu">Skills</a></li>
      <li>
        <a href="#projects" class="nav-link" @click="closeMenu">Project</a>
      </li>
      <li>
        <a href="#contact" class="nav-link nav-btn" @click="closeMenu"
          >Contact</a
        >
      </li>
    </ul>

    <button
      class="hamburger"
      :class="{ 'open': isMenuOpen }"
      @click="toggleMenu"
      aria-label="Menu"
    >
      <span></span><span></span><span></span>
    </button>
  </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const isScrolled = ref(false)
const isMenuOpen = ref(false)

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}

const closeMenu = () => {
  isMenuOpen.value = false
}

const handleScroll = () => {
  isScrolled.value = window.scrollY > 50
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>
