/* ChronoDialWay - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Complication & Escapement Selector Explorer
  const chronoButtons = document.querySelectorAll('.chrono-btn');
  const chronoDisplay = document.getElementById('chrono-detail');

  if (chronoButtons.length > 0 && chronoDisplay) {
    chronoButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        chronoButtons.forEach(b => b.classList.remove('active-chrono'));
        this.classList.add('active-chrono');
        const compName = this.getAttribute('data-comp');
        const description = this.getAttribute('data-desc');
        const precisionScore = this.getAttribute('data-precision');

        chronoDisplay.innerHTML = `
          <div class="chrono-card" style="border-left: 4px solid var(--accent-gold); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-gold); font-size: 1.5rem; margin-bottom: 0.5rem;">${compName} Horological Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-crimson); font-size: 0.95rem;">Empirical Chronometric Precision: ${precisionScore}</strong>
          </div>
        `;
      });
    });
  }

  // Timepiece Matcher & Complication Diagnostic Quiz
  const chronoQuizButtons = document.querySelectorAll('.chrono-quiz-btn');
  const chronoQuizResult = document.getElementById('chrono-quiz-result');

  if (chronoQuizButtons.length > 0 && chronoQuizResult) {
    chronoQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        chronoQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        chronoQuizResult.innerHTML = `
          <div class="chrono-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-gold);">
            <h4 style="color: var(--accent-gold); margin-bottom: 0.5rem;">Your Curated Horological Complication Recommendation</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
