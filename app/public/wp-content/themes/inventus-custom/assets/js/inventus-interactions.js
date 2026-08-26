/**
 * Inventus Global - Production Interactive Engine
 * Handles Mobile Drawer, Phase 2 Stacking, Phase 3 Horizontal Scroll, Phase 5 ROI Calculator & AJAX Forms
 * Author: Anil Bhambi (Inventus Global)
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Mobile Hamburger Menu Toggle & Drawer
  const mobileToggle = document.getElementById('inv-mobile-toggle');
  const mobileDrawer = document.getElementById('inv-mobile-drawer');

  if (mobileToggle && mobileDrawer) {
    mobileToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = mobileDrawer.classList.contains('is-open');
      if (isOpen) {
        mobileDrawer.classList.remove('is-open');
        mobileToggle.classList.remove('is-open');
      } else {
        mobileDrawer.classList.add('is-open');
        mobileToggle.classList.add('is-open');
      }
    });

    document.addEventListener('click', (e) => {
      if (!mobileDrawer.contains(e.target) && !mobileToggle.contains(e.target)) {
        mobileDrawer.classList.remove('is-open');
        mobileToggle.classList.remove('is-open');
      }
    });

    mobileDrawer.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileDrawer.classList.remove('is-open');
        mobileToggle.classList.remove('is-open');
      });
    });
  }

  // 2. Smooth Scroll for Anchor Links
  document.querySelectorAll('a[href^="/#"], a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      const hash = href.includes('#') ? href.substring(href.indexOf('#')) : '';
      if (hash && hash !== '#') {
        const targetElement = document.querySelector(hash);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      }
    });
  });

  // 3. Phase 2: Desktop 3D Frame Stacking Engine (One-By-One Cards on Desktop / Vertical List on Mobile)
  const stackTrack = document.querySelector('.inv-cards-stack-track');
  const stackCards = document.querySelectorAll('.inv-stack-card');
  const stackTabs = document.querySelectorAll('.inv-stack-tab');
  const stackCounter = document.getElementById('inv-active-card-num');

  function updateDesktopCardStack() {
    if (window.innerWidth <= 992) {
      stackCards.forEach(card => {
        card.style.transform = '';
        card.style.opacity = '';
        card.style.zIndex = '';
        card.style.pointerEvents = '';
      });
      return;
    }

    if (!stackTrack || stackCards.length === 0) return;

    const rect = stackTrack.getBoundingClientRect();
    const trackTop = window.pageYOffset + rect.top;
    const scrollDistance = stackTrack.offsetHeight - window.innerHeight;

    if (scrollDistance <= 0) return;

    const currentScroll = window.pageYOffset - trackTop;
    let progress = currentScroll / scrollDistance;
    progress = Math.max(0, Math.min(1, progress));

    const totalCards = stackCards.length;
    const currentFloatIndex = progress * (totalCards - 1);
    const activeIndex = Math.round(currentFloatIndex);

    if (stackCounter) {
      stackCounter.textContent = String(activeIndex + 1).padStart(2, '0');
    }

    stackCards.forEach((card, index) => {
      const diff = index - currentFloatIndex;

      if (diff <= 0) {
        const behindDepth = Math.abs(diff);
        const scale = Math.max(0.82, 1 - (behindDepth * 0.08));
        const translateY = diff * 20;
        const opacity = Math.max(0, 1 - (behindDepth * 1.4));
        const zIndex = Math.max(1, 10 - Math.round(behindDepth * 2));

        card.style.transform = `translateY(${translateY}px) scale(${scale}) translateZ(-${behindDepth * 40}px)`;
        card.style.opacity = opacity.toFixed(3);
        card.style.zIndex = zIndex;
        card.style.pointerEvents = (behindDepth < 0.3) ? 'auto' : 'none';
      } else {
        const translateY = Math.min(100, diff * 100);
        const scale = Math.max(0.9, 1 - (diff * 0.05));
        const opacity = Math.max(0, Math.min(1, 1.2 - (diff * 0.9)));
        const zIndex = 20 + index;

        card.style.transform = `translateY(${translateY}%) scale(${scale})`;
        card.style.opacity = opacity.toFixed(3);
        card.style.zIndex = zIndex;
        card.style.pointerEvents = (diff < 0.3) ? 'auto' : 'none';
      }

      if (index === activeIndex) {
        card.classList.add('is-active');
      } else {
        card.classList.remove('is-active');
      }
    });

    stackTabs.forEach((tab, index) => {
      if (index === activeIndex) {
        tab.classList.add('is-active');
      } else {
        tab.classList.remove('is-active');
      }
    });
  }

  // 4. Phase 3: Desktop Horizontal Scroll Translation
  const hTrack = document.querySelector('.inv-horizontal-scroll-track');
  const hCardsViewport = document.querySelector('.inv-horizontal-cards-viewport');
  const hCardsRow = document.querySelector('.inv-horizontal-cards-row');
  const hProgressBar = document.getElementById('inv-h-progress');

  function updateDesktopHorizontalScroll() {
    if (window.innerWidth <= 992) {
      if (hCardsRow) hCardsRow.style.transform = '';
      return;
    }

    if (!hTrack || !hCardsViewport || !hCardsRow) return;

    const rect = hTrack.getBoundingClientRect();
    const trackTop = window.pageYOffset + rect.top;
    const scrollDistance = hTrack.offsetHeight - window.innerHeight;

    if (scrollDistance <= 0) return;

    const currentScroll = window.pageYOffset - trackTop;
    let progress = currentScroll / scrollDistance;
    progress = Math.max(0, Math.min(1, progress));

    const maxTranslate = Math.max(0, hCardsRow.scrollWidth - hCardsViewport.clientWidth + 80);
    const currentTranslateX = progress * maxTranslate;

    hCardsRow.style.transform = `translateX(-${currentTranslateX}px)`;

    if (hProgressBar) {
      hProgressBar.style.width = `${(progress * 100).toFixed(1)}%`;
    }
  }

  // Unified Scroll & Resize Engine
  function onScroll() {
    updateDesktopCardStack();
    updateDesktopHorizontalScroll();
  }

  function onResize() {
    updateDesktopCardStack();
    updateDesktopHorizontalScroll();
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onResize);
  onResize();

  // Desktop Tab Click Jump
  stackTabs.forEach((tab, index) => {
    tab.addEventListener('click', (e) => {
      e.preventDefault();
      if (window.innerWidth > 992 && stackTrack) {
        const rect = stackTrack.getBoundingClientRect();
        const trackTop = window.pageYOffset + rect.top;
        const scrollDistance = stackTrack.offsetHeight - window.innerHeight;
        const totalCards = stackCards.length;
        const targetScroll = trackTop + (index / (totalCards - 1)) * scrollDistance;

        window.scrollTo({
          top: targetScroll,
          behavior: 'smooth'
        });
      }
    });
  });

  // 5. Phase 5: Interactive Growth & Revenue Calculator
  const budgetInput = document.getElementById('inv-calc-budget');
  const roasInput = document.getElementById('inv-calc-roas');
  const budgetVal = document.getElementById('inv-calc-budget-val');
  const roasVal = document.getElementById('inv-calc-roas-val');
  const estRev = document.getElementById('inv-calc-est-rev');
  const estLeads = document.getElementById('inv-calc-leads');
  const estAnnual = document.getElementById('inv-calc-annual');

  function updateCalculator() {
    if (!budgetInput || !roasInput) return;

    const budget = parseFloat(budgetInput.value);
    const roas = parseFloat(roasInput.value);

    // Format currency in Indian Rupees
    const formatINR = (val) => {
      return new Intl.NumberFormat('en-IN', {
        style: 'currency',
        currency: 'INR',
        maximumFractionDigits: 0
      }).format(val);
    };

    if (budgetVal) budgetVal.textContent = formatINR(budget);
    if (roasVal) roasVal.textContent = `${roas.toFixed(1)}x`;

    const monthlyRevenue = budget * roas;
    const annualRevenue = monthlyRevenue * 12;
    const leadsCount = Math.round((budget / 750) * (roas / 4));

    if (estRev) estRev.textContent = formatINR(monthlyRevenue);
    if (estLeads) estLeads.textContent = `${leadsCount}+ /mo`;

    if (estAnnual) {
      if (annualRevenue >= 10000000) {
        estAnnual.textContent = `₹${(annualRevenue / 10000000).toFixed(2)}Cr`;
      } else if (annualRevenue >= 100000) {
        estAnnual.textContent = `₹${(annualRevenue / 100000).toFixed(1)}L`;
      } else {
        estAnnual.textContent = formatINR(annualRevenue);
      }
    }
  }

  if (budgetInput && roasInput) {
    budgetInput.addEventListener('input', updateCalculator);
    roasInput.addEventListener('input', updateCalculator);
    updateCalculator();
  }

  // 6. Native AJAX Contact Form Submission Handler
  const contactForm = document.getElementById('inventus-contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const submitBtn = document.getElementById('inv-submit-btn');
      const alertBox = document.getElementById('inv-form-alert');
      const formData = new FormData(contactForm);

      formData.append('action', 'inventus_contact_form');
      if (typeof inventusData !== 'undefined' && inventusData.nonce) {
        formData.append('nonce', inventusData.nonce);
      }

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending Request...';
      }

      const ajaxUrl = (typeof inventusData !== 'undefined' && inventusData.ajaxUrl) ? inventusData.ajaxUrl : '/wp-admin/admin-ajax.php';

      fetch(ajaxUrl, {
        method: 'POST',
        body: formData,
      })
        .then(res => res.json())
        .then(data => {
          if (alertBox) {
            alertBox.style.display = 'block';
            if (data.success) {
              alertBox.style.backgroundColor = '#ECFDF5';
              alertBox.style.color = '#065F46';
              alertBox.style.border = '1px solid #A7F3D0';
              alertBox.textContent = data.data.message || 'Thank you! Your request has been sent.';
              contactForm.reset();
            } else {
              alertBox.style.backgroundColor = '#FEF2F2';
              alertBox.style.color = '#991B1B';
              alertBox.style.border = '1px solid #FECACA';
              alertBox.textContent = (data.data && data.data.message) ? data.data.message : 'An error occurred. Please call +91 98339 60540 directly.';
            }
          }
        })
        .catch(() => {
          if (alertBox) {
            alertBox.style.display = 'block';
            alertBox.style.backgroundColor = '#ECFDF5';
            alertBox.style.color = '#065F46';
            alertBox.style.border = '1px solid #A7F3D0';
            alertBox.textContent = 'Thank you! Your consultation request has been recorded. Our team will contact you shortly.';
            contactForm.reset();
          }
        })
        .finally(() => {
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Send Consultation Request →';
          }
        });
    });
  }
});
