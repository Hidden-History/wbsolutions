/**
 * WB Solutions - Form Handling
 * Handles form validation, submission to n8n webhooks, and toast notifications
 */

(function() {
  'use strict';

  // Configuration
  const WEBHOOK_URL = '/api/n8n/webhook/e646bcd6-214f-4269-8985-9c01456c1820';

  /**
   * Show Toast Notification
   */
  function showToast(message, type = 'success') {
    const container = document.getElementById('toast-container');
    if (!container) return;

    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.innerHTML = `
      <div class="flex items-center gap-3">
        <span class="${type === 'success' ? 'text-success' : 'text-error'}">${
          type === 'success'
            ? '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>'
            : '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>'
        }</span>
        <span>${message}</span>
      </div>
    `;

    container.appendChild(toast);

    // Auto remove after 5 seconds
    setTimeout(() => {
      toast.style.opacity = '0';
      toast.style.transform = 'translateX(100%)';
      setTimeout(() => toast.remove(), 300);
    }, 5000);
  }

  /**
   * Validate Email
   */
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  /**
   * Validate Form
   */
  function validateForm(form) {
    const name = form.querySelector('[name="name"]');
    const email = form.querySelector('[name="email"]');
    const message = form.querySelector('[name="message"]');

    // Reset previous errors
    form.querySelectorAll('.error-message').forEach(el => el.remove());
    form.querySelectorAll('.input-error').forEach(el => el.classList.remove('input-error'));

    let isValid = true;

    // Name validation
    if (name && !name.value.trim()) {
      showFieldError(name, 'Name is required');
      isValid = false;
    }

    // Email validation
    if (email) {
      if (!email.value.trim()) {
        showFieldError(email, 'Email is required');
        isValid = false;
      } else if (!isValidEmail(email.value)) {
        showFieldError(email, 'Please enter a valid email');
        isValid = false;
      }
    }

    // Message validation
    if (message && !message.value.trim()) {
      showFieldError(message, 'Message is required');
      isValid = false;
    }

    return isValid;
  }

  /**
   * Show Field Error
   */
  function showFieldError(field, message) {
    field.classList.add('input-error', 'border-error');

    const errorEl = document.createElement('span');
    errorEl.className = 'error-message text-error text-sm mt-1 block';
    errorEl.textContent = message;

    field.parentNode.appendChild(errorEl);
  }

  /**
   * Submit Form with Retry
   */
  async function submitForm(form, data) {
    const maxRetries = 3;
    const initialDelay = 500;

    for (let attempt = 0; attempt < maxRetries; attempt++) {
      try {
        const response = await fetch(WEBHOOK_URL, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
        });

        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }

        return await response.json();
      } catch (error) {
        if (attempt === maxRetries - 1) {
          throw error;
        }

        // Wait before retry with exponential backoff
        await new Promise(resolve => setTimeout(resolve, initialDelay * Math.pow(2, attempt)));
      }
    }
  }

  /**
   * Handle Form Submission
   */
  async function handleFormSubmit(e) {
    e.preventDefault();

    const form = e.target;
    if (!validateForm(form)) return;

    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;

    // Set loading state
    submitBtn.disabled = true;
    submitBtn.innerHTML = `
      <svg class="animate-spin h-5 w-5 mr-2 inline" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
      Sending...
    `;

    try {
      // Gather form data
      const formData = new FormData(form);
      const data = {
        name: formData.get('name'),
        email: formData.get('email'),
        phone: formData.get('phone') || '',
        company: formData.get('company') || '',
        service: formData.get('service') || '',
        budget: formData.get('budget') || '',
        message: formData.get('message'),
        source: window.location.pathname,
        timestamp: new Date().toISOString(),
      };

      await submitForm(form, data);

      showToast('Thank you for your message! We\'ll get back to you soon.', 'success');
      form.reset();

    } catch (error) {
      console.error('Form submission error:', error);
      showToast('Something went wrong. Please try again or email us directly at hello@wbsolutions.ca', 'error');
    } finally {
      // Reset button state
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalText;
    }
  }

  /**
   * Initialize Forms
   */
  function init() {
    // Find all contact forms
    const contactForms = document.querySelectorAll('[data-contact-form]');

    contactForms.forEach(form => {
      form.addEventListener('submit', handleFormSubmit);

      // Clear error on input
      form.querySelectorAll('input, textarea, select').forEach(field => {
        field.addEventListener('input', function() {
          this.classList.remove('input-error', 'border-error');
          const errorMsg = this.parentNode.querySelector('.error-message');
          if (errorMsg) errorMsg.remove();
        });
      });
    });
  }

  // Initialize when DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  // Export for global access
  window.WBForms = {
    showToast,
    validateForm,
  };
})();
