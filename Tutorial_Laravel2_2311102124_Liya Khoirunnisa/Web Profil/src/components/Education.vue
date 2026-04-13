<template>
  <section id="education" class="section-pad">
    <div style="max-width:1160px; margin:0 auto;">
      <span class="sec-label rv">Pendidikan</span>
      <h2 class="sec-title rv" data-delay="80">Riwayat Pendidikan</h2>
      <p class="sec-sub rv" data-delay="140" style="margin-bottom:52px;">
        Perjalanan akademis saya dari sekolah dasar hingga menempuh pendidikan tinggi.
      </p>

      <div class="edu-grid">
        <div 
          v-for="(edu, index) in educationHistory" 
          :key="index" 
          class="edu-card rv" 
          :data-delay="100 * (index + 1)"
        >
          <div class="edu-year">{{ edu.year }}</div>
          <div class="edu-body">
            <h3 class="edu-level">{{ edu.level }}</h3>
            <h4 class="edu-school">{{ edu.school }}</h4>
            <p v-if="edu.desc" class="edu-desc">{{ edu.desc }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

// Data diletakkan di variabel lokal (hardcode), tidak pakai database
const educationHistory = ref([
  {
    year: '2011 - 2017',
    level: 'Sekolah Dasar',
    school: 'SD Negeri 3 Surakarta',
    desc: ''
  },
  {
    year: '2017 - 2020',
    level: 'Sekolah Menengah Pertama',
    school: 'SMP Negeri 1 Suranenggala',
    desc: ''
  },
  {
    year: '2020 - 2023',
    level: 'Sekolah Menengah Atas',
    school: 'SMA Negeri 1 Krangkeng',
    desc: 'Jurusan MIPA'
  },
  {
    year: '2023 - Sekarang',
    level: 'Perguruan Tinggi',
    school: 'Telkom University Purwokerto',
    desc: 'S1 Teknik Informatika'
  }
])
</script>

<style scoped>
/* Desain card disamakan dengan color palette portofoliomu */
.edu-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 24px;
}

.edu-card {
  background: var(--white);
  border-radius: var(--r-md);
  padding: 24px;
  border: 1px solid rgba(110, 198, 202, 0.18);
  box-shadow: var(--shadow-card);
  transition: var(--t);
  position: relative;
  overflow: hidden;
}

.edu-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  background: var(--g-fresh);
}

.edu-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-md);
  border-color: var(--teal-light);
}

.edu-year {
  font-family: "Plus Jakarta Sans", sans-serif;
  font-size: 0.8rem;
  font-weight: 700;
  color: var(--teal);
  background: var(--teal-soft);
  display: inline-block;
  padding: 4px 12px;
  border-radius: var(--r-full);
  margin-bottom: 12px;
}

.edu-level {
  font-family: "Plus Jakarta Sans", sans-serif;
  font-size: 1.1rem;
  font-weight: 800;
  color: var(--deep-teal);
  margin-bottom: 4px;
}

.edu-school {
  font-size: 0.9rem;
  color: var(--text-mid);
  font-weight: 600;
  margin-bottom: 8px;
}

.edu-desc {
  font-size: 0.85rem;
  color: var(--text-muted);
}
</style>