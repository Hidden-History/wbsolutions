<?php
$pageTitle = 'Services';
$pageDescription = 'Explore our comprehensive digital solutions: static websites, AI chatbots, business automation, and custom branding. Premium technology solutions tailored to your business needs.';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative min-h-[40vh] flex items-center justify-center px-4 py-20 overflow-hidden">
      <div class="max-w-4xl mx-auto text-center relative z-10">
        <span class="badge badge-gold mb-6 inline-block">Our Services</span>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
          <span class="text-gold-gradient">Premium Digital Solutions</span>
        </h1>
        <p class="text-xl text-medium-gray max-w-2xl mx-auto">
          Comprehensive solutions designed to elevate your business and streamline your operations with cutting-edge technology
        </p>
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black pointer-events-none"></div>
    </section>

    <!-- Service Detail Sections -->
    <section class="py-20 px-4">
      <div class="max-w-6xl mx-auto space-y-20">
        <!-- Service 1: Static Website Development -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div>
            <div class="w-16 h-16 bg-gold-gradient rounded-lg flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
              </svg>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gold-gradient">
              Static Website Development
            </h2>
            <p class="text-light-gray mb-6 leading-relaxed">
              Fast, secure, and maintenance-free websites that just work. Perfect for businesses that want a professional online presence without the ongoing hassle and costs.
            </p>
            <ul class="space-y-3 mb-6">
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Lightning-fast loading speeds
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                100% mobile-responsive design
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Zero maintenance required
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Enhanced security (no databases to hack)
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                SEO-optimized structure
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Cross-browser compatibility
              </li>
            </ul>
            <div class="text-2xl font-bold text-gold mb-4">$500-$750</div>
            <div class="flex gap-4">
              <a href="/contact.php" class="btn btn-primary">Get Started</a>
              <a href="/services/static-websites.php" class="btn btn-outline">Learn More</a>
            </div>
          </div>
          <div class="glass-strong p-12 rounded-lg">
            <div class="text-6xl mb-4 text-center">🚀</div>
            <p class="text-center text-medium-gray italic">
              "Our static site loads in 0.4 seconds vs 2.3 seconds with our old WordPress site. Customer engagement is up 300%!"
            </p>
            <p class="text-center text-gold mt-4 font-semibold">- Local Restaurant Owner</p>
          </div>
        </div>

        <!-- Service 2: AI Chat Agents -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div class="order-2 md:order-1 glass-strong p-12 rounded-lg">
            <div class="text-6xl mb-4 text-center">🤖</div>
            <p class="text-center text-medium-gray italic">
              "The AI chatbot handles 85% of our customer inquiries automatically. We saved the cost of hiring 2 support staff!"
            </p>
            <p class="text-center text-gold mt-4 font-semibold">- SaaS Startup CEO</p>
          </div>
          <div class="order-1 md:order-2">
            <div class="w-16 h-16 bg-gold-gradient rounded-lg flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
              </svg>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gold-gradient">
              AI Chat Agents
            </h2>
            <p class="text-light-gray mb-6 leading-relaxed">
              Intelligent chatbots that provide 24/7 customer support, answer questions, and qualify leads automatically using the latest AI technology.
            </p>
            <ul class="space-y-3 mb-6">
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                24/7 availability for customer support
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Custom training on your business data
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Natural language processing
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Seamless integration with your website
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Multi-language support
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Real-time conversation analytics
              </li>
            </ul>
            <div class="text-2xl font-bold text-gold mb-4">$300-$800 (add-on)</div>
            <div class="flex gap-4">
              <a href="/contact.php" class="btn btn-primary">Get a Quote</a>
              <a href="/services/ai-chat-agents.php" class="btn btn-outline">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Service 3: Business Automations -->
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div>
            <div class="w-16 h-16 bg-gold-gradient rounded-lg flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
              </svg>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gold-gradient">
              Business Automations
            </h2>
            <p class="text-light-gray mb-6 leading-relaxed">
              Streamline your operations with custom AI-powered automations that save time, reduce errors, and let you focus on growing your business.
            </p>
            <ul class="space-y-3 mb-6">
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Custom workflow automation
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                AI-powered process optimization
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Integration with existing systems
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Real-time monitoring and reporting
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Scalable solutions for growth
              </li>
              <li class="flex items-center gap-3 text-medium-gray">
                <svg class="w-5 h-5 text-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                ROI tracking and analytics
              </li>
            </ul>
            <div class="text-2xl font-bold text-gold mb-4">Custom Quote</div>
            <div class="flex gap-4">
              <a href="/contact.php" class="btn btn-primary">Contact Us</a>
              <a href="/services/business-automation.php" class="btn btn-outline">Learn More</a>
            </div>
          </div>
          <div class="glass-strong p-12 rounded-lg">
            <div class="text-6xl mb-4 text-center">⚙️</div>
            <p class="text-center text-medium-gray italic">
              "Automated lead qualification saves us 20 hours per week. We can focus on closing deals instead of manual data entry."
            </p>
            <p class="text-center text-gold mt-4 font-semibold">- Sales Director</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Package Comparison Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Pre-Built Packages</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            Choose a package that fits your needs, or let us create a custom solution
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Starter Business -->
          <div class="card hover-lift">
            <div class="w-14 h-14 bg-gold-gradient rounded-lg flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-light-gray mb-2">Starter Business</h3>
            <div class="text-3xl font-bold text-gold mb-1">$500-750</div>
            <div class="text-sm text-medium-gray mb-4">one-time</div>
            <p class="text-medium-gray mb-6">Perfect for small businesses looking to establish their online presence.</p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Static website (5 pages)
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Basic branding consultation
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Contact form
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Mobile responsive
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Basic SEO
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                30 days support
              </li>
            </ul>
            <a href="/contact.php" class="btn btn-primary w-full">Get Started</a>
          </div>

          <!-- Growth Business (Highlighted) -->
          <div class="card hover-lift border-2 border-gold/50 relative">
            <div class="absolute -top-3 left-1/2 -translate-x-1/2">
              <span class="badge badge-gold">Most Popular</span>
            </div>
            <div class="w-14 h-14 bg-gold-gradient rounded-lg flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-light-gray mb-2">Growth Business</h3>
            <div class="text-3xl font-bold text-gold mb-1">$1,500-3,000</div>
            <div class="text-sm text-medium-gray mb-4">one-time</div>
            <p class="text-medium-gray mb-6">Comprehensive solution for growing businesses with AI integration.</p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Static website (15 pages)
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Custom branding package
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                AI chat agent
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                CMS integration
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Advanced SEO
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                3 months support
              </li>
            </ul>
            <a href="/contact.php" class="btn btn-primary w-full glow-gold">Get Started</a>
          </div>

          <!-- Enterprise -->
          <div class="card hover-lift">
            <div class="w-14 h-14 bg-gold-gradient rounded-lg flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-light-gray mb-2">Enterprise</h3>
            <div class="text-3xl font-bold text-gold mb-1">$5,000+</div>
            <div class="text-sm text-medium-gray mb-4">&nbsp;</div>
            <p class="text-medium-gray mb-6">Custom solutions for large-scale applications with ongoing support.</p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Custom web application
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Full AI automation suite
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Vector database integration
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Ongoing maintenance
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Priority support
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Dedicated account manager
              </li>
            </ul>
            <a href="/contact.php" class="btn btn-primary w-full">Contact Sales</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Add-On Services -->
    <section class="py-20 px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Add-On Services</span>
          </h2>
          <p class="text-xl text-medium-gray">
            Enhance your package with additional services
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
          <div class="glass-strong p-6 rounded-lg flex justify-between items-center hover-lift">
            <span class="text-light-gray font-semibold">Logo Design</span>
            <span class="text-gold font-bold">$200-$500</span>
          </div>
          <div class="glass-strong p-6 rounded-lg flex justify-between items-center hover-lift">
            <span class="text-light-gray font-semibold">Additional Pages</span>
            <span class="text-gold font-bold">$50-$150/page</span>
          </div>
          <div class="glass-strong p-6 rounded-lg flex justify-between items-center hover-lift">
            <span class="text-light-gray font-semibold">AI Chatbot</span>
            <span class="text-gold font-bold">$300-$800</span>
          </div>
          <div class="glass-strong p-6 rounded-lg flex justify-between items-center hover-lift">
            <span class="text-light-gray font-semibold">SEO Monthly</span>
            <span class="text-gold font-bold">$150-$400/month</span>
          </div>
          <div class="glass-strong p-6 rounded-lg flex justify-between items-center hover-lift">
            <span class="text-light-gray font-semibold">Hosting</span>
            <span class="text-gold font-bold">$10-$50/month</span>
          </div>
          <div class="glass-strong p-6 rounded-lg flex justify-between items-center hover-lift">
            <span class="text-light-gray font-semibold">Business Automation</span>
            <span class="text-gold font-bold">Custom quote</span>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
          <span class="text-gold-gradient">Ready to Transform Your Business?</span>
        </h2>
        <p class="text-xl text-medium-gray mb-8">
          Contact us today to discuss your project and discover how our services can help your business thrive
        </p>
        <a href="/contact.php" class="btn btn-primary text-lg px-8 py-4 glow-gold">Get Started Today</a>
      </div>
    </section>

<?php include 'includes/footer.php'; ?>
