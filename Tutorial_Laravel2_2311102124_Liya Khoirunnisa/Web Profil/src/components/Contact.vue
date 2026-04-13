<template>
  <section id="contact" class="section-pad">
    <div style="max-width:1160px; margin:0 auto;">
      <span class="sec-label rv">Contact</span>
      <h2 class="sec-title rv" data-delay="80">Get in Touch</h2>

      <div class="contact-wrap">
        <div class="contact-left rv-l">
          <h3>Let’s Work Together!</h3>
          <p>
            Have an exciting project in mind or just want to chat? Feel free to
            reach out. I’m always open to new opportunities, challenges, and
            meaningful collaborations.
          </p>

          <div class="c-illus-box">
            <div class="c-illus-icon">📬</div>
            <div class="c-illus-text">
              <strong>Open to Opportunities</strong>
              <span>Full Time · Freelance · Collaboration</span>
            </div>
          </div>
        </div>

        <div class="cform rv-r">
          <h4>Send a Message ✉️</h4>
          <form @submit.prevent="submitForm">
            <div class="f-row">
              <div class="fg">
                <label for="nama">Full Name <em>*</em></label>
                <input
                  type="text"
                  id="nama"
                  v-model="formData.nama"
                  class="fctrl"
                  placeholder="Full Name"
                  required
                />
              </div>
              <div class="fg">
                <label for="email">Email Address <em>*</em></label>
                <input
                  type="email"
                  id="email"
                  v-model="formData.email"
                  class="fctrl"
                  placeholder="Email Address"
                  required
                />
              </div>
            </div>
            <div class="fg">
              <label for="no_hp">Phone Number</label>
              <input
                type="tel"
                id="no_hp"
                v-model="formData.no_hp"
                class="fctrl"
                placeholder="Phone Number"
              />
            </div>
            <div class="fg">
              <label for="pesan">Your Message <em>*</em></label>
              <textarea
                id="pesan"
                v-model="formData.pesan"
                class="fctrl"
                rows="5"
                placeholder="Your Message..."
                required
              ></textarea>
            </div>
            <div class="f-foot">
              <button type="submit" class="btn-main" :disabled="isSubmitting">
                <svg
                  width="15"
                  height="15"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2.5"
                >
                  <line x1="22" y1="2" x2="11" y2="13" />
                  <polygon points="22 2 15 22 11 13 2 9 22 2" />
                </svg>
                <span>{{ isSubmitting ? 'Mengirim...' : 'Send Message' }}</span>
              </button>

              <div v-if="statusMsg" :class="['fstatus-vue', statusClass]">
                {{ statusMsg }}
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, reactive } from 'vue'

const formData = reactive({
  nama: '',
  email: '',
  no_hp: '',
  pesan: ''
})

const isSubmitting = ref(false)
const statusMsg = ref('')
const statusClass = ref('')

const submitForm = () => {
  isSubmitting.value = true

  // Simulasi loading pengiriman selama 1.5 detik
  setTimeout(() => {
    isSubmitting.value = false
    statusClass.value = 'ok'
    statusMsg.value = '✓ Pesan terkirim!'

    // Reset form
    formData.nama = ''
    formData.email = ''
    formData.no_hp = ''
    formData.pesan = ''

    // Hilangkan pesan sukses setelah 5 detik
    setTimeout(() => {
      statusMsg.value = ''
    }, 5000)
  }, 1500)
}
</script>

<style scoped>
.fstatus-vue {
  font-size: 0.8rem;
  font-weight: 600;
  font-family: "Plus Jakarta Sans", sans-serif;
  padding: 7px 15px;
  border-radius: var(--r-full);
  margin-left: 12px;
}
.fstatus-vue.ok {
  background: rgba(8, 151, 157, 0.1);
  color: var(--teal);
  border: 1px solid rgba(8, 151, 157, 0.2);
}
</style>
