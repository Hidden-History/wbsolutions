<?php
$pageTitle = 'Contact Us';
$pageDescription = 'Get in touch with WB Solutions for your web development, AI automation, or business solutions needs. Let\'s discuss your project and build something amazing together.';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative min-h-[40vh] flex items-center justify-center px-4 py-20 overflow-hidden">
      <div class="max-w-4xl mx-auto text-center relative z-10">
        <span class="badge badge-gold mb-6 inline-block">Get In Touch</span>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
          <span class="text-gold-gradient">Let's Build Something</span>
          <br>
          <span class="text-light-gray">Amazing Together</span>
        </h1>
        <p class="text-xl text-medium-gray max-w-2xl mx-auto">
          Ready to transform your business? Get in touch and let's discuss your project
        </p>
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black pointer-events-none"></div>
    </section>

    <!-- Contact Form and Info Section -->
    <section class="py-20 px-4">
      <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-3 gap-12">
          <!-- Contact Form -->
          <div class="lg:col-span-2">
            <form data-contact-form class="glass-strong p-8 md:p-12 rounded-lg space-y-6">
              <!-- Name -->
              <div>
                <label for="name" class="block text-light-gray mb-2">Full Name <span class="text-gold">*</span></label>
                <input type="text" id="name" name="name" required class="input" placeholder="John Doe">
              </div>

              <!-- Email and Phone -->
              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <label for="email" class="block text-light-gray mb-2">Email Address <span class="text-gold">*</span></label>
                  <input type="email" id="email" name="email" required class="input" placeholder="john@example.com">
                </div>
                <div>
                  <label for="phone" class="block text-light-gray mb-2">Phone (Optional)</label>
                  <input type="tel" id="phone" name="phone" class="input" placeholder="(123) 456-7890">
                </div>
              </div>

              <!-- Company Name -->
              <div>
                <label for="company" class="block text-light-gray mb-2">Company Name (Optional)</label>
                <input type="text" id="company" name="company" class="input" placeholder="Your Company">
              </div>

              <!-- Service Interest and Budget -->
              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <label for="service" class="block text-light-gray mb-2">Service Interest <span class="text-gold">*</span></label>
                  <select id="service" name="service" required class="input">
                    <option value="">Select a service</option>
                    <option value="static-website">Static Website</option>
                    <option value="ai-chat-agent">AI Chat Agent</option>
                    <option value="business-automation">Business Automation</option>
                    <option value="custom-branding">Custom Branding</option>
                    <option value="seo-services">SEO Services</option>
                    <option value="full-package">Full Package</option>
                    <option value="not-sure">Not Sure</option>
                  </select>
                </div>
                <div>
                  <label for="budget" class="block text-light-gray mb-2">Budget Range</label>
                  <select id="budget" name="budget" class="input">
                    <option value="">Select budget</option>
                    <option value="500-750">$500-$750</option>
                    <option value="750-1500">$750-$1,500</option>
                    <option value="1500-3000">$1,500-$3,000</option>
                    <option value="3000-5000">$3,000-$5,000</option>
                    <option value="5000+">$5,000+</option>
                    <option value="not-sure">Not Sure</option>
                  </select>
                </div>
              </div>

              <!-- Timeline -->
              <div>
                <label for="timeline" class="block text-light-gray mb-2">Project Timeline</label>
                <select id="timeline" name="timeline" class="input">
                  <option value="">Select timeline</option>
                  <option value="asap">ASAP</option>
                  <option value="1-2-months">1-2 months</option>
                  <option value="3-6-months">3-6 months</option>
                  <option value="just-exploring">Just exploring</option>
                </select>
              </div>

              <!-- Message -->
              <div>
                <label for="message" class="block text-light-gray mb-2">Project Details <span class="text-gold">*</span></label>
                <textarea id="message" name="message" required rows="5" class="input" placeholder="Tell us about your project, goals, and any specific requirements..."></textarea>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn btn-primary w-full text-lg py-4 glow-gold">Send Message</button>

              <p class="text-sm text-medium-gray text-center">
                We respect your privacy and will never share your information.
              </p>
            </form>
          </div>

          <!-- Contact Info and FAQ -->
          <div class="space-y-8">
            <!-- Contact Information -->
            <div class="glass-strong p-6 rounded-lg">
              <h3 class="text-2xl font-bold text-gold mb-6">Contact Information</h3>

              <div class="space-y-4">
                <div class="flex items-start gap-3">
                  <svg class="w-6 h-6 text-gold flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                  <div>
                    <div class="text-sm text-medium-gray">Email</div>
                    <a href="mailto:hello@wbsolutions.ca" class="text-light-gray hover:text-gold">hello@wbsolutions.ca</a>
                  </div>
                </div>

                <div class="flex items-start gap-3">
                  <svg class="w-6 h-6 text-gold flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                  <div>
                    <div class="text-sm text-medium-gray">Phone</div>
                    <a href="tel:+11234567890" class="text-light-gray hover:text-gold">(123) 456-7890</a>
                  </div>
                </div>

                <div class="flex items-start gap-3">
                  <svg class="w-6 h-6 text-gold flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <div>
                    <div class="text-sm text-medium-gray">Business Hours</div>
                    <div class="text-light-gray">Mon-Fri, 9am-6pm EST</div>
                  </div>
                </div>

                <div class="flex items-start gap-3">
                  <svg class="w-6 h-6 text-gold flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <div>
                    <div class="text-sm text-medium-gray">Response Time</div>
                    <div class="text-light-gray">Within 24 hours</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Quick FAQ -->
            <div class="glass-strong p-6 rounded-lg">
              <h3 class="text-2xl font-bold text-gold mb-6">Quick FAQ</h3>

              <div class="space-y-4">
                <div class="accordion-item">
                  <button class="accordion-trigger text-sm">
                    What's included in the $500-750 package?
                    <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                  </button>
                  <div class="accordion-content">
                    <div class="accordion-body text-sm">
                      A fully responsive 5-page static website, custom design, contact form, basic SEO, mobile optimization, and 30 days of support. One-time fee, no monthly maintenance required.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <button class="accordion-trigger text-sm">
                    How long does it take?
                    <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                  </button>
                  <div class="accordion-content">
                    <div class="accordion-body text-sm">
                      Most static websites are completed within 2-4 weeks from design approval. Complex projects with AI integration may take 4-8 weeks.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <button class="accordion-trigger text-sm">
                    Do you offer payment plans?
                    <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                  </button>
                  <div class="accordion-content">
                    <div class="accordion-body text-sm">
                      Yes, we offer 50% upfront, 50% upon completion for projects over $1,500.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Trust Signals -->
            <div class="glass-strong p-6 rounded-lg">
              <h3 class="text-xl font-bold text-gold mb-4">Why Choose Us</h3>
              <div class="space-y-3 text-sm">
                <div class="flex items-center gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  100+ Projects Delivered
                </div>
                <div class="flex items-center gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  5-Star Average Rating
                </div>
                <div class="flex items-center gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Money-Back Guarantee
                </div>
                <div class="flex items-center gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Transparent Pricing
                </div>
                <div class="flex items-center gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  No Hidden Fees
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<script>
// FAQ Accordion functionality
document.querySelectorAll('.accordion-trigger').forEach(button => {
  button.addEventListener('click', () => {
    const item = button.closest('.accordion-item');
    const isOpen = item.classList.contains('open');

    // Close all items in this container
    item.parentElement.querySelectorAll('.accordion-item').forEach(i => i.classList.remove('open'));

    // Toggle current item
    if (!isOpen) {
      item.classList.add('open');
    }
  });
});
</script>

<?php include 'includes/footer.php'; ?>
