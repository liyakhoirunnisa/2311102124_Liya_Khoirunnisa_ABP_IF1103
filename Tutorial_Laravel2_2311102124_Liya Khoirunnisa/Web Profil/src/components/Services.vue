<template>
  <section id="services" class="section-pad">
    <div style="max-width:1160px; margin:0 auto;">
      <span class="sec-label rv">My Service</span>
      <h2 class="sec-title rv" data-delay="80">What Can I Do for You?</h2>
      <p class="sec-sub rv" data-delay="140" style="margin-bottom:52px;">I offer comprehensive web development services from UI to reliable backend system.</p>

      <div class="svc-grid">
        <div class="svc-card rv" data-delay="100">
          <div class="svc-img">
            <img src="/img/frontend.jpeg" alt="Frontend Development" />
            <div class="svc-img-ov"></div>
            <span class="svc-badge">Frontend</span>
          </div>
          <div class="svc-body">
            <div class="svc-icon-row">
              <div class="svc-ico">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <polyline points="16 18 22 12 16 6" />
                  <polyline points="8 6 2 12 8 18" />
                </svg>
              </div>
              <h3 class="svc-title">Frontend Development</h3>
            </div>
            <p class="svc-desc">Build a responsive, interactive and visually appealing interface using recent technology to ensure optimal performance on all devices.</p>
            <div class="svc-tags">
              <span class="svc-tag">HTML5 / CSS3</span>
              <span class="svc-tag">JavaScript</span>
              <span class="svc-tag">Vue.js</span>
              <span class="svc-tag">Figma</span>
            </div>
          </div>
        </div>

        <div class="svc-card rv" data-delay="200">
          <div class="svc-img">
            <img src="/img/backend.jpeg" alt="Backend Development" />
            <div class="svc-img-ov"></div>
            <span class="svc-badge purple">Backend</span>
          </div>
          <div class="svc-body">
            <div class="svc-icon-row">
              <div class="svc-ico purple">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="2" y="2" width="20" height="8" rx="2" />
                  <rect x="2" y="14" width="20" height="8" rx="2" />
                  <line x1="6" y1="6" x2="6.01" y2="6" />
                  <line x1="6" y1="18" x2="6.01" y2="18" />
                </svg>
              </div>
              <h3 class="svc-title">Backend Development</h3>
            </div>
            <p class="svc-desc">Building a powerful, scaleable, and secure backend system. Designing REST API, managing the database, and implementing efficient business logic.</p>
            <div class="svc-tags">
              <span class="svc-tag p">PHP / Laravel</span>
              <span class="svc-tag p">MySQL</span>
              <span class="svc-tag p">REST API</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>