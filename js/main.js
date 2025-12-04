/**
 * WB Solutions - Main JavaScript
 * Handles navigation, mobile menu, dropdowns, and smooth scrolling
 */

(function() {
  'use strict';

  // DOM Elements
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileServicesBtn = document.getElementById('mobile-services-btn');
  const mobileServicesMenu = document.getElementById('mobile-services-menu');
  const servicesDropdown = document.getElementById('services-dropdown');

  /**
   * Toggle Mobile Menu
   */
  function toggleMobileMenu() {
    const isOpen = !mobileMenu.classList.contains('hidden');

    if (isOpen) {
      mobileMenu.classList.add('hidden');
      mobileMenuBtn.querySelector('.menu-icon').classList.remove('hidden');
      mobileMenuBtn.querySelector('.close-icon').classList.add('hidden');
      mobileMenuBtn.setAttribute('aria-expanded', 'false');
    } else {
      mobileMenu.classList.remove('hidden');
      mobileMenuBtn.querySelector('.menu-icon').classList.add('hidden');
      mobileMenuBtn.querySelector('.close-icon').classList.remove('hidden');
      mobileMenuBtn.setAttribute('aria-expanded', 'true');
    }
  }

  /**
   * Toggle Mobile Services Submenu
   */
  function toggleMobileServices() {
    const isOpen = !mobileServicesMenu.classList.contains('hidden');
    const arrow = mobileServicesBtn.querySelector('svg');

    if (isOpen) {
      mobileServicesMenu.classList.add('hidden');
      arrow.style.transform = 'rotate(0deg)';
    } else {
      mobileServicesMenu.classList.remove('hidden');
      arrow.style.transform = 'rotate(180deg)';
    }
  }

  /**
   * Handle Desktop Services Dropdown
   */
  function handleDesktopDropdown() {
    if (!servicesDropdown) return;

    // Mouse enter/leave for desktop
    servicesDropdown.addEventListener('mouseenter', function() {
      this.classList.add('active');
    });

    servicesDropdown.addEventListener('mouseleave', function() {
      this.classList.remove('active');
    });

    // Keyboard accessibility
    const dropdownBtn = servicesDropdown.querySelector('button');
    if (dropdownBtn) {
      dropdownBtn.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          servicesDropdown.classList.toggle('active');
        }
      });
    }
  }

  /**
   * Smooth Scroll for Anchor Links
   */
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href === '#') return;

        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });

          // Close mobile menu if open
          if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
            toggleMobileMenu();
          }
        }
      });
    });
  }

  /**
   * Close Dropdown on Outside Click
   */
  function handleOutsideClick(e) {
    // Close desktop dropdown
    if (servicesDropdown && !servicesDropdown.contains(e.target)) {
      servicesDropdown.classList.remove('active');
    }
  }

  /**
   * Close Mobile Menu on Resize (if transitioning to desktop)
   */
  function handleResize() {
    if (window.innerWidth >= 768 && mobileMenu && !mobileMenu.classList.contains('hidden')) {
      toggleMobileMenu();
    }
  }

  /**
   * Initialize Event Listeners
   */
  function init() {
    // Mobile menu
    if (mobileMenuBtn && mobileMenu) {
      mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    }

    // Mobile services submenu
    if (mobileServicesBtn && mobileServicesMenu) {
      mobileServicesBtn.addEventListener('click', toggleMobileServices);
    }

    // Desktop dropdown
    handleDesktopDropdown();

    // Smooth scroll
    initSmoothScroll();

    // Outside click handling
    document.addEventListener('click', handleOutsideClick);

    // Resize handling
    window.addEventListener('resize', handleResize);

    // Close mobile menu when clicking a link
    if (mobileMenu) {
      mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function() {
          if (!mobileMenu.classList.contains('hidden')) {
            toggleMobileMenu();
          }
        });
      });
    }
  }

  // Initialize when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
