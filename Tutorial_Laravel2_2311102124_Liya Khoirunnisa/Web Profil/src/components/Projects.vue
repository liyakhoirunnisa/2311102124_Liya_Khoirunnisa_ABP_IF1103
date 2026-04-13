<template>
  <section id="projects" class="section-pad">
    <div style="max-width:1160px; margin:0 auto;">
      <div class="proj-header">
        <div>
          <span class="sec-label rv">My Projects</span>
          <h2 class="sec-title rv" data-delay="80">
            Featured Works & Projects
          </h2>
          <p class="sec-sub rv" data-delay="140" style="margin-bottom:0">
            A collection of my featured projects and digital experiences.
          </p>
        </div>
      </div>

      <div class="proj-grid">
        <div class="proj-card rv" data-delay="80">
          <div class="proj-img-wrap">
            <img src="/img/barbekuy.jpeg" alt="Website Barbekuy" />
            <div class="proj-n">01</div>
          </div>
          <div class="proj-body">
            <div class="proj-cat">Website</div>
            <h3 class="proj-title">Website Barbekuy</h3>
            <p class="proj-desc">
              Barbekuy is a Purwokerto-based grill equipment rental platform
              featuring a dual-role system: an Admin panel for managing stock,
              transactions, and sales statistics, alongside a Customer interface
              for seamless rentals, integrated Midtrans payments, and product
              reviews.
            </p>
            <div class="proj-stack">
              <span class="proj-tag">Laravel</span>
              <span class="proj-tag">MySQL</span>
            </div>
            <div class="proj-btns">
              <a
                href="https://github.com/liyakhoirunnisa/Barbekuy-IF1102-.git"
                target="_blank"
                class="proj-btn proj-btn-show"
              >
                <svg viewBox="0 0 24 24">
                  <path
                    d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"
                  />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
                Show
              </a>
            </div>
          </div>
        </div>

        <div class="proj-card rv" data-delay="160">
          <div class="proj-img-wrap">
            <img src="/img/portofolio.png" alt="Simple Portofolio Website" />
            <div class="proj-n">02</div>
          </div>
          <div class="proj-body">
            <div class="proj-cat">Website</div>
            <h3 class="proj-title">Simple Portofolio Website</h3>
            <p class="proj-desc">
              This personal portfolio website is built with HTML, CSS, JS, and
              PHP featuring an About Me profile, a Project gallery, and a
              functional Contact Me messaging system.
            </p>
            <div class="proj-stack">
              <span class="proj-tag">HTML</span>
              <span class="proj-tag">CSS</span>
              <span class="proj-tag">Bootstrap</span>
            </div>
            <div class="proj-btns">
              <a
                href="https://github.com/liyakhoirunnisa/simple_portofolio_web.git"
                target="_blank"
                class="proj-btn proj-btn-show"
              >
                <svg viewBox="0 0 24 24">
                  <path
                    d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"
                  />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
                Show
              </a>
            </div>
          </div>
        </div>

        <div class="proj-card rv" data-delay="240">
          <div class="proj-img-wrap">
            <img src="/img/calculator.png" alt="Calculator Program" />
            <div class="proj-n">03</div>
          </div>
          <div class="proj-body">
            <div class="proj-cat">Program</div>
            <h3 class="proj-title">Calculator Program</h3>
            <p class="proj-desc">
              A responsive digital calculator featuring a clean user interface
              to perform fundamental arithmetic operations including addition,
              subtraction, multiplication, and division with real-time results.
            </p>
            <div class="proj-stack">
              <span class="proj-tag">HTML</span>
              <span class="proj-tag">CSS</span>
              <span class="proj-tag">JavaScript</span>
            </div>
            <div class="proj-btns">
              <a
                href="https://github.com/liyakhoirunnisa/calculator_program.git"
                target="_blank"
                class="proj-btn proj-btn-show"
              >
                <svg viewBox="0 0 24 24">
                  <path
                    d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"
                  />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
                Show
              </a>
            </div>
          </div>
        </div>

        <div class="proj-card rv on" v-if="showMore">
          <div class="proj-img-wrap">
            <img src="/img/concert.png" alt="Concert Ticket Program" />
            <div class="proj-n">04</div>
          </div>
          <div class="proj-body">
            <div class="proj-cat">Program</div>
            <h3 class="proj-title">Concert Ticket Program</h3>
            <p class="proj-desc">
              An integrated concert ticket system that allows users to
              seamlessly book tickets, manage cancellations, and review a
              detailed purchase history for efficient event management.
            </p>
            <div class="proj-stack">
              <span class="proj-tag">C++</span>
            </div>
            <div class="proj-btns">
              <a
                href="https://github.com/liyakhoirunnisa/Concert_Ticket_Program.git"
                target="_blank"
                class="proj-btn proj-btn-show"
              >
                <svg viewBox="0 0 24 24">
                  <path
                    d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"
                  />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
                Show
              </a>
            </div>
          </div>
        </div>

        <div class="proj-card rv on" v-if="showMore">
          <div class="proj-img-wrap">
            <img src="/img/hair trendy.jpeg" alt="Hair Trendy App Design" />
            <div class="proj-n">05</div>
          </div>
          <div class="proj-body">
            <div class="proj-cat">Design</div>
            <h3 class="proj-title">Hair Trendy App Design</h3>
            <p class="proj-desc">
              A modern hair salon platform designed to streamline salon
              services, featuring a digital hairstyle catalog, professional
              stylist profiles, and an integrated booking system for effortless
              appointment management.
            </p>
            <div class="proj-stack">
              <span class="proj-tag">Figma</span>
            </div>
            <div class="proj-btns">
              <a
                href="https://www.figma.com/design/g8DbXStnNdiE2S4vErJf2L/Design-Sprint-Hair-Trendy?node-id=0-1&t=zjTudlgWuKTF9vSH-1"
                target="_blank"
                class="proj-btn proj-btn-show"
              >
                <svg viewBox="0 0 24 24">
                  <path
                    d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"
                  />
                  <polyline points="15 3 21 3 21 9" />
                  <line x1="10" y1="14" x2="21" y2="3" />
                </svg>
                Show
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="proj-more rv" data-delay="100" v-if="!showMore">
        <button class="btn-main" @click="showMore = true">
          <svg
            width="16"
            height="16"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2.5"
          >
            <path d="M12 5v14M5 12l7 7 7-7" />
          </svg>
          <span>View in Touch</span>
        </button>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

// Variabel reaktif untuk mengontrol tampilan project tambahan
const showMore = ref(false)
</script>
