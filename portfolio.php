<?php
$pageTitle = 'Portfolio';
$pageDescription = 'Explore our portfolio of successful web development, AI automation, and business solution projects. See real results from WordPress sites, static websites, chatbots, and database solutions.';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative min-h-[40vh] flex items-center justify-center px-4 py-20 overflow-hidden">
      <div class="max-w-4xl mx-auto text-center relative z-10">
        <span class="badge badge-gold mb-6 inline-block">Our Work</span>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
          <span class="text-gold-gradient">Our Work Speaks</span>
          <br>
          <span class="text-light-gray">for Itself</span>
        </h1>
        <p class="text-xl text-medium-gray max-w-2xl mx-auto">
          Explore our portfolio of successful projects and see how we've helped businesses transform their online presence
        </p>
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black pointer-events-none"></div>
    </section>

    <!-- Filter Bar -->
    <section class="py-12 px-4 sticky top-20 z-20 bg-black/80 backdrop-blur-lg border-b border-gold/20">
      <div class="max-w-7xl mx-auto">
        <div class="flex flex-wrap justify-center gap-4" id="portfolio-filters">
          <button class="filter-btn px-6 py-2 rounded-lg font-semibold transition-all bg-gold-gradient text-black" data-filter="All">All</button>
          <button class="filter-btn px-6 py-2 rounded-lg font-semibold transition-all glass text-light-gray hover:text-gold" data-filter="WordPress Website">WordPress Website</button>
          <button class="filter-btn px-6 py-2 rounded-lg font-semibold transition-all glass text-light-gray hover:text-gold" data-filter="Static Website">Static Website</button>
          <button class="filter-btn px-6 py-2 rounded-lg font-semibold transition-all glass text-light-gray hover:text-gold" data-filter="AI Solutions">AI Solutions</button>
          <button class="filter-btn px-6 py-2 rounded-lg font-semibold transition-all glass text-light-gray hover:text-gold" data-filter="Database Solutions">Database Solutions</button>
          <button class="filter-btn px-6 py-2 rounded-lg font-semibold transition-all glass text-light-gray hover:text-gold" data-filter="Business Automation">Business Automation</button>
        </div>
      </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-20 px-4">
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" id="portfolio-grid">

          <!-- Hidden History -->
          <div class="glass-strong p-8 rounded-lg hover-lift portfolio-item" data-category="WordPress Website">
            <div class="flex items-start justify-between mb-6">
              <div class="flex items-center gap-4">
                <div class="text-5xl">📚</div>
                <div>
                  <h3 class="text-2xl font-bold text-gold mb-1">Hidden History</h3>
                  <span class="badge badge-gold">WordPress Website</span>
                </div>
              </div>
              <div class="text-right">
                <div class="text-sm text-medium-gray">Budget</div>
                <div class="text-xl font-bold text-gold">Live</div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Challenge</h4>
              <p class="text-medium-gray">Create a comprehensive educational platform for historical research with advanced search capabilities</p>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Solution</h4>
              <p class="text-medium-gray">A WordPress-powered educational website with sophisticated content management and search functionality</p>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-3 uppercase tracking-wide">Results</h4>
              <ul class="space-y-2">
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Advanced search and filtering capabilities
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  100% mobile-responsive design
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Fast loading times with optimized content delivery
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  SEO-optimized structure for maximum discoverability
                </li>
              </ul>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Technologies</h4>
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">WordPress</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Content Management</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Search Engine</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Responsive Design</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">SEO Optimization</span>
              </div>
            </div>
            <div class="mt-6">
              <a href="https://hidden-history.org/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 bg-gold-gradient text-black font-semibold rounded hover:shadow-[0_0_30px_rgba(212,175,55,0.6)] transition-all duration-300">
                Visit Live Site
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
              </a>
            </div>
          </div>

          <!-- Legal Search Pro -->
          <div class="glass-strong p-8 rounded-lg hover-lift portfolio-item" data-category="AI Solutions">
            <div class="flex items-start justify-between mb-6">
              <div class="flex items-center gap-4">
                <div class="text-5xl">⚖️</div>
                <div>
                  <h3 class="text-2xl font-bold text-gold mb-1">Legal Search Pro</h3>
                  <span class="badge badge-gold">AI Solutions</span>
                </div>
              </div>
              <div class="text-right">
                <div class="text-sm text-medium-gray">Budget</div>
                <div class="text-xl font-bold text-gold">Pro</div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Challenge</h4>
              <p class="text-medium-gray">Build a professional-grade legal research platform with API integrations</p>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Solution</h4>
              <p class="text-medium-gray">Powerful legal research and search platform with sophisticated algorithms and API integrations</p>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-3 uppercase tracking-wide">Results</h4>
              <ul class="space-y-2">
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Advanced legal document search algorithms
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  API integration for external data sources
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Professional-grade security and data protection
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Scalable architecture for high-volume usage
                </li>
              </ul>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Technologies</h4>
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">API Integration</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Advanced Search</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Security</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Professional Tools</span>
              </div>
            </div>
            <div class="mt-6">
              <a href="https://hidden-history.org/legal-search-pro2/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 bg-gold-gradient text-black font-semibold rounded hover:shadow-[0_0_30px_rgba(212,175,55,0.6)] transition-all duration-300">
                Visit Live Site
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
              </a>
            </div>
          </div>

          <!-- Legal Database -->
          <div class="glass-strong p-8 rounded-lg hover-lift portfolio-item" data-category="Database Solutions">
            <div class="flex items-start justify-between mb-6">
              <div class="flex items-center gap-4">
                <div class="text-5xl">🗄️</div>
                <div>
                  <h3 class="text-2xl font-bold text-gold mb-1">Legal Database</h3>
                  <span class="badge badge-gold">Database Solutions</span>
                </div>
              </div>
              <div class="text-right">
                <div class="text-sm text-medium-gray">Budget</div>
                <div class="text-xl font-bold text-gold">Enterprise</div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Challenge</h4>
              <p class="text-medium-gray">Create a comprehensive legal database solution with robust data management</p>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Solution</h4>
              <p class="text-medium-gray">Scalable database system with advanced categorization and user management capabilities</p>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-3 uppercase tracking-wide">Results</h4>
              <ul class="space-y-2">
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Comprehensive legal document database
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Advanced categorization and tagging system
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Multi-criteria search and filtering
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Export and reporting capabilities
                </li>
              </ul>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Technologies</h4>
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Database Management</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Document Search</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Data Export</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">User Controls</span>
              </div>
            </div>
            <div class="mt-6">
              <a href="https://hidden-history.org/legal-database2/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 bg-gold-gradient text-black font-semibold rounded hover:shadow-[0_0_30px_rgba(212,175,55,0.6)] transition-all duration-300">
                Visit Live Site
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
              </a>
            </div>
          </div>

          <!-- E-Commerce Boutique -->
          <div class="glass-strong p-8 rounded-lg hover-lift portfolio-item" data-category="AI Solutions">
            <div class="flex items-start justify-between mb-6">
              <div class="flex items-center gap-4">
                <div class="text-5xl">👗</div>
                <div>
                  <h3 class="text-2xl font-bold text-gold mb-1">E-Commerce Boutique</h3>
                  <span class="badge badge-gold">AI Solutions</span>
                </div>
              </div>
              <div class="text-right">
                <div class="text-sm text-medium-gray">Budget</div>
                <div class="text-xl font-bold text-gold">$3,500</div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Challenge</h4>
              <p class="text-medium-gray">High cart abandonment, customer service bottleneck</p>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Solution</h4>
              <p class="text-medium-gray">Shopify-integrated site with AI chat agent</p>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-3 uppercase tracking-wide">Results</h4>
              <ul class="space-y-2">
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  35% reduction in cart abandonment
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  24/7 customer support with 90% satisfaction
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  25% increase in average order value
                </li>
              </ul>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Technologies</h4>
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Shopify</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">AI chatbot</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Custom integrations</span>
              </div>
            </div>
          </div>

          <!-- SaaS Startup Landing Page -->
          <div class="glass-strong p-8 rounded-lg hover-lift portfolio-item" data-category="Business Automation">
            <div class="flex items-start justify-between mb-6">
              <div class="flex items-center gap-4">
                <div class="text-5xl">💼</div>
                <div>
                  <h3 class="text-2xl font-bold text-gold mb-1">SaaS Startup Landing Page</h3>
                  <span class="badge badge-gold">Business Automation</span>
                </div>
              </div>
              <div class="text-right">
                <div class="text-sm text-medium-gray">Budget</div>
                <div class="text-xl font-bold text-gold">$2,000</div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Challenge</h4>
              <p class="text-medium-gray">Low conversion rate, manual lead follow-up</p>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Solution</h4>
              <p class="text-medium-gray">High-converting landing page with automated email sequences</p>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-3 uppercase tracking-wide">Results</h4>
              <ul class="space-y-2">
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  3.2% → 12.8% conversion rate
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  100% automated lead nurturing
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  $50K in sales in first 90 days
                </li>
              </ul>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Technologies</h4>
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Static site</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">n8n automation</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Email marketing</span>
              </div>
            </div>
          </div>

          <!-- Manufacturing Company -->
          <div class="glass-strong p-8 rounded-lg hover-lift portfolio-item" data-category="Static Website">
            <div class="flex items-start justify-between mb-6">
              <div class="flex items-center gap-4">
                <div class="text-5xl">🏭</div>
                <div>
                  <h3 class="text-2xl font-bold text-gold mb-1">Manufacturing Company</h3>
                  <span class="badge badge-gold">Static Website</span>
                </div>
              </div>
              <div class="text-right">
                <div class="text-sm text-medium-gray">Budget</div>
                <div class="text-xl font-bold text-gold">$4,500</div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Challenge</h4>
              <p class="text-medium-gray">Enterprise looking to reduce web hosting costs</p>
            </div>
            <div class="mb-4">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Solution</h4>
              <p class="text-medium-gray">Migration from expensive WordPress to static site</p>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-3 uppercase tracking-wide">Results</h4>
              <ul class="space-y-2">
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  $2,400/year → $120/year hosting costs
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  10x faster page loads
                </li>
                <li class="flex items-start gap-2 text-medium-gray">
                  <svg class="w-5 h-5 text-gold flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  Zero security vulnerabilities
                </li>
              </ul>
            </div>
            <div class="mb-6">
              <h4 class="text-sm font-bold text-light-gray mb-2 uppercase tracking-wide">Technologies</h4>
              <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Static site migration</span>
                <span class="px-3 py-1 bg-black/50 border border-gold/30 rounded-full text-sm text-gold">Enterprise CDN</span>
              </div>
            </div>
          </div>

        </div>

        <div id="no-projects" class="text-center py-20 hidden">
          <p class="text-xl text-medium-gray">No projects found in this category.</p>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black via-dark-gray/20 to-black">
      <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-4">
            <span class="text-gold-gradient">Client Success Stories</span>
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="flex gap-1 mb-4">
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
            </div>
            <p class="text-light-gray mb-6 italic">"Customer inquiries increased by 300% within the first month. The site is lightning fast and looks incredible!"</p>
            <div>
              <div class="text-gold font-semibold">Sarah Johnson</div>
              <div class="text-medium-gray text-sm">Restaurant Owner</div>
            </div>
          </div>

          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="flex gap-1 mb-4">
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
            </div>
            <p class="text-light-gray mb-6 italic">"The AI chatbot handles 85% of our support tickets automatically. We saved the cost of hiring 2 full-time support staff."</p>
            <div>
              <div class="text-gold font-semibold">Mike Chen</div>
              <div class="text-medium-gray text-sm">SaaS Founder</div>
            </div>
          </div>

          <div class="glass-strong p-6 rounded-lg hover-lift">
            <div class="flex gap-1 mb-4">
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
            </div>
            <p class="text-light-gray mb-6 italic">"Our hosting costs dropped from $2,400/year to $120/year, and the site is 10x faster. Best investment we made."</p>
            <div>
              <div class="text-gold font-semibold">David Martinez</div>
              <div class="text-medium-gray text-sm">Operations Manager</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
          <span class="text-gold-gradient">Your Project Could Be Next</span>
        </h2>
        <p class="text-xl text-medium-gray mb-8">
          Let's discuss how we can help your business succeed online
        </p>
        <a href="/contact.php" class="btn btn-primary text-lg px-8 py-4 glow-gold">Start Your Project</a>
      </div>
    </section>

    <script>
      // Portfolio filtering
      document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        const noProjects = document.getElementById('no-projects');

        filterButtons.forEach(btn => {
          btn.addEventListener('click', function() {
            const filter = this.dataset.filter;

            // Update active button
            filterButtons.forEach(b => {
              b.classList.remove('bg-gold-gradient', 'text-black');
              b.classList.add('glass', 'text-light-gray', 'hover:text-gold');
            });
            this.classList.remove('glass', 'text-light-gray', 'hover:text-gold');
            this.classList.add('bg-gold-gradient', 'text-black');

            // Filter items
            let visibleCount = 0;
            portfolioItems.forEach(item => {
              if (filter === 'All' || item.dataset.category === filter) {
                item.style.display = 'block';
                visibleCount++;
              } else {
                item.style.display = 'none';
              }
            });

            // Show/hide no results message
            noProjects.classList.toggle('hidden', visibleCount > 0);
          });
        });
      });
    </script>

<?php include 'includes/footer.php'; ?>
