<?php
$pageTitle = 'Home';
$pageDescription = 'Expert web development, AI chatbots, and business automation solutions. Transform your business with custom static websites, intelligent chat agents, and workflow automation.';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center px-4 overflow-hidden">
      <!-- 3D Floating Elements -->
      <div class="absolute floating-sphere w-24 h-24 bg-gold/20 rounded-full blur-xl" style="left: 10%; top: 20%;"></div>
      <div class="absolute floating-cube w-16 h-16 bg-gold/30 rounded-lg blur-lg" style="left: 80%; top: 30%;"></div>
      <div class="absolute floating-ring w-12 h-12 border-2 border-gold/30 rounded-full" style="left: 15%; top: 70%;"></div>
      <div class="absolute floating-abstract w-20 h-20 bg-gold/15 blur-lg" style="left: 85%; top: 75%;"></div>

      <!-- Hero Content -->
      <div class="max-w-5xl mx-auto text-center relative z-10">
        <span class="badge badge-gold mb-6 inline-block">AI-Powered Business Solutions</span>

        <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-6">
          <span class="text-gold-gradient">Your Partner for a</span>
          <br>
          <span class="text-light-gray">Powerful Online Presence</span>
        </h1>

        <p class="text-xl md:text-2xl text-medium-gray mb-8 max-w-3xl mx-auto leading-relaxed">
          Fast, responsive, maintenance-free static websites and AI solutions.
          Professional web development with transparent pricing starting at $500.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
          <a href="#services" class="btn btn-primary text-lg px-8 py-4 glow-gold">Explore Services</a>
          <a href="#portfolio" class="btn btn-outline text-lg px-8 py-4">View Our Work</a>
        </div>

        <!-- Trust Indicators -->
        <div class="flex flex-wrap justify-center gap-8 text-light-gray/60 text-sm">
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span>100+ Projects Delivered</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span>Transparent Pricing</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span>99.9% Uptime Guarantee</span>
          </div>
        </div>
      </div>

      <!-- Gradient Overlay -->
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black pointer-events-none"></div>
    </section>

    <!-- Services Section -->
    <section id="services" class="min-h-screen py-20 px-4">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Our Services</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            Choose the perfect solution for your business needs
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Starter Tier -->
          <div class="card hover-lift">
            <div class="w-14 h-14 bg-gold-gradient rounded-lg flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-light-gray mb-2">Starter</h3>
            <div class="text-3xl font-bold text-gold mb-1">$500-750</div>
            <div class="text-sm text-medium-gray mb-4">one-time</div>
            <p class="text-medium-gray mb-6">Perfect for small businesses looking to establish their online presence with a professional static website.</p>
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
                Mobile-responsive design
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Basic SEO optimization
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Contact form integration
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                30 days support
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Zero maintenance required
              </li>
            </ul>
            <a href="/contact.php" class="btn btn-primary w-full">Get Started</a>
          </div>

          <!-- Professional Tier (Highlighted) -->
          <div class="card hover-lift border-2 border-gold/50 relative">
            <div class="absolute -top-3 left-1/2 -translate-x-1/2">
              <span class="badge badge-gold">Most Popular</span>
            </div>
            <div class="w-14 h-14 bg-gold-gradient rounded-lg flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-light-gray mb-2">Professional</h3>
            <div class="text-3xl font-bold text-gold mb-1">$1,500-3,000</div>
            <div class="text-sm text-medium-gray mb-4">one-time</div>
            <p class="text-medium-gray mb-6">Comprehensive solution for growing businesses with AI integration and advanced features.</p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Everything in Starter
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                AI Chat Agent integration
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Custom branding elements
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Up to 15 pages
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
                90 days support
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                CMS integration
              </li>
            </ul>
            <a href="/contact.php" class="btn btn-primary w-full glow-gold">Get Started</a>
          </div>

          <!-- Enterprise Tier -->
          <div class="card hover-lift">
            <div class="w-14 h-14 bg-gold-gradient rounded-lg flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-light-gray mb-2">Enterprise</h3>
            <div class="text-3xl font-bold text-gold mb-1">$5,000+</div>
            <div class="text-sm text-medium-gray mb-4">&nbsp;</div>
            <p class="text-medium-gray mb-6">Custom solutions for large-scale applications with business automation and vector databases.</p>
            <ul class="space-y-2 mb-6">
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Everything in Professional
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Custom business automations
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Vector database solutions
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Unlimited pages
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Priority 24/7 support
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Dedicated project manager
              </li>
              <li class="flex items-center gap-2 text-light-gray text-sm">
                <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Ongoing maintenance included
              </li>
            </ul>
            <a href="/contact.php" class="btn btn-primary w-full">Contact Sales</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-charcoal-dark to-black">
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
          <div class="glass-strong p-8 rounded-lg text-center hover-lift">
            <div class="text-5xl font-bold text-gold-gradient mb-2">100+</div>
            <div class="text-light-gray">Projects Delivered</div>
          </div>
          <div class="glass-strong p-8 rounded-lg text-center hover-lift">
            <div class="text-5xl font-bold text-gold-gradient mb-2">$500</div>
            <div class="text-light-gray">Starting Price</div>
          </div>
          <div class="glass-strong p-8 rounded-lg text-center hover-lift">
            <div class="text-5xl font-bold text-gold-gradient mb-2">24/7</div>
            <div class="text-light-gray">AI Support</div>
          </div>
          <div class="glass-strong p-8 rounded-lg text-center hover-lift">
            <div class="text-5xl font-bold text-gold-gradient mb-2">99.9%</div>
            <div class="text-light-gray">Uptime Guarantee</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ROI Calculator Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
          <span class="badge badge-gold mb-6 inline-block">Calculate Your Savings</span>
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">See Your ROI</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            Discover how much time and money AI automation can save your business.
          </p>
        </div>

        <div id="roi-calculator" class="glass-strong p-8 rounded-lg">
          <h3 class="text-2xl font-bold text-gold-gradient mb-6">AI Automation ROI Calculator</h3>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Inputs -->
            <div class="space-y-4">
              <div>
                <label for="calc-inquiries" class="text-light-gray block mb-2">Customer Inquiries per Month</label>
                <input type="number" id="calc-inquiries" value="100" class="input w-full">
              </div>

              <div>
                <label for="calc-hourly-rate" class="text-light-gray block mb-2">Employee Hourly Rate ($)</label>
                <input type="number" id="calc-hourly-rate" value="25" class="input w-full">
              </div>

              <div>
                <label for="calc-hours-per-inquiry" class="text-light-gray block mb-2">Hours per Inquiry</label>
                <input type="number" id="calc-hours-per-inquiry" value="0.5" step="0.1" class="input w-full">
              </div>

              <div>
                <label for="calc-automation-rate" class="text-light-gray block mb-2">Automation Rate (%)</label>
                <input type="number" id="calc-automation-rate" value="85" class="input w-full">
              </div>

              <button id="calc-button" class="btn btn-primary w-full glow-gold">Calculate ROI</button>
            </div>

            <!-- Results -->
            <div class="space-y-6">
              <div class="glass rounded-lg p-6 border border-gold/30">
                <div class="text-medium-gray text-sm mb-2">Monthly Savings</div>
                <div id="calc-monthly-savings" class="text-4xl font-bold text-gold-gradient">$0</div>
              </div>

              <div class="glass rounded-lg p-6 border border-gold/30">
                <div class="text-medium-gray text-sm mb-2">Annual Savings</div>
                <div id="calc-annual-savings" class="text-4xl font-bold text-gold-gradient">$0</div>
              </div>

              <div class="glass rounded-lg p-6 border border-gold/30">
                <div class="text-medium-gray text-sm mb-2">Payback Period</div>
                <div id="calc-payback-period" class="text-4xl font-bold text-gold-gradient">Calculate</div>
              </div>

              <div id="calc-result-tip" class="hidden p-4 bg-gold/10 border border-gold/30 rounded-lg">
                <p class="text-light-gray text-sm"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="min-h-screen py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
          <span class="badge badge-gold mb-6 inline-block">Our Work</span>
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Featured Projects</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            Real results for real businesses. See how we've helped clients transform their digital presence.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Portfolio Item 1 -->
          <div class="card hover-lift">
            <div class="text-5xl mb-4">🛒</div>
            <span class="badge badge-gold text-xs mb-2">Web Development</span>
            <h3 class="text-xl font-bold text-light-gray mb-2">E-Commerce Platform</h3>
            <p class="text-medium-gray text-sm mb-4">Full-stack e-commerce solution with payment integration and inventory management.</p>
            <div class="flex flex-wrap gap-2">
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">React</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">Node.js</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">Stripe</span>
            </div>
          </div>

          <!-- Portfolio Item 2 -->
          <div class="card hover-lift">
            <div class="text-5xl mb-4">🤖</div>
            <span class="badge badge-gold text-xs mb-2">AI Automation</span>
            <h3 class="text-xl font-bold text-light-gray mb-2">AI Customer Support Bot</h3>
            <p class="text-medium-gray text-sm mb-4">Intelligent chatbot handling 85% of customer inquiries autonomously.</p>
            <div class="flex flex-wrap gap-2">
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">n8n</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">GPT-4</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">Vector DB</span>
            </div>
          </div>

          <!-- Portfolio Item 3 -->
          <div class="card hover-lift">
            <div class="text-5xl mb-4">📚</div>
            <span class="badge badge-gold text-xs mb-2">Vector Database</span>
            <h3 class="text-xl font-bold text-light-gray mb-2">Document Search System</h3>
            <p class="text-medium-gray text-sm mb-4">Semantic search across 10,000+ legal documents with 95% accuracy.</p>
            <div class="flex flex-wrap gap-2">
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">Pinecone</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">Embeddings</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">RAG</span>
            </div>
          </div>

          <!-- Portfolio Item 4 -->
          <div class="card hover-lift">
            <div class="text-5xl mb-4">🍽️</div>
            <span class="badge badge-gold text-xs mb-2">Web Development</span>
            <h3 class="text-xl font-bold text-light-gray mb-2">Restaurant Booking System</h3>
            <p class="text-medium-gray text-sm mb-4">Modern booking platform with real-time availability and SMS notifications.</p>
            <div class="flex flex-wrap gap-2">
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">TypeScript</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">Tailwind</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">Twilio</span>
            </div>
          </div>

          <!-- Portfolio Item 5 -->
          <div class="card hover-lift">
            <div class="text-5xl mb-4">💼</div>
            <span class="badge badge-gold text-xs mb-2">AI Automation</span>
            <h3 class="text-xl font-bold text-light-gray mb-2">Sales Lead Qualifier</h3>
            <p class="text-medium-gray text-sm mb-4">Automated lead qualification saving 20 hours per week.</p>
            <div class="flex flex-wrap gap-2">
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">n8n</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">CRM</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">AI</span>
            </div>
          </div>

          <!-- Portfolio Item 6 -->
          <div class="card hover-lift">
            <div class="text-5xl mb-4">💡</div>
            <span class="badge badge-gold text-xs mb-2">Vector Database</span>
            <h3 class="text-xl font-bold text-light-gray mb-2">Knowledge Base Platform</h3>
            <p class="text-medium-gray text-sm mb-4">Internal wiki with AI-powered search and recommendations.</p>
            <div class="flex flex-wrap gap-2">
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">RAG</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">Custom Embeddings</span>
              <span class="text-xs px-2 py-1 bg-gold/10 text-gold rounded">API</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="min-h-screen py-20 px-4">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <span class="badge badge-gold mb-6 inline-block">Our Process</span>
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">How We Work</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            A proven methodology that delivers results, on time and on budget.
          </p>
        </div>

        <div class="space-y-8">
          <!-- Step 1 -->
          <div class="glass-strong p-8 rounded-lg flex flex-col md:flex-row items-start gap-6 hover-lift">
            <div class="w-16 h-16 bg-gold-gradient rounded-lg flex items-center justify-center flex-shrink-0">
              <span class="text-black font-bold text-xl">01</span>
            </div>
            <div>
              <h3 class="text-2xl font-bold text-gold mb-2">Discovery & Strategy</h3>
              <p class="text-medium-gray leading-relaxed">We dive deep into your business goals, challenges, and target audience. Through detailed consultations, we map out the perfect solution tailored to your needs.</p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="glass-strong p-8 rounded-lg flex flex-col md:flex-row items-start gap-6 hover-lift">
            <div class="w-16 h-16 bg-gold-gradient rounded-lg flex items-center justify-center flex-shrink-0">
              <span class="text-black font-bold text-xl">02</span>
            </div>
            <div>
              <h3 class="text-2xl font-bold text-gold mb-2">Design & Planning</h3>
              <p class="text-medium-gray leading-relaxed">Our team creates wireframes, mockups, and technical architecture. You'll see exactly what you're getting before we write a single line of code.</p>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="glass-strong p-8 rounded-lg flex flex-col md:flex-row items-start gap-6 hover-lift">
            <div class="w-16 h-16 bg-gold-gradient rounded-lg flex items-center justify-center flex-shrink-0">
              <span class="text-black font-bold text-xl">03</span>
            </div>
            <div>
              <h3 class="text-2xl font-bold text-gold mb-2">Development & Testing</h3>
              <p class="text-medium-gray leading-relaxed">We build your solution using cutting-edge technology and best practices. Rigorous testing ensures everything works flawlessly across all devices.</p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="glass-strong p-8 rounded-lg flex flex-col md:flex-row items-start gap-6 hover-lift">
            <div class="w-16 h-16 bg-gold-gradient rounded-lg flex items-center justify-center flex-shrink-0">
              <span class="text-black font-bold text-xl">04</span>
            </div>
            <div>
              <h3 class="text-2xl font-bold text-gold mb-2">Launch & Support</h3>
              <p class="text-medium-gray leading-relaxed">We handle deployment, monitor performance, and provide ongoing support. Your success is our success - we're with you every step of the way.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="about" class="min-h-screen py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <span class="badge badge-gold mb-6 inline-block">Testimonials</span>
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">What Clients Say</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            Don't just take our word for it—hear from businesses we've helped transform.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Testimonial 1 -->
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="flex gap-1 mb-4">
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
            </div>
            <p class="text-light-gray mb-6 italic">"WB Solutions transformed our outdated website into a modern, fast, and beautiful platform. Customer inquiries increased by 300%!"</p>
            <div>
              <div class="text-gold font-semibold">Sarah Johnson</div>
              <div class="text-medium-gray text-sm">Owner, Local Bakery</div>
            </div>
          </div>

          <!-- Testimonial 2 -->
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="flex gap-1 mb-4">
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
            </div>
            <p class="text-light-gray mb-6 italic">"The AI chatbot they built handles most of our customer questions automatically. It saved us from hiring 2 support staff!"</p>
            <div>
              <div class="text-gold font-semibold">Mike Chen</div>
              <div class="text-medium-gray text-sm">CEO, SaaS Startup</div>
            </div>
          </div>

          <!-- Testimonial 3 -->
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="flex gap-1 mb-4">
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
            </div>
            <p class="text-light-gray mb-6 italic">"Their vector database solution made our document search lightning fast. What used to take hours now takes seconds."</p>
            <div>
              <div class="text-gold font-semibold">Jennifer Martinez</div>
              <div class="text-medium-gray text-sm">CTO, Legal Firm</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="min-h-screen py-20 px-4">
      <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
          <span class="badge badge-gold mb-6 inline-block">FAQ</span>
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Frequently Asked Questions</span>
          </h2>
          <p class="text-xl text-medium-gray max-w-2xl mx-auto">
            Got questions? We've got answers.
          </p>
        </div>

        <div class="space-y-4">
          <div class="accordion-item">
            <button class="accordion-trigger">
              What's included in the $500-750 website package?
              <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="accordion-content">
              <div class="accordion-body">
                A fully responsive 5-page static website, custom design, contact form, basic SEO, mobile optimization, and 30 days of support. One-time fee, no monthly maintenance required.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger">
              How long does it take to build a website?
              <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="accordion-content">
              <div class="accordion-body">
                Most static websites are completed within 2-4 weeks from design approval. Complex projects with AI integration may take 4-8 weeks depending on requirements.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger">
              Do I need to pay for hosting separately?
              <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="accordion-content">
              <div class="accordion-body">
                Hosting is available starting at $10/month, or you can use your own hosting. We also offer free hosting on Netlify for qualifying projects.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger">
              Can you help with an existing website?
              <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="accordion-content">
              <div class="accordion-body">
                Absolutely! We can redesign, migrate, optimize, or add features to existing websites. We specialize in converting expensive WordPress sites to fast, maintenance-free static sites.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <button class="accordion-trigger">
              Do you offer payment plans?
              <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="accordion-content">
              <div class="accordion-body">
                Yes, we offer 50% upfront, 50% upon completion for projects over $1,500. For enterprise projects, we can arrange custom payment schedules based on milestones.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="min-h-screen py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-2xl mx-auto">
        <div class="text-center mb-12">
          <span class="badge badge-gold mb-6 inline-block">Get In Touch</span>
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Let's Build Something Amazing</span>
          </h2>
          <p class="text-xl text-medium-gray">
            Ready to transform your business? Fill out the form below and we'll get back to you within 24 hours.
          </p>
        </div>

        <form data-contact-form class="glass-strong p-8 md:p-12 rounded-lg space-y-6">
          <div>
            <label for="name" class="block text-light-gray mb-2">Full Name <span class="text-gold">*</span></label>
            <input type="text" id="name" name="name" required class="input" placeholder="John Doe">
          </div>

          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label for="email" class="block text-light-gray mb-2">Email <span class="text-gold">*</span></label>
              <input type="email" id="email" name="email" required class="input" placeholder="john@example.com">
            </div>
            <div>
              <label for="phone" class="block text-light-gray mb-2">Phone (Optional)</label>
              <input type="tel" id="phone" name="phone" class="input" placeholder="(123) 456-7890">
            </div>
          </div>

          <div>
            <label for="service" class="block text-light-gray mb-2">Service Interest <span class="text-gold">*</span></label>
            <select id="service" name="service" required class="input">
              <option value="">Select a service</option>
              <option value="static-website">Static Website</option>
              <option value="ai-chat-agent">AI Chat Agent</option>
              <option value="business-automation">Business Automation</option>
              <option value="custom-branding">Custom Branding</option>
              <option value="full-package">Full Package</option>
              <option value="not-sure">Not Sure</option>
            </select>
          </div>

          <div>
            <label for="message" class="block text-light-gray mb-2">Project Details <span class="text-gold">*</span></label>
            <textarea id="message" name="message" required rows="4" class="input" placeholder="Tell us about your project..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary w-full text-lg py-4 glow-gold">Send Message</button>

          <p class="text-sm text-medium-gray text-center">
            We respect your privacy and will never share your information.
          </p>
        </form>
      </div>
    </section>

<script>
// FAQ Accordion functionality
document.querySelectorAll('.accordion-trigger').forEach(button => {
  button.addEventListener('click', () => {
    const item = button.closest('.accordion-item');
    const isOpen = item.classList.contains('open');

    // Close all items
    document.querySelectorAll('.accordion-item').forEach(i => i.classList.remove('open'));

    // Toggle current item
    if (!isOpen) {
      item.classList.add('open');
    }
  });
});
</script>

<?php include 'includes/footer.php'; ?>
